<?php

namespace App\Models;

use CodeIgniter\Model;

class Statutory extends Model
{
    protected $table = 'statutory';
    protected $primaryKey = 'statutory_id';
    protected $allowedFields = ['title', 'description', 'pdf_file', 'published', 'created_at', 'updated_at'];

    public function getStatutory()
    {
        return $this->findAll();
    }

    public function getPublishedDocuments()
    {
        return $this->where('published', 1)
                    ->orderBy('title', 'ASC')
                    ->findAll();
    }
}