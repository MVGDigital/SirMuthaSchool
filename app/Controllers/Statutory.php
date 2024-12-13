<?php

namespace App\Controllers;

class Statutory extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'Statutory',
            'page_code' => 'statutory',
        ];

        return view('header', $data) . view('statutory', $data) . view('footer');
    }
    
}