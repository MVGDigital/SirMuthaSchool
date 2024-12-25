<?php

namespace App\Controllers;

use App\Models\BannerModel;

class Academics extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'academics')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Academics',
            'page_code' => 'academics',
            'banner' => $banner
        ];

        return view('header', $data) . view('academics', $data) . view('footer');
    }
}