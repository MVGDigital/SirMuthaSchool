<?php

namespace App\Controllers;

class InclusiveEducation extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'InclusiveEducation',
            'page_code' => 'inclusive-education',
        ];

        return view('header', $data) . view('inclusive-education', $data) . view('footer');
    }
    
}