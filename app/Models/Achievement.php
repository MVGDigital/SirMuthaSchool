<?php

namespace App\Models;

use CodeIgniter\Model;

class Achievement extends Model
{
    protected $table = 'achievements';
    protected $primaryKey = 'achievement_id';
    protected $allowedFields = ['title', 'description', 'image_file', 'published', 'category', 'created_at', 'updated_at'];

    public function getAchievements()
    {
        return $this->orderBy('created_at', 'DESC')->findAll();
    }
}