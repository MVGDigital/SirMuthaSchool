<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\VideoBannerModel;

class Achievements extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();

        $banner = $bannerModel->where('page', 'achievement')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'achievements')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Achievements',
            'page_code' => 'achievements',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('achievements', $data) . view('footer');
    }
}