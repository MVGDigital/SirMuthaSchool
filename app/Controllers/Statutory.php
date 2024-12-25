<?php

namespace App\Controllers;

use App\Models\BannerModel;

class Statutory extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'statutory')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Statutory',
            'page_code' => 'statutory',
            'banner' => $banner
        ];

        return view('header', $data) . view('statutory', $data) . view('footer');
    }
    
}