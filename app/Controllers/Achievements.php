<?php

namespace App\Controllers;

use App\Models\Achievement;
use App\Models\BannerModel;
use App\Models\VideoBannerModel;

class Achievements extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();
        $achievementModel = new Achievement();

        $banner = $bannerModel->where('page', 'achievement')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'achievements')->where('is_published', 1)->first();

        $achievements = $achievementModel->where('published', 1)->findAll();

        $sportsAchievements = [];
        $teachersAchievements = [];

        foreach ($achievements as $achievement) {
            if ($achievement['category'] === 'Sports Achievements') {
                $sportsAchievements[] = $achievement;
            } elseif ($achievement['category'] === 'Teachers Achievements') {
                $teachersAchievements[] = $achievement;
            }
        }

        usort($sportsAchievements, function($a, $b) {
            return strtotime($b['created_at']) - strtotime($a['created_at']);
        });

        $data = [
            'page_title' => 'Achievements',
            'page_code' => 'achievements',
            'banner' => $banner,
            'video' => $video,
            'sportsAchievements' => $sportsAchievements,
            'teachersAchievements' => $teachersAchievements,
        ];

        return view('header', $data) . view('achievements', $data) . view('footer');
    }

    public function academicsAchievements()
    {
        $bannerModel = new BannerModel();
        
        $banner = $bannerModel->where('page', 'achievement')->where('is_published', 1)->first();
        

        $data = [
            'page_title' => 'Academic Achievements',
            'page_code' => 'academic-achievements',
            'banner' => $banner,
            
        ];

        return view('header', $data) . view('academic-achievements', $data) . view('footer');
    }

    public function interSchool()
    {
        $bannerModel = new BannerModel();
        
        $banner = $bannerModel->where('page', 'achievement')->where('is_published', 1)->first();
        

        $data = [
            'page_title' => 'Inter School',
            'page_code' => 'inter-school',
            'banner' => $banner,
            
        ];

        return view('header', $data) . view('inter-school', $data) . view('footer');
    }
}