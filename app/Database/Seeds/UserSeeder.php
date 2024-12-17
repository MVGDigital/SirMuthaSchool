<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\Users;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = new Users();

        $insertdata['name'] = 'Test';
        $insertdata['email'] = 'user@demo.com';
        $insertdata['password'] = 'Sirmutha@111';

        $user->insert($insertdata);
    }
}
