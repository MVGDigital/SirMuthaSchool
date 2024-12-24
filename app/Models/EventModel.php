<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'event_name',
        'event_date',
        'start_time',
        'end_time',
        'event_location',
        'event_description',
        'registration_required',
        'desktop_image',
        'mobile_image',
        'is_published',
    ];

    public function paginate(?int $perPage = null, string $group = 'default', ?int $page = null, int $segment = 0)
    {
        return parent::paginate($perPage, $group, $page, $segment);
    }
}
