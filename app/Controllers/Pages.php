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
}
