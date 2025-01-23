<?php

namespace App\Controllers;

use App\Models\BannerModel;

class Announcement extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banners = $bannerModel->where('page', 'about')->where('is_published', 1)->orderBy('sort_order', 'ASC')->findAll();

        $data = [
            'page_title' => 'Announcement',
            'page_code' => 'announcement',
            'banners' => $banners
        ];

        return view('header', $data) . view('announcement', $data) . view('footer');
    }
}