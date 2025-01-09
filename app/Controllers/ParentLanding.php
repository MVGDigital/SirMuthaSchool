<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\VideoBannerModel;

class ParentLanding extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();

        $banner = $bannerModel->where('page', 'parent-landing')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'parentLanding')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Parent Landing',
            'page_code' => 'parent-landing',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('parent-landing', $data) . view('footer');
    }
    
}