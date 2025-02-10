<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\VideoBannerModel;

class Facilities extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'facilities')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Facilities',
            'page_code' => 'facilities',
            'banner' => $banner
        ];

        return view('header', $data) . view('facilities', $data) . view('footer');
    }
    
    public function computerlab()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();
        $banner = $bannerModel->where('page', 'computerlab')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Computer Lab Facility',
            'page_code' => 'computerlab',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('facilities_computerlab', $data) . view('footer');
    }
    
    public function swimmingpool()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();
        $banner = $bannerModel->where('page', 'swimmingpool')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'swimmingpool')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Swimming Pool Facility',
            'page_code' => 'swimmingpool',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('swimmingpool', $data) . view('footer');
    }
    
    public function concerthall()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();
        $banner = $bannerModel->where('page', 'concerthall')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Concert Hall Facility',
            'page_code' => 'concerthall',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('concerthall', $data) . view('footer');
    }

    public function cricketnets()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();
        $banner = $bannerModel->where('page', 'cricketnets')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Cricket Nets Facility',
            'page_code' => 'cricketnets',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('cricketnets', $data) . view('footer');
    }
    
    public function hockeyfield()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();
        $banner = $bannerModel->where('page', 'hockeyfield')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Hockey Field Facility',
            'page_code' => 'hockeyfield',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('hockeyfield', $data) . view('footer');
    }

    public function biologylab()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();
        $banner = $bannerModel->where('page', 'biologylab')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Biology Lab Facility',
            'page_code' => 'biologylab',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('biologylab', $data) . view('footer');
    }

    public function library()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();
        $banner = $bannerModel->where('page', 'library')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Library ',
            'page_code' => 'library',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('library', $data) . view('footer');
    }

    public function musicandartroom()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();
        $banner = $bannerModel->where('page', 'musicandartroom')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Music and Art Room',
            'page_code' => 'musicandartroom',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('musicandartroom', $data) . view('footer');
    }

    public function networkedclassrooms()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();
        $banner = $bannerModel->where('page', 'networkedclassrooms')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Networked Classrooms Facility',
            'page_code' => 'networkedclassrooms',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('networkedclassrooms', $data) . view('footer');
    }

    public function chemistrylab()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();
        $banner = $bannerModel->where('page', 'chemistrylab')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Chemistry Lab Facility',
            'page_code' => 'chemistrylab',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('chemistrylab', $data) . view('footer');
    }

    public function physicslab()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();
        $banner = $bannerModel->where('page', 'physicslab')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Physics Lab Facility',
            'page_code' => 'physicslab',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('physicslab', $data) . view('footer');
    }

    public function artandcraft()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();
        $banner = $bannerModel->where('page', 'artandcraft')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Art and Craft Facility',
            'page_code' => 'artandcraft',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('artandcraft', $data) . view('footer');
    }

    public function technology()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();
        $banner = $bannerModel->where('page', 'technology')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Technology Facility',
            'page_code' => 'technology',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('technology', $data) . view('footer');
    }

    public function healthandsaftey()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();
        $banner = $bannerModel->where('page', 'healthandsaftey')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Health and Safety',
            'page_code' => 'healthandsaftey',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('healthandsaftey', $data) . view('footer');
    }

    public function greencampus()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();
        $banner = $bannerModel->where('page', 'greencampus')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'greencampus')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Green Campus',
            'page_code' => 'greencampus',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('green-campus', $data) . view('footer');
    }
}