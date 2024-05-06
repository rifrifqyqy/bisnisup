<?php

namespace App\Controllers;

class Pages extends BaseController
{
    // public function index(): string
    public function index()
    {
        $data = [
            'title' => 'Home | Biznisup'
        ];

        return view('home', $data);

    }

    public function ecourse()
    {
        $data = [
            'title' => 'E-Course | Biznisup'
        ];

        return view('ecourse', $data);

    }
}
