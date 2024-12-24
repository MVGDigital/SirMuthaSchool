<?php

namespace App\Controllers;

class EventDetails extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'EventDetails',
            'page_code' => 'event-details',
        ];

        return view('header', $data) . view('event-details', $data) . view('footer');
    }
    
}