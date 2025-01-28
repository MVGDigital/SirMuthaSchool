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
        'father_office_address',
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
        'other_info',
        'family_photo',
    ];

}