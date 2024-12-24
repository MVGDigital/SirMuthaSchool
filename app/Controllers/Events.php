<?php

namespace App\Controllers;

class Events extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Events',
            'page_code' => 'events',
        ];

        return view('header', $data) . view('events', $data) . view('footer');
    }
    
}