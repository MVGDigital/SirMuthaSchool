<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\AnnualEvent;

class BeyondCurriculum extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'beyond-curriculum')->where('is_published', 1)->first();

        $eventModel = new AnnualEvent();
        $eventsByYear = $eventModel->getEventsByYear();

        $data = [
            'page_title' => 'BeyondCurriculum',
            'page_code' => 'beyond-curriculum',
            'banner' => $banner,
            'events_by_year' => $eventsByYear
        ];

        return view('header', $data) . view('beyond-curriculum', $data) . view('footer');
    }
    public function heritageclub()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'heritageclub')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Heritage Celub',
            'page_code' => 'heritageclub',
            'banner' => $banner
        ];

        return view('header', $data) . view('heritageclub', $data) . view('footer');
    }
    public function mathsclub()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'mathsclub')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Maths Club',
            'page_code' => 'mathsclub',
            'banner' => $banner
        ];

        return view('header', $data) . view('mathsclub', $data) . view('footer');
    }
    public function ecoclub()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'ecoclub')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Eco Club',
            'page_code' => 'ecoclub',
            'banner' => $banner
        ];

        return view('header', $data) . view('ecoclub', $data) . view('footer');
    }
    
    public function interactclub()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'interactclub')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Interact Club',
            'page_code' => 'interactclub',
            'banner' => $banner
        ];

        return view('header', $data) . view('interactclub', $data) . view('footer');
    }
    
    public function literaryclub()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'literaryclub')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Literary Club',
            'page_code' => 'literaryclub',
            'banner' => $banner
        ];

        return view('header', $data) . view('literary-club', $data) . view('footer');
    }
    
    public function languageclub()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'languageclub')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Language Club',
            'page_code' => 'languageclub',
            'banner' => $banner
        ];

        return view('header', $data) . view('language-club', $data) . view('footer');
    }
    
    public function pastannualevents()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'beyond-curriculum')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Annual Events',
            'page_code' => 'beyond-curriculum',
            'banner' => $banner
        ];

        return view('header', $data) . view('past-annual-events', $data) . view('footer');
    }
}