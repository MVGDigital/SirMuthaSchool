<?php

namespace App\Controllers;

class Gallery extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Gallery',
            'page_code' => 'gallery',
        ];

        return view('header', $data) . view('gallery', $data) . view('footer');
    }
    
}