<?php

namespace App\Controllers;

class contact extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();

        $banner = $bannerModel->where('page', 'contact')->where('is_published', 1)->first();
        $data = [
            'page_title' => 'Contact',
            'page_code' => 'contact',
            'banner' => $banner
        ];

        return view('header', $data) . view('contact', $data) . view('footer');
    }
    
}