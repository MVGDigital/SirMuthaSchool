<?php

namespace App\Models;

use CodeIgniter\Model;

class BoardOfMembersModel extends Model
{
    protected $table = 'board_of_members';
    protected $primaryKey = 'bom_id';
    protected $allowedFields = ['name', 'designation', 'content', 'photo'];

    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
