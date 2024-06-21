<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

  
}
