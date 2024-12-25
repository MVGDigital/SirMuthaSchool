<?php

namespace App\Controllers;

use App\Models\BannerModel;

class CareerController extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'career')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Career',
            'page_code' => 'career',
            'banner' => $banner
        ];

        return view('header', $data) . view('career', $data) . view('footer');
    }
    
}