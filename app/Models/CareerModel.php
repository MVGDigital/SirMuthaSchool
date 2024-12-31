<?php

namespace App\Models;

use CodeIgniter\Model;

class CareerModel extends Model
{
    protected $table      = 'careers';
    protected $primaryKey = 'career_id';

    protected $allowedFields = [
        'job_title',
        'employment_type',
        'posted_on',
        'location',
        'job_overview',
        'qualifications',
        'experience',
        'who_are_we_looking_for',
        'key_responsibilities',
        'must_have',
        'nice_to_have',
        'last_applied_date',
        'publish',
    ];

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getAllCareersForExport()
    {
        return $this->select([
            'career_id', 'job_title', 'employment_type', 'posted_on',
            'location', 'job_overview', 'qualifications', 'experience',
            'who_are_we_looking_for', 'key_responsibilities', 'must_have',
            'nice_to_have', 'last_applied_date', 'publish'
        ])->findAll();
    }

    public function getCareersWithPagination($searchTerm = null, $page = 1, $rowsPerPage = 5)
{
    $offset = ($page - 1) * $rowsPerPage;
    
    $careers = $this->select([
        'career_id', 'job_title', 'employment_type', 'location', 'posted_on', 'last_applied_date'
    ])->limit($rowsPerPage, $offset)->findAll() ?? [];

    if ($searchTerm) {
        $filteredCareers = array_filter($careers, function($career) use ($searchTerm) {
            return stripos($career['job_title'], $searchTerm) !== false || 
                   stripos($career['location'], $searchTerm) !== false ;
        });

        if (empty($filteredCareers)) {
            return [];
        }

        return array_values($filteredCareers);
    }

    return array_values($careers);
}

public function countCareers($searchTerm = null, $page = 1, $rowsPerPage = 10)
{
    $offset = ($page - 1) * $rowsPerPage;
    
    $builder = $this->select('career_id')
                    ->limit($rowsPerPage, $offset);

    if ($searchTerm) {
        $builder->like('job_title', $searchTerm)
                ->orLike('location', $searchTerm);
    }

    return $builder->countAllResults() ?? 0;
}
}