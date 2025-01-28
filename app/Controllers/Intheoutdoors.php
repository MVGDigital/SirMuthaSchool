<?php

namespace App\Controllers;

use App\Models\BannerModel;

class Intheoutdoors extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'intheoutdoor')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'In The Outdoors',
            'page_code' => 'intheoutdoors',
            'banner' => $banner
        ];

        return view('header', $data) . view('intheoutdoors', $data) . view('footer');
    }
}