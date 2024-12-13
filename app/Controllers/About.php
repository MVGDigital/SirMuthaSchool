<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'About',
            'page_code' => 'about',
        ];

        return view('header', $data) . view('about', $data) . view('footer');
    }
}