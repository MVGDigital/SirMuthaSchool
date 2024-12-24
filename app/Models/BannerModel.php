<?php

namespace App\Models;

use CodeIgniter\Model;

class BannerModel extends Model
{
    protected $table = 'banners';
    protected $primaryKey = 'banner_id';
    protected $allowedFields = [
        'page',
        'title',
        'caption',
        'desktop_image',
        'mobile_image',
        'hyperlink',
        'sort_order',
        'is_published'
    ];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getPublishedBanners()
    {
        return $this->where('is_published', 1)
                    ->orderBy('sort_order', 'ASC')
                    ->findAll();
    }
}