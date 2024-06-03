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

    public function ecourse($id="")
    {
        $apiUrl = "https://fakestoreapi.com/products/$id";
        $client = \Config\Services::curlrequest();
        $response = $client->request('GET', $apiUrl);
        $value = json_decode($response->getBody(), true); 


        $data = [
            'title' => 'E-Course | Biznisup',
            'course' => $value
            
        ];


        return view('ecourse', $data);

    }
}
