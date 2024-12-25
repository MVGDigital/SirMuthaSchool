<?php

namespace App\Controllers;

use App\Models\BannerModel;

class InclusiveEducation extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'inclusive-education')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'InclusiveEducation',
            'page_code' => 'inclusive-education',
            'banner' => $banner
        ];

        return view('header', $data) . view('inclusive-education', $data) . view('footer');
    }
    
}