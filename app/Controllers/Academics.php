<?php

namespace App\Controllers;

class Academics extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Academics',
            'page_code' => 'academics',
        ];

        return view('header', $data) . view('academics', $data) . view('footer');
    }
}