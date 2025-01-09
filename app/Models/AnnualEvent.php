<?php

namespace App\Models;

use CodeIgniter\Model;

class AnnualEvent extends Model
{
    protected $table = 'alumni_events';
    protected $primaryKey = 'event_id';
    protected $allowedFields = ['year', 'month', 'title', 'description', 'images', 'published', 'created_at', 'updated_at'];

    public function getEvents()
    {
        return $this->orderBy('created_at', 'DESC')->findAll();
    }
}
