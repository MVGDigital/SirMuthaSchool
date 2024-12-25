<?php

namespace App\Controllers;

use App\Models\BannerModel;

class Facilities extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'facilities')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Facilities',
            'page_code' => 'facilities',
            'banner' => $banner
        ];

        return view('header', $data) . view('facilities', $data) . view('footer');
    }
    
}