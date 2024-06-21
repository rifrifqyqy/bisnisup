<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php

$url = 'http://0.tcp.ap.ngrok.io:18427/course';
$konten = file_get_contents($url);
$data = json_decode($konten, true);
?>
<link rel="stylesheet" href="<?= base_url('styles/cardstyle.css'); ?>">
<link rel="stylesheet" href="<?= base_url('styles/blog.css'); ?>">
<section class="blog-header d-flex">
    <div class="container text-center m-auto d-flex flex-column">
        <h1>
            Temukan Kelas yang Terbaik<br>Dan Improve Skill Kamu
        </h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam nemo inventore, id nihil mollitia tenetur laboriosam! Ipsa corrupti rerum necessitatibus quasi hic labore, fuga voluptatum, autem dolores vero porro rem!</p>
        <form class="searchbar mx-5">
            <input type="text" placeholder="Cari Kelas..." class="w-100 rounded-2 border-0">
            <div class="dropdown ">
                <a class="btn bg-white border-2 border-black dropdown-toggle h-100 d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <p class="my-auto">Semua Kategori</p>
                </a>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <?= $this->include('components/button/caributton'); ?>
        </form>

    </div>
</section>

<main class="container mx-auto mt-5">
    <h2 class="text-center">Daftar Ecourse</h2>
    <section class="justify-content-start gap-5 w-100 d-flex flex-wrap">
        <?php
        // Contoh data placeholder
        $placeholder_data = [
            [
                "course_id" => "1",
                "title" => "Eum voluptas nostrum incidunt exercitationem.",
                "description" => "Facere sint autem eius voluptate enim assumenda consequatur dolorem. Aut iusto deleniti porro ut odit ducimus. Quaerat voluptas id cupiditate.",
                "thumb" => "/images/course1.png",
                "mentor" => "Dr. Alysa Hoeger IV",
                "outlines" => [
                    ["outlinecourse_id" => "1", "outline_title" => "Inventore et distinctio earum.", "outline_description" => "Omnis dolor minima quia iste."],
                    ["outlinecourse_id" => "2", "outline_title" => "Ipsa tenetur vel.", "outline_description" => "Adipisci sequi enim vel fugiat ratione voluptatem."],
                    ["outlinecourse_id" => "3", "outline_title" => "Et numquam dicta nulla velit.", "outline_description" => "Commodi aspernatur vero itaque totam ea."],
                ],
                "users" => [["user_id" => "2"], ["user_id" => "5"], ["user_id" => "8"]],
            ],
            [
                "course_id" => "2",
                "title" => "Eum voluptas nostrum incidunt exercitationem.",
                "description" => "Facere sint autem eius voluptate enim assumenda consequatur dolorem. Aut iusto deleniti porro ut odit ducimus. Quaerat voluptas id cupiditate.",
                "thumb" => "/images/course2.png",
                "mentor" => "Dr. Alysa Hoeger IV",
                "outlines" => [
                    ["outlinecourse_id" => "1", "outline_title" => "Inventore et distinctio earum.", "outline_description" => "Omnis dolor minima quia iste."],
                    ["outlinecourse_id" => "2", "outline_title" => "Ipsa tenetur vel.", "outline_description" => "Adipisci sequi enim vel fugiat ratione voluptatem."],
                    ["outlinecourse_id" => "3", "outline_title" => "Et numquam dicta nulla velit.", "outline_description" => "Commodi aspernatur vero itaque totam ea."],
                ],
                "users" => [["user_id" => "2"], ["user_id" => "5"], ["user_id" => "8"]],
            ],
            [
                "course_id" => "2",
                "title" => "Eum voluptas nostrum incidunt exercitationem.",
                "description" => "Facere sint autem eius voluptate enim assumenda consequatur dolorem. Aut iusto deleniti porro ut odit ducimus. Quaerat voluptas id cupiditate.",
                "thumb" => "/images/course1.png",
                "mentor" => "Dr. Alysa Hoeger IV",
                "outlines" => [
                    ["outlinecourse_id" => "1", "outline_title" => "Inventore et distinctio earum.", "outline_description" => "Omnis dolor minima quia iste."],
                    ["outlinecourse_id" => "2", "outline_title" => "Ipsa tenetur vel.", "outline_description" => "Adipisci sequi enim vel fugiat ratione voluptatem."],
                    ["outlinecourse_id" => "3", "outline_title" => "Et numquam dicta nulla velit.", "outline_description" => "Commodi aspernatur vero itaque totam ea."],
                ],
                "users" => [["user_id" => "2"], ["user_id" => "5"], ["user_id" => "8"]],
            ],
            // Tambahkan lebih banyak data jika diperlukan
        ];

        // Ambil data dari API atau gunakan data placeholder
        $data = isset($data['data_course']) && !empty($data['data_course']) ? $data['data_course'] : $placeholder_data;

        ?>

        <!-- end card -->
    </section>
</main>

<script>
    const allCourses = <?= json_encode($data); ?>;
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.querySelector('.searchbar input[type="text"]');
        const resultsContainer = document.querySelector('.container .w-100.d-flex.flex-wrap');

        searchInput.addEventListener('input', function() {
            const query = searchInput.value.toLowerCase();

            if (query.length > 2) {
                const filteredCourses = allCourses.filter(course =>
                    course.title.toLowerCase().includes(query) ||
                    course.description.toLowerCase().includes(query)
                );
                displayResults(filteredCourses);
            } else {
                displayResults(allCourses); // Menampilkan semua data jika query terlalu pendek
            }
        });

        function displayResults(data) {
            resultsContainer.innerHTML = '';

            data.forEach(course => {
                const card = `
            <div class="card-container mt-2 mt-lg-5 ">
                <a href="<?= base_url('/ecourse/') ?>/${course.course_id}" class="text-decoration-none d-flex flex-column gap-2 h-100">
                    <img src="${course.thumb}" alt="" class="course-img">
                    <div class="d-flex justify-content-between align-items-center mt-lg-2">
                        <div class="ctg-label">${course.category}</div>
                        <div class="d-flex rating-label gap-2">
                            <img src="images/star.svg" alt="">
                            <p class="my-auto">4.5</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <h1>${course.title}</h1>
                        <p class="card-desc">${course.description}</p>
                        <div class="d-flex gap-2 mb-1 mb-lg-3">
                            <img src="images/open-book.svg" alt="">
                            <p class="my-auto">9 Modul</p>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <h1>Rp 1000.000</h1>
                        <div class="d-flex align-items-center gap-lg-3 gap-1">
                            <img src="images/mentor.png" alt="" class="rounded-circle">
                            <p class="my-auto">${course.mentor.name}</p>
                        </div>
                    </div>
                </a>
            </div>
            `;
                resultsContainer.innerHTML += card;
            });
        }

        // Display all courses initially
        displayResults(allCourses);
    });
</script>

<?= $this->endSection(); ?>