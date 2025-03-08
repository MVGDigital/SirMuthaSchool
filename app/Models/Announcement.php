<?php

namespace App\Models;

use CodeIgniter\Model;

class Announcement extends Model
{
    protected $table = 'announcements';
    protected $primaryKey = 'announcement_id';
    protected $allowedFields = ['title', 'description', 'pdf_file', 'published', 'category', 'created_at', 'updated_at'];

    public function getAnnouncements($category = null)
    {
        $query = $this->where('published', 1)->orderBy('created_at', 'DESC');
        
        if ($category) {
            $query->where('category', $category);
        }
        
        return $query->findAll();
    }
}
