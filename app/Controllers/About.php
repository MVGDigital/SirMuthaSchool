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
    public function aboutmss()
    {
       
        $bannerModel = new BannerModel();

        $banner = $bannerModel->where('page', 'about')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'About MSS',
            'page_code' => 'about',
            'banner' => $banner
        ];

        
        return view('header', $data) 
            . view('aboutmss', $data) 
            . view('footer');
    }
    public function ourfounders()
    {
       
        $data = [
            'page_title' => '',
            'page_code' => 'our_founders',
        ];

        
        return view('header', $data) 
            . view('ourfounders', $data) 
            . view('footer');
    }
    public function visionandmission()
    {
       
        $data = [
            'page_title' => '',
            'page_code' => 'visionandmission',
        ];

        
        return view('header', $data) 
            . view('visionandmission', $data) 
            . view('footer');
    }
}