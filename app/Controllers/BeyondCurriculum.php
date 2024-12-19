<?php

namespace App\Controllers;

class BeyondCurriculum extends BaseController
{
    public function index()
    {
        $data = [
            'page_title' => 'BeyondCurriculum',
            'page_code' => 'beyond-curriculum',
        ];

        return view('header', $data) . view('beyond-curriculum', $data) . view('footer');
    }
    
}