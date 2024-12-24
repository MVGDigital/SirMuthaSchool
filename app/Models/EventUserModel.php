<?php

namespace App\Models;

use CodeIgniter\Model;

class EventUserModel extends Model
{
    protected $table      = 'event_users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'event_id', 'user_name', 'email', 'mobile_number', 'guests', 'residential_address'
    ];

    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
}
