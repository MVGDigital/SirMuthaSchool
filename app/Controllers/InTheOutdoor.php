<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\VideoBannerModel;

class InTheOutdoor extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();

        $banner = $bannerModel->where('page', 'intheoutdoor')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'In The Outdoor',
            'page_code' => 'intheoutdoor',
            'banner' => $banner,
        ];

        return view('header', $data) . view('in-the-outdoor', $data) . view('footer');
    }
    
}