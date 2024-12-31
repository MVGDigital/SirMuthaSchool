<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\BoardOfMembersModel;

class About extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $boardModel = new BoardOfMembersModel();

        $banner = $bannerModel->where('page', 'about')->where('is_published', 1)->first();
        $boardMembers = $boardModel->where('is_published', 1)->orderBy('sort_order', 'ASC')->findAll();

        $data = [
            'page_title' => 'About',
            'page_code' => 'about',
            'banner' => $banner,
            'boardMembers' => $boardMembers
        ];

        return view('header', $data) . view('about', $data) . view('footer');
    }
}