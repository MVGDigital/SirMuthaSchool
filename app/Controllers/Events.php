<?php

namespace App\Controllers;

use App\Models\BannerModel;

class Events extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'events')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Events',
            'page_code' => 'events',
            'banner' => $banner
        ];

        return view('header', $data) . view('events', $data) . view('footer');
    }

    public function eventDetails()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'events')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'EventDetails',
            'page_code' => 'event-details',
            'banner' => $banner
        ];

        return view('header', $data) . view('event-details', $data) . view('footer');
    }
    
}