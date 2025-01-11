<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'contact_id';
    protected $allowedFields = ['first_name', 'last_name', 'email', 'phone', 'message', 'created_at', 'updated_at'];

}
