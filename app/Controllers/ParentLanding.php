<?php

namespace App\Controllers;

use App\Models\BannerModel;

class ParentLanding extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'parent-landing')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Parent Landing',
            'page_code' => 'parent-landing',
            'banner' => $banner
        ];

        return view('header', $data) . view('parent-landing', $data) . view('footer');
    }
    
}