<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('admin_index');
    }

    public function root($path = '/admin')
    {
        if ($path !== '') {
            if (@file_exists(APPPATH . 'Views/' . $path . '.php')) {
                return view($path);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            echo 'Path Not Found.';
        }
    }
}
