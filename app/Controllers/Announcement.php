<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\Announcement as AnnouncementModel;

class Announcement extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banners = $bannerModel->where('page', 'about')->where('is_published', 1)->orderBy('sort_order', 'ASC')->findAll();
        $announcementModel = new AnnouncementModel();
        $announcements = $announcementModel->getAnnouncements();

        $data = [
            'page_title' => 'Announcement',
            'page_code' => 'announcement',
            'banners' => $banners,
            'announcements' => $announcements
        ];

        return view('header', $data) . view('announcement', $data) . view('footer');
    }
}