<?php

namespace App\Controllers;

class Admission extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Admission',
            'page_code' => 'admission',
        ];

        return view('header', $data) . view('admission', $data) . view('footer');
    }
}