<?php

namespace App\Controllers;

use App\Models\BannerModel;

class Gallery extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'gallery')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Gallery',
            'page_code' => 'gallery',
            'banner' => $banner
        ];

        return view('header', $data) . view('gallery', $data) . view('footer');
    }
    
}