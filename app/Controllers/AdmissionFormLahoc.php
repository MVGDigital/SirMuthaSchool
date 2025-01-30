<?php

namespace App\Controllers;

use App\Models\AdmissionLahocModel;
use App\Models\VideoBannerModel;
use App\Models\AdmissionModel;
use App\Models\BannerModel;


class AdmissionFormLahoc extends BaseController
{
    public function submit()
    {
        $admissionModel = new AdmissionLahocModel();
        
        $formData = $this->request->getPost();
        $file = $this->request->getFile('family_photo');
        log_message('info', 'File Info: ' . json_encode($file));
        $familyPhotoPath = null;

        if ($file && $file->isValid() && !$file->hasMoved()) {
            try {
                $studentName = $this->request->getPost('student_name');
                $fileExtension = $file->getExtension();
                $newFileName = $studentName . '_' . date('dmy_His') . '.' . $fileExtension;
                $filePath = 'uploads/student_family_images/';
                $file->move(FCPATH . $filePath, $newFileName);
                $familyPhotoPath = $newFileName;
            } catch (\Exception $e) {
                log_message('error', 'File upload error: ' . $e->getMessage());
                return redirect()->back()->with('error', 'File upload failed. Please try again.');
            }
        } else {
            log_message('error', 'File upload failed: ' . $file->getErrorString() . ' (' . $file->getError() . ')');
            return redirect()->back()->with('error', 'Family photo is required.');
        }

        log_message('info', 'File Path: ' . $familyPhotoPath);
        log_message('info', 'Form Data: ' . json_encode($formData));        

        $db = \Config\Database::connect();
        $registration_number = '';
        $sql = "SELECT registration_number FROM admission_lahoc ORDER BY id DESC LIMIT 1";
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

        try {
            $admissionModel->save([
                'registration_number' => $registration_number,
                'student_name' => $formData['student_name'],
                'dob' => $formData['dob'],
                'gender' => $formData['gender'],
                'nationality' => $formData['nationality'],
                'state' => $formData['state'],
                'religion' => $formData['religion'],
                'caste' => $formData['caste'],
                'community' => $formData['community'],
                'residential_address' => $formData['residential_address'],
                'father_name' => $formData['father_name'],
                'father_religion' => $formData['father_religion'],
                'father_language' => $formData['father_language'],
                'father_qualification' => $formData['father_qualification'],
                'father_occupation' => $formData['father_occupation'],
                'father_office_address' => $formData['father_office_address'],
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
                'guardian_address' => $formData['guardian_address'],
                'guardian_mobile' => $formData['guardian_mobile'],
                'guardian_email' => $formData['guardian_email'],
                'sibling_name' => $formData['sibling_name'],
                'other_info' => $formData['other_info'],
                'family_photo' => $familyPhotoPath
            ]);
        } catch (\Exception $e) {
            log_message('error', 'Database save error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to save admission data. Please try again.');
        }

        return redirect()->to('/admissionformlahoc/success?registration_number=' . $registration_number);
    }

    public function success()
    {
        $registration_number = $this->request->getGet('registration_number');

        $bannerModel = new BannerModel();
        $banners = $bannerModel->where('page', 'admission')->where('is_published', 1)->orderBy('sort_order', 'ASC')->findAll();

        $data = [
            'message' => 'Your admission form has been submitted successfully!',
            'registration_number' => $registration_number,
            'banners' => $banners,
            'page_title' => 'Application Success',
            'page_code' => 'application-success'
        ];

        return view('header', $data) . view('success_page_lahoc', $data) . view('footer');
    }

    public function listAdmissions()
    {
        $admissionModel = new AdmissionLahocModel();
        $data['admissions'] = $admissionModel->findAll();
        return view('admissions_list_lahoc', $data);
    }

    public function printView($registration_number)
    {
        if (!is_numeric($registration_number)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Invalid Registration Number');
        }

        $admissionModel = new AdmissionLahocModel();
        $admissions = $admissionModel->where('registration_number', $registration_number)->first();

        $bannerModel = new BannerModel();
        $banners = $bannerModel->where('page', 'admission')->where('is_published', 1)->orderBy('sort_order', 'ASC')->findAll();

        $data = [
            'admissions' => $admissions,
            'banners' => $banners,
            'page_title' => 'Print Application',
            'page_code' => 'print-view'
        ];

        return view('header', $data) . view('print_view_lahoc', $data) . view('footer');
    }

    public function adminprintView_lahoc($registration_number)
    {
        if (!is_numeric($registration_number)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Invalid Registration Number');
        }

        $admissionModel = new AdmissionLahocModel();
        $admissions = $admissionModel->where('registration_number', $registration_number)->first();

        $bannerModel = new BannerModel();
        $banners = $bannerModel->where('page', 'admission')->where('is_published', 1)->orderBy('sort_order', 'ASC')->findAll();

        $data = [
            'admissions' => $admissions,
            'banners' => $banners,
            'page_title' => 'Print Application',
            'page_code' => 'print-view'
        ];

        return view('header', $data) . view('r', $data) . view('footer');
    }

    public function delete($id)
    {
        $admissionModel = new AdmissionLahocModel();
        
        $admission = $admissionModel->find($id);
        if (!$admission) {
            return redirect()->to('/admissionformlahoc/list')->with('error', 'Admission record not found.');
        }

        $admissionModel->delete($id);

        return redirect()->to('/admissionformlahoc/list')->with('success', 'Admission record deleted successfully.');
    }
}

?>