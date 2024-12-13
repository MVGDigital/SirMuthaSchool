<?php

namespace App\Controllers;

class contact extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Contact',
            'page_code' => 'contact',
        ];

        return view('header', $data) . view('contact', $data) . view('footer');
    }
    
}