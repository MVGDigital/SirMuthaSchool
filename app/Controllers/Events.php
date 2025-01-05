<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\EventModel;

class Events extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $eventModel = new EventModel();

        $banner = $bannerModel->where('page', 'events')->where('is_published', 1)->first();
        $upcomingEvents = $eventModel->where('event_date >=', date('Y-m-d'))
                                      ->where('is_published', 1)
                                      ->orderBy('event_date', 'ASC')
                                      ->findAll();
        $pastEvents = $eventModel->where('event_date <', date('Y-m-d'))
                                  ->where('is_published', 1)
                                  ->orderBy('event_date', 'DESC')
                                  ->findAll();

        $data = [
            'page_title' => 'Events',
            'page_code' => 'events',
            'banner' => $banner,
            'upcoming_events' => $upcomingEvents,
            'past_events' => $pastEvents
        ];

        return view('header', $data) . view('events', $data) . view('footer', $data);
    }

    public function setEventDetails()
    {
        $eventId = $this->request->getPost('event_id');
        $eventType = $this->request->getPost('event_type');
        
        session()->set([
            'current_event_id' => $eventId,
            'event_type' => $eventType
        ]);

        if ($eventType === 'past') {
            return redirect()->to('events/past-event/details');
        }
        return redirect()->to('events/details');
    }

    public function eventDetails()
    {
        $eventId = session()->get('current_event_id');
        $eventType = session()->get('event_type');

        if (!$eventId) {
            return redirect()->to('events');
        }

        $bannerModel = new BannerModel();
        $eventModel = new EventModel();

        $banner = $bannerModel->where('page', 'events')->where('is_published', 1)->first();
        $event = $eventModel->find($eventId);

        if (!$event) {
            return redirect()->to('events');
        }

        $showRegistrationForm = ($eventType === 'upcoming' && $event['registration_required'] === '1');

        $data = [
            'page_title' => 'Event Details',
            'page_code' => 'events-details',
            'banner' => $banner,
            'event' => $event,
            'show_registration_form' => $showRegistrationForm
        ];

        return view('header', $data) . view('events-details', $data) . view('footer');
    }

    public function registerEvent()
    {
        $eventId = session()->get('current_event_id');
        
        if (!$eventId) {
            return redirect()->to('events')->with('error', 'Invalid event selection');
        }

        $rules = [
            'first-name' => 'required|min_length[2]',
            'last-name' => 'required|min_length[2]',
            'email' => 'required|valid_email',
            'mobile-number' => 'required|min_length[10]',
            'gender' => 'required|in_list[Male,Female,Other]',
            'guests' => 'required|numeric|greater_than_equal_to[0]',
            'residential_address' => 'required|min_length[10]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $eventUserModel = new EventUserModel();

        $data = [
            'event_id' => $eventId,
            'user_name' => $this->request->getPost('first-name') . ' ' . $this->request->getPost('last-name'),
            'email' => $this->request->getPost('email'),
            'mobile_number' => $this->request->getPost('mobile-number'),
            'gender' => $this->request->getPost('gender'),
            'guests' => $this->request->getPost('guests'),
            'residential_address' => $this->request->getPost('residential_address')
        ];

        try {
            $eventUserModel->insert($data);
            return redirect()->back()->with('success', 'Registration completed successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Registration failed. Please try again.');
        }
    }
}