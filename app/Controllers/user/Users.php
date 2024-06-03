<?php

namespace App\Controllers\user;
use App\Controllers\BaseController;
class Users extends BaseController
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
        // URL API
        $apiUrl = "http://0.tcp.ap.ngrok.io:18582/course"; 
        $response = file_get_contents($apiUrl);
        $data = json_decode($response, true);
    
        if ($data && $data['message'] === 'success') {
            $courses = $data['data_course'];
            $filteredCourses = array_filter($courses, function($item) use ($id) {
                return $item['course_id'] == $id;
            });
    

            if (!empty($filteredCourses)) {
                $course = reset($filteredCourses); 
                $data = [
                    'title' => 'E-Course | Biznisup',
                    'course' => $course
                ];
    
                return view('ecourse', $data);
            } else {
                echo "Kursus tidak ditemukan.";
            }
        } else {
            echo "Gagal mengambil data dari API.";
        }
    }

    public function materi()
    {
        $data = [
            'title' => 'Materi | Biznisup',
        ];
        return view('materi', $data);

    }
  
    

}