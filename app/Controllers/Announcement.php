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

    $school_updates = $announcementModel->getAnnouncements('school_updates');
    $cbse_curriculum = $announcementModel->getAnnouncements('cbse_curriculum');

    $data = [
        'page_title' => 'Announcement',
        'page_code' => 'announcement',
        'banner' => $banner,
        'school_updates' => $school_updates, 
        'cbse_curriculum' => $cbse_curriculum,
        'announcements' => array_merge($school_updates, $cbse_curriculum)
    ];

    return view('header', $data) . view('announcement', $data) . view('footer', $data);
}
}