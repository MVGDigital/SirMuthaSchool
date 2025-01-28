<?php

namespace App\Controllers;

use App\Models\BannerModel;

class Academics extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'academics')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Academics',
            'page_code' => 'academics',
            'banner' => $banner
        ];

        return view('header', $data) . view('academics', $data) . view('footer');
    }
    
    public function cbsecurriculum()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'academics')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'cbsecurriculum',
            'page_code' => 'cbsecurriculum',
            'banner' => $banner
        ];

        return view('header', $data) . view('cbsecurriculum', $data) . view('footer');
    }
    public function annulapolicy()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'academics')->where('is_published', 1)->first();
        

        $data = [
            'page_title' => 'annulapolicy',
            'page_code' => 'annula_policy',
            'banner' => $banner
        ];

        return view('header', $data) . view('annulapolicy', $data) . view('footer');
    }
    
    public function biologylab()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'academics')->where('is_published', 1)->first();
        

        $data = [
            'page_title' => 'biologylab',
            'page_code' => 'biology_lab',
            'banner' => $banner
        ];

        return view('header', $data) . view('biologylab', $data) . view('footer');
    }
}