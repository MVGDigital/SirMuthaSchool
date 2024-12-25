<?php

namespace App\Controllers;

use App\Models\BannerModel;

class Admission extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Admission',
            'page_code' => 'admission',
            'banner' => $banner
        ];

        return view('header', $data) . view('admission', $data) . view('footer');
    }
}