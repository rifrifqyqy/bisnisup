<?php

namespace App\Controllers\user;

use App\Controllers\BaseController;

class Users extends BaseController
{


    public function index()
    {
        $data = [
            'title' => 'Home | Biznisup'
        ];

        $session = session();
        if ($session->get('is_logged_in')) {
            return view('home', $data); // Ubah dengan view utama Anda
        } else {
            return redirect()->to('/login');
        }
    }

    public function ecourse($id = "")
    {
        // URL API
        $apiUrl = "http://0.tcp.ap.ngrok.io:18427/course";
        $response = file_get_contents($apiUrl);
        $data = json_decode($response, true);

        if ($data && $data['message'] === 'success') {
            $courses = $data['data_course'];
            $filteredCourses = array_filter($courses, function ($item) use ($id) {
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

    public function materi($course_id)
    {
        $data = [
            'title' => 'Materi | Biznisup',
            "course_id" => $course_id
        ];
        return view('materi', $data);
    }
    public function ecourse2()
    {
        $data = [
            'title' => 'Materi | Biznisup',
        ];
        return view('ecourse', $data);
    }
    public function listecourse()
    {
        $data = [
            'title' => 'Daftar Ecourse | Biznisup',
        ];
        return view('listecourse', $data);
    }
    public function payment($course_id)
    {

        $data = [
            'title' => 'Payment | Biznisup',
            "course_id" => $course_id

        ];
        return view('payment', $data);
    }
}
