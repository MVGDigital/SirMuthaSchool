<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\VideoBannerModel;
use App\Models\AdmissionModel;

class Admission extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $videoBannerModel = new VideoBannerModel();

        $banner = $bannerModel->where('page', 'admission')->where('is_published', 1)->first();
        $video = $videoBannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Admission',
            'page_code' => 'admission',
            'banner' => $banner,
            'video' => $video
        ];

        return view('header', $data) . view('admission', $data) . view('footer');
    }

    public function admissionForm()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Admission Form',
            'page_code' => 'admission',
            'banner' => $banner
        ];

        return view('header', $data) . view('admission_form', $data) . view('footer');
    }

    public function admissionLahocForm()
    {
        $bannerModel = new BannerModel();
        $banner = $bannerModel->where('page', 'admission')->where('is_published', 1)->first();

        $data = [
            'page_title' => 'Admission Form',
            'page_code' => 'admission',
            'banner' => $banner
        ];

        return view('header', $data) . view('admission_lahoc', $data) . view('footer');
    }

    public function submit()    // This method will be called when the form is submitted
    {
        // Instantiate the model
        $admissionModel = new AdmissionModel();
        
        // Retrieve input from the form
        $formData = $this->request->getPost();

        // Generate the next registration number
        $db = \Config\Database::connect(); // Connect to the database
        $registration_number = '';
        $sql = "SELECT registration_number FROM admissions ORDER BY id DESC LIMIT 1";
        $query = $db->query($sql);
        $result = $query->getRow();

        if ($result) {
            $registration_number = $result->registration_number;
        }

        if ($registration_number == '') {
            $registration_number = '001';
        } else {
            $registration_number = (int)$registration_number;
            $registration_number++;
            $registration_number = sprintf("%03d", $registration_number);
        }

        // Save the valid data along with the registration number into the database
        $admissionModel->save([
            'name' => $formData['name'],
            'dob' => $formData['dob'],
            'gender' => $formData['gender'],
            'nationality' => $formData['nationality'],
            'state' => $formData['state'],
            'religion' => $formData['religion'],
            'community' => $formData['community'],
            'mother_tongue' => $formData['mother_tongue'],
            'caste' => $formData['caste'],
            'class_last_studied' => $formData['class_last_studied'],
            'school_last_attended' => $formData['school_last_attended'],
            'class_admission_sought' => $formData['class_admission_sought'],
            'residential_address' => $formData['residential_address'],
            'father_name' => $formData['father_name'],
            'father_religion' => $formData['father_religion'],
            'father_language' => $formData['father_language'],
            'father_qualification' => $formData['father_qualification'],
            'father_occupation' => $formData['father_occupation'],
            'father_mobile' => $formData['father_mobile'],
            'father_email' => $formData['father_email'],
            'mother_name' => $formData['mother_name'],
            'mother_religion' => $formData['mother_religion'],
            'mother_language' => $formData['mother_language'],
            'mother_qualification' => $formData['mother_qualification'],
            'mother_occupation' => $formData['mother_occupation'],
            'mother_mobile' => $formData['mother_mobile'],
            'mother_email' => $formData['mother_email'],
            'guardian_name' => $formData['guardian_name'],
            'guardian_relation' => $formData['guardian_relation'],
            'guardian_occupation' => $formData['guardian_occupation'],
            'guardian_mobile' => $formData['guardian_mobile'],
            'guardian_email' => $formData['guardian_email'],
            'guardian_address' => $formData['guardian_address'],
            'sibling_name' => $formData['sibling_name'],
            'other_info' => $formData['other_info'],
            
            'registration_number' => $registration_number
        ]);

        // Redirect to a success page with the registration number
        return redirect()->to('/admission/success?registration_number=' . $registration_number);
    }

    public function success()
    {
        // Get the registration number from the query parameter
        $registration_number = $this->request->getGet('registration_number');

        // Retrieve banners
        $bannerModel = new BannerModel();
        $banners = $bannerModel->where('page', 'admission')->where('is_published', 1)->orderBy('sort_order', 'ASC')->findAll();

        // Prepare data for the view
        $data = [
            'message' => 'Your admission form has been submitted successfully!',
            'registration_number' => $registration_number,
            'banners' => $banners,
            'page_title' => 'Application Success',
            'page_code' => 'application-success'
        ];

        // Load the header, success page, and footer
        return view('header', $data) . view('success_page', $data) . view('footer');
    }

    public function printView($registration_number)
    {
        if (!is_numeric($registration_number)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Invalid Registration Number');
        }

        $admissionModel = new AdmissionModel();
        $application_details = $admissionModel->where('registration_number', $registration_number)->first();

        // Retrieve banners
        $bannerModel = new BannerModel();
        $banners = $bannerModel->where('page', 'admission')->where('is_published', 1)->orderBy('sort_order', 'ASC')->findAll();

        // Prepare data for the view
        $data = [
            'admissions' => $application_details,
            'banners' => $banners,
            'page_title' => 'Print Application',
            'page_code' => 'print-view'
        ];

        // Load the header, print view, and footer
        return view('header', $data) . view('print_view', $data) . view('footer');
    }
}