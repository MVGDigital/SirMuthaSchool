<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoBannerModel extends Model
{
    protected $table = 'video_banners';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'video_title',
        'video_link',
        'page',
        'video_thumbnail',
        'video_poster',
        'video_file',
        'sort_order',
        'is_published',
    ];

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
