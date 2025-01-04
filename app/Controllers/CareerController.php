<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\CareerModel;
use App\Models\JobApplicationModel;

class CareerController extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $careerModel = new CareerModel();

        $banner = $bannerModel->where('page', 'career')->where('is_published', 1)->first();
        $categories = $careerModel->select('job_title')->groupBy('job_title')->findAll();
        $jobs = $careerModel->select('career_id, job_title, employment_type, location, posted_on, last_applied_date, job_overview, key_responsibilities, qualifications, experience, who_are_we_looking_for, must_have, nice_to_have')
                        ->where('publish', 1)
                        ->orderBy('posted_on', 'DESC')
                        ->findAll();
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

        $query = $careerModel->select('career_id, job_title, employment_type, location, posted_on, last_applied_date, job_overview, key_responsibilities, qualifications, experience, who_are_we_looking_for, must_have, nice_to_have')
                            ->where('publish', 1);

        if ($keyword) {
            $query->groupStart()
                  ->like('job_title', $keyword)
                  ->orLike('job_overview', $keyword)
                  ->groupEnd();
        }

        if ($category) {
            $query->where('job_title', $category);
        }

        $jobs = $query->orderBy('posted_on', 'DESC')->findAll();

        return $this->response->setJSON($jobs);
    }

    public function setJobSession()
    {
        $jobId = $this->request->getJSON()->jobId;

        if (!$jobId) {
            return $this->response->setJSON(['success' => false, 'message' => 'Invalid job ID']);
        }

        session()->set('selectedJobId', $jobId);

        return $this->response->setJSON([
            'success' => true,
            'redirect_url' => base_url('career/form'),
        ]);
    }

    public function careerForm()
    {
        $bannerModel = new BannerModel();
        $jobId = session()->get('selectedJobId');
        $careerModel = new CareerModel();

        if (!$jobId) {
            error_log('Job ID not found in session');
            return redirect()->to(base_url('career'));
        }

        $banner = $bannerModel->where('page', 'career')->where('is_published', 1)->first();
        $jobDetails = $careerModel->find($jobId);

        $data = [
            'page_title' => 'Career Form',
            'page_code' => 'career-form',
            'banner' => $banner,
            'job_details' => $jobDetails,
        ];

        session()->remove('selectedJobId');

        return view('header', $data) . view('career-form', $data) . view('footer');
    }

    public function apply()
    {
        $jobApplicationModel = new JobApplicationModel();
        $careerModel = new CareerModel();

        $validation = \Config\Services::validation();
        $validation->setRules([
            'job_id' => 'required|integer',
            'first-name' => 'required|min_length[2]',
            'last-name' => 'required|min_length[2]',
            'email' => 'required|valid_email',
            'mobile-number' => 'required|numeric|min_length[10]|max_length[15]',
            'fileUpload' => 'uploaded[fileUpload]|mime_in[fileUpload,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document]|max_size[fileUpload,2048]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $file = $this->request->getFile('fileUpload');
        $newName = null;
        if ($file->isValid() && !$file->hasMoved()) {
            $originalName = pathinfo($file->getName(), PATHINFO_FILENAME);
            $extension = $file->getExtension();
            $dateTime = new \DateTime('now', new \DateTimeZone('Asia/Kolkata'));
            $formattedDateTime = $dateTime->format('_dmY_His');
            $newName = $originalName . $formattedDateTime . '.' . $extension;

            $file->move(FCPATH . 'uploads/cv', $newName);
        } else {
            return redirect()->back()->withInput()->with('error', 'File upload failed.');
        }

        $jobId = $this->request->getPost('job_id');
        $jobDetails = $careerModel->find($jobId);

        if (!$jobDetails) {
            return redirect()->back()->withInput()->with('error', 'Invalid job ID.');
        }

        $dateTime = new \DateTime('now', new \DateTimeZone('Asia/Kolkata'));

        $data = [
            'career_id' => $jobId,
            'job_title' => $jobDetails['job_title'],
            'first_name' => $this->request->getPost('first-name'),
            'last_name' => $this->request->getPost('last-name'),
            'email' => $this->request->getPost('email'),
            'mobile' => $this->request->getPost('mobile-number'),
            'cv' => $newName,
            'created_at' => $dateTime->format('Y-m-d H:i:s')
        ];

        if ($jobApplicationModel->insert($data)) {
            return redirect()->to('/career')->with('message', 'Application submitted successfully.');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to save the application.');
        }
    }
}