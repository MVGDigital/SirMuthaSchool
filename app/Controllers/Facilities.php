<?php

namespace App\Controllers;

class Facilities extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Facilities',
            'page_code' => 'facilities',
        ];

        return view('header', $data) . view('facilities', $data) . view('footer');
    }
    
}