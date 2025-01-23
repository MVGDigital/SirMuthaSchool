<?php

namespace App\Controllers;

use App\Models\BannerModel;

class Intheoutdoors extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banners = $bannerModel->where('page', 'about')->where('is_published', 1)->orderBy('sort_order', 'ASC')->findAll();

        $data = [
            'page_title' => 'In The Outdoors',
            'page_code' => 'intheoutdoors',
            'banners' => $banners
        ];

        return view('header', $data) . view('intheoutdoors', $data) . view('footer');
    }
}