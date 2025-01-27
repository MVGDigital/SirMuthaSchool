<?php

namespace App\Models;

use CodeIgniter\Model;

class Announcement extends Model
{
    protected $table = 'announcements';
    protected $primaryKey = 'announcement_id';
    protected $allowedFields = ['title', 'description', 'pdf_file', 'published', 'created_at', 'updated_at'];

    public function getAnnouncements()
    {
        return $this->where('published', 1)
                    ->orderBy('created_at', 'DESC')
                    ->findAll();
    }
}