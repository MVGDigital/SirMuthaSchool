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
    public function heritageclub()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'beyond-curriculum')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'heritageclub',
            'page_code' => 'heritageclub',
            'banner' => $banner
        ];

        return view('header', $data) . view('heritageclub', $data) . view('footer');
    }
    public function mathsclub()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'beyond-curriculum')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'mathsclub',
            'page_code' => 'mathsclub',
            'banner' => $banner
        ];

        return view('header', $data) . view('mathsclub', $data) . view('footer');
    }
    public function ecoclub()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'beyond-curriculum')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'ecoclub',
            'page_code' => 'ecoclub',
            'banner' => $banner
        ];

        return view('header', $data) . view('ecoclub', $data) . view('footer');
    }
    
    public function interactclub()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'beyond-curriculum')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'interactclub',
            'page_code' => 'interactclub',
            'banner' => $banner
        ];

        return view('header', $data) . view('interactclub', $data) . view('footer');
    }
    
    
    
    
}