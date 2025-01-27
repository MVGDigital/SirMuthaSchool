<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\Announcement as AnnouncementModel;

class Announcement extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'announcement')->where('is_published', 1)->first();
        $announcementModel = new AnnouncementModel();
        $announcements = $announcementModel->getAnnouncements();

        $data = [
            'page_title' => 'Announcement',
            'page_code' => 'announcement',
            'banner' => $banner,
            'announcements' => $announcements
        ];

        return view('header', $data) . view('announcement', $data) . view('footer');
    }
}