<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\VideoBannerModel;

class Admission extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();

        $banner = $bannerModel->where('page', 'admission')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Admission',
            'page_code' => 'admission',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('admission', $data) . view('footer');
    }
}