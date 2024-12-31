<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $table = 'gallery';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'file_path',
        'sort_order',
        'is_published',
        'category',
        'created_at',
        'updated_at'
    ];

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
