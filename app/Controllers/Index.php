<?php

namespace App\Controllers;

use App\Models\BannerModel;

class Index extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banners = $bannerModel->where('page', 'home')->where('is_published', 1)->orderBy('sort_order', 'ASC')->findAll();

        $data = [
            'page_title' => 'Home',
            'page_code' => 'index',
            'banners' => $banners
        ];

        return view('header', $data) . view('index', $data) . view('footer');
    }
}