<?php

namespace App\Models;

use CodeIgniter\Model;

class AdmissionModel extends Model
{
    protected $table = 'admissions'; // Database table name
    protected $primaryKey = 'id';    // Primary key column
    protected $allowedFields = [
        'name', 'dob', 'gender', 'nationality', 'state', 'registration_number', 'religion', 
        'community', 'mother_tongue', 'caste', 'class_last_studied', 'school_last_attended', 'class_admission_sought', 
        'residential_address', 'father_name', 'father_religion', 'father_language', 'father_qualification',
        'father_occupation','father_mobile','father_email','mother_name', 'mother_religion', 'mother_language','mother_qualification',
        'mother_occupation','mother_mobile','mother_email','guardian_name', 'guardian_relation', 'guardian_occupation','guardian_mobile',
        'guardian_email', 'guardian_address', 'sibling_name', 'other_info'

    ]; // Columns that are allowed to be inserted/updated
    protected $returnType = 'array'; // Return type for queries
    protected $useTimestamps = true; // Automatically add created_at and updated_at
}
