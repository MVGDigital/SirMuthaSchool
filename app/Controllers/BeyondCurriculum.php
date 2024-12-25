<?php

namespace App\Controllers;

use App\Models\BannerModel;

class BeyondCurriculum extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'beyond-curriculum')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'BeyondCurriculum',
            'page_code' => 'beyond-curriculum',
            'banner' => $banner
        ];

        return view('header', $data) . view('beyond-curriculum', $data) . view('footer');
    }
    
}