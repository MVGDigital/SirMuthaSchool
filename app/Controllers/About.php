<?php

namespace App\Controllers;

use App\Models\BannerModel;

class About extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'about')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'About',
            'page_code' => 'about',
            'banner' => $banner
        ];

        return view('header', $data) . view('about', $data) . view('footer');
    }
}