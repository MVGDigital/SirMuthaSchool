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

    public function eventDetails()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'events')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'EventDetails',
            'page_code' => 'events-details',
            'banner' => $banner
        ];

        return view('header', $data) . view('events-details', $data) . view('footer');
    }
    
}