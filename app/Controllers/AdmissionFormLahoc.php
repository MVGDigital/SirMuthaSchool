<?php

namespace App\Controllers;

use App\Models\AdmissionLahocModel;

class AdmissionFormLahoc extends BaseController
{
    public function index()
    {
        // Load the Admission Form View
        return view('admissionform_lahoc');
    }

    public function submit()
    {
        // Instantiate the model
        $admissionModel = new AdmissionLahocModel();
        
        // Retrieve input from the form
        $formData = $this->request->getPost();

        // Validate input data using model rules
        if (!$admissionModel->validate($formData)) {
            // If validation fails, pass errors and previous input back to the view
            return view('admissionform_lahoc', [
                'validation' => $admissionModel->errors(),
                'oldInput' => $formData
            ]);
        }

        // Generate the next registration number
        $db = \Config\Database::connect(); // Connect to the database
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

        // Save the valid data along with the registration number into the database
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
            'other_info' => $formData['other_info']
        ]);

        // Redirect to a success page with the registration number
        return redirect()->to('/admissionformlahoc/success?registration_number=' . $registration_number);
    }

    public function success()
    {
        // Get the registration number from the query parameter
        $registration_number = $this->request->getGet('registration_number');

        // Load a success message view
        return view('success_page', [
            'message' => 'Your admission form has been submitted successfully!',
            'registration_number' => $registration_number
        ]);
    }

    public function listAdmissions()
    {
        $admissionModel = new AdmissionLahocModel();
        $data['admissions'] = $admissionModel->findAll();
        return view('admissions_list', $data);
    }
}

?>
