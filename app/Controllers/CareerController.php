<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\CareerModel;

class CareerController extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $careerModel = new CareerModel();

        $banner = $bannerModel->where('page', 'career')->where('is_published', 1)->first();
        $categories = $careerModel->select('job_title')->groupBy('job_title')->findAll();
        $jobs = $careerModel->where('publish', 1)->orderBy('posted_on', 'DESC')->findAll();
        $totalJobs = count($jobs);

        $data = [
            'page_title' => 'Career',
            'page_code' => 'career',
            'banner' => $banner,
            'categories' => $categories,
            'jobs' => $jobs,
            'total_jobs' => $totalJobs
        ];

        return view('header', $data) . view('career', $data) . view('footer', $data);
    }

    public function searchJobs()
    {
        $careerModel = new CareerModel();
        $keyword = $this->request->getVar('keyword');
        $category = $this->request->getVar('category');

        $query = $careerModel->where('publish', 1);

        if ($keyword) {
            $query->like('job_title', $keyword)
                ->orLike('job_overview', $keyword);
        }

        if ($category) {
            $query->where('job_title', $category);
        }

        $jobs = $query->orderBy('posted_on', 'DESC')->findAll();

        return $this->response->setJSON($jobs);
    }

    public function careerForm()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'career')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Career Form',
            'page_code' => 'career-form',
            'banner' => $banner
        ];

        return view('header', $data) . view('career-form', $data) . view('footer');
    }
    
}