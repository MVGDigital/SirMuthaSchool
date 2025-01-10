<?php

namespace App\Models;

use CodeIgniter\Model;

class AdmissionLahocModel extends Model
{
    protected $table = 'admission_lahoc';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'registration_number',
        'student_name',
        'dob',
        'gender',
        'nationality',
        'state',
        'religion',
        'caste',
        'community',
        'residential_address',
        'father_name',
        'father_religion',
        'father_language',
        'father_qualification',
        'father_occupation',
        'father_mobile',
        'father_email',
        'mother_name',
        'mother_religion',
        'mother_language',
        'mother_qualification',
        'mother_occupation',
        'mother_mobile',
        'mother_email',
        'guardian_name',
        'guardian_relation',
        'guardian_occupation',
        'guardian_address',
        'guardian_mobile',
        'guardian_email',
        'sibling_name',
        'other_info'
    ];

    protected $validationRules = [
        'student_name' => 'required|min_length[3]|max_length[255]',
        'dob' => 'required|valid_date',
        'gender' => 'required|in_list[Male,Female,Other]',
        'nationality' => 'required|max_length[100]',
        'state' => 'required|max_length[100]',
        'religion' => 'required|max_length[100]',
        'residential_address' => 'required|max_length[500]',
        'father_name' => 'required|min_length[3]|max_length[255]',
        'father_mobile' => 'required|regex_match[/^[0-9]{10}$/]',
        'father_email' => 'required|valid_email',

        
  

    ];

    protected $useTimestamps = true;
}