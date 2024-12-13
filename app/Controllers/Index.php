<?php

namespace App\Controllers;

class Index extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Home',
            'page_code' => 'index',
        ];

        return view('header', $data) . view('index', $data) . view('footer');
    }
}