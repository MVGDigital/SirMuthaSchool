<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\EventModel;
use App\Models\EventUserModel;
use Aws\Ses\SesClient;
use Aws\Exception\AwsException;

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

        // Get distinct months for the dropdown
        $months = $eventModel->select("DATE_FORMAT(event_date, '%Y-%m') as month")
                            ->groupBy("month")
                            ->orderBy("month", "ASC")
                            ->findAll();

        $selectedMonth = $this->request->getGet('month');
        $keyword = $this->request->getGet('keyword');

        // Filter events based on selected month and keyword
        $eventQuery = $eventModel->where('is_published', 1);
        
        if ($selectedMonth) {
            $eventQuery->where("DATE_FORMAT(event_date, '%Y-%m')", $selectedMonth);
        }

        if ($keyword) {
            $eventQuery->like('event_name', $keyword);
        }

        $upcomingEvents = $eventQuery->where('event_date >=', date('Y-m-d'))
                                    ->orderBy('event_date', 'ASC')
                                    ->findAll();
        $pastEvents = $eventQuery->where('event_date <', date('Y-m-d'))
                                ->orderBy('event_date', 'DESC')
                                ->findAll();

        $data = [
            'page_title' => 'Events',
            'page_code' => 'events',
            'banner' => $banner,
            'upcoming_events' => $upcomingEvents,
            'past_events' => $pastEvents,
            'months' => $months,
            'selected_month' => $selectedMonth,
            'keyword' => $keyword,
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
            return redirect()->to(base_url('events/past-event/details'));
        }
        return redirect()->to(base_url('events/details'));
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

        $showRegistrationForm = ($eventType === 'upcoming' && (!empty($event['registration_required']) && $event['registration_required'] == 1));

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

    $existingUser = $eventUserModel->where([
        'event_id' => $eventId,
        'email' => $data['email']
    ])->first();

    if ($existingUser) {
        return redirect()->to('events/details#event-form')->withInput()->with('error', 'You have already registered for this event.');
    }

    try {
        $eventUserModel->insert($data);

        $this->sendAdminNotification($data);

        session()->setFlashdata('success', 'Registration completed successfully!');
        return redirect()->to('events/details#event-form');
    } catch (\Exception $e) {
        return redirect()->to('events/details#event-form')->withInput()->with('error', 'Registration failed. Please try again.');
    }
}

/**
 * Send admin notification via AWS SES.
 *
 * @param array $userData
 * @return void
 */
private function sendAdminNotification($userData)
{
    $emailContent = "<p>A new user has registered for the event:</p>";
    $emailContent .= "<ul>
        <li><strong>Name:</strong> {$userData['user_name']}</li>
        <li><strong>Email:</strong> {$userData['email']}</li>
        <li><strong>Mobile Number:</strong> {$userData['mobile_number']}</li>
        <li><strong>Gender:</strong> {$userData['gender']}</li>
        <li><strong>Guests:</strong> {$userData['guests']}</li>
        <li><strong>Address:</strong> {$userData['residential_address']}</li>
    </ul>";

    $sesClient = new SesClient([
        'version' => 'latest',
        'region'  => getenv('AWS_REGION'),
        'credentials' => [
            'key'    => getenv('AWS_ACCESS_KEY'),
            'secret' => getenv('AWS_SECRET_KEY'),
        ],
    ]);

    $adminEmail = "sr.developer@mvgdigital.com";

    try {
        $sesClient->sendEmail([
            'Source' => 'Sir Mutha School <tamilselvan.m@mvgdigital.in>',
            'Destination' => [
                'ToAddresses' => [$adminEmail],
            ],
            'Message' => [
                'Subject' => [
                    'Data' => 'New Event Registration',
                    'Charset' => 'UTF-8',
                ],
                'Body' => [
                    'Html' => [
                        'Data' => $emailContent,
                        'Charset' => 'UTF-8',
                    ],
                ],
            ],
        ]);
    } catch (AwsException $e) {
        log_message('error', 'Failed to send email notification: ' . $e->getMessage());
    }
}

}