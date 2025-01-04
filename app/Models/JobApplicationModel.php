<?php

namespace App\Models;
use CodeIgniter\Model;

class JobApplicationModel extends Model
{
    protected $table = 'job_applications';
    protected $primaryKey = 'job_id';

    protected $allowedFields = [
        'career_id', 'job_title', 'first_name', 'last_name', 'email', 'mobile', 'cv', 'created_at'
    ];

    public function getApplications()
    {
        return $this->orderBy('created_at', 'DESC')->findAll();
    }
}