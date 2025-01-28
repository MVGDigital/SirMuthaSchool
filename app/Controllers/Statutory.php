<?php

namespace App\Controllers;

use App\Models\BannerModel;

class Statutory extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'statutory')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Statutory',
            'page_code' => 'statutory',
            'banner' => $banner
        ];

        return view('header', $data) . view('statutory', $data) . view('footer');
    }
     public function parentsguidelines()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'statutory')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Statutory',
            'page_code' => 'statutory',
            'banner' => $banner
        ];

        return view('header', $data) . view('parentsguidelines', $data) . view('footer');
    }
    public function leavepolicy()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'statutory')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Statutory',
            'page_code' => 'statutory',
            'banner' => $banner
        ];

        return view('header', $data) . view('leavepolicy', $data) . view('footer');
    }
    public function codecontact()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'statutory')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Statutory',
            'page_code' => 'statutory',
            'banner' => $banner
        ];

        return view('header', $data) . view('codecontact', $data) . view('footer');
    }
    public function regulation()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'statutory')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Statutory',
            'page_code' => 'statutory',
            'banner' => $banner
        ];

        return view('header', $data) . view('regulation', $data) . view('footer');
    }
    public function supportpolicy()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'statutory')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Statutory',
            'page_code' => 'statutory',
            'banner' => $banner
        ];

        return view('header', $data) . view('supportpolicy', $data) . view('footer');
    }
    
    
    
}