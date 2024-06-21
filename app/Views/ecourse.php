<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php
$url = 'http://0.tcp.ap.ngrok.io:18427/hardskill';
$konten = file_get_contents($url);
$data_hardskill = json_decode($konten, true);

$urlsoft = 'http://0.tcp.ap.ngrok.io:18427/softskill';
$kontensoft = file_get_contents($urlsoft);
$data_softskill = json_decode($kontensoft, true);

$urlmodul = 'http://0.tcp.ap.ngrok.io:18427/modul';
$kontenmodul = file_get_contents($urlmodul);
$data_modul = json_decode($kontenmodul, true);

?>

<?php

$datacourse = [
  'id' => '2',
  'thumb' => '/images/course1.png',
  'title' => 'Placeholder Course Title',
  'description' => 'lorem ipsum dolor sit amet ',
  'outlines' => [
    [
      'outlinecourse_id' => 1,
      'outline_title' => 'Placeholder Outline Title 1',
      'outline_description' => 'Placeholder description for outline 1.',
    ],
    [
      'outlinecourse_id' => 2,
      'outline_title' => 'Placeholder Outline Title 2',
      'outline_description' => 'Placeholder description for outline 2.',
    ],
  ],
  'mentor' => 'Placeholder Mentor',
];
$course_id = $course['course_id'];


$filtered_hardskills = [];
foreach ($data_hardskill['data_hardskill'] as $hardskill) {
  if ($hardskill['course_id'] === $course_id) {
    $filtered_hardskills[] = $hardskill;
  }
}
$filtered_softskills = [];
foreach ($data_softskill['data_softskill'] as $softskill) {
  if ($softskill['course_id'] === $course_id) {
    $filtered_softskills[] = $softskill;
  }
}


function formatRupiah($number)
{
  return number_format($number, 0, ',', '.');
}
?>

<link rel="stylesheet" href="<?= base_url('styles/ecourse.css') ?>">
<link rel="stylesheet" href="<?= base_url('styles/home.css') ?>">
<figure class="feedback">
  <img src="<?= base_url('images/Feedback.png') ?>" alt="">
</figure>
<!-- banner ecourse -->

<main class="banner-course position-relative ">
  <img src="<?= $course['thumb'] ?>" alt="" class="banner-img position-absolute">
  <div class="row container m-auto">
    <aside class="col wrap-content mt-3 mt-lg-0">
      <div class="title-course">
        <h1><?= $course['title']; ?></h1>
        <p><?= $course['description']; ?></p>
      </div>
      <div class="label-course">
        <div>
          <img src="<?= base_url('images/open-book.svg') ?>" alt="">
          <p> Modul</p>
        </div>
        <div>
          <img src="<?= base_url('images/Star.svg') ?>" alt="">
          <p>4.5</p>
        </div>
        <div>
          <img src="<?= base_url('images/book.svg') ?>" alt="">
          <p>25 Kuis dan Latihan</p>
        </div>
        <div>
          <img src="<?= base_url('images/medal.svg') ?>" alt="">
          <p>Sertifikat</p>
        </div>
      </div>
      <div class="price-course d-flex">
        <h1><span>RP</span><?= formatRupiah($course['price']); ?></h1>

      </div>
      <div class="d-flex gap-lg-3 gap-2">
        <button type="button" class="btn-outline">Hubungi Kami</button>
        <a type="button" class="btn-fill" href="<?= base_url('/ecourse/' . $course['course_id'] . '/payment') ?>">Daftar Sekarang</a>
      </div>
    </aside>
    <section class="col-lg video-container">
      <div class="d-flex justify-content-end video-course">
        <iframe src="<?= $course['preview'] ?>" frameborder="0" allowfullscreen class="rounded-4"></iframe>
      </div>
    </section>
  </div>
</main>

<!-- banner course end -->

<div class="row container main-wrapper mx-auto mt-3 mt-lg-5">
  <section class="col d-flex flex-column gap-3 gap-lg-5">
    <div class="content-1" id="materi">
      <h1 class="title-head">Yang akan kamu pelajari</h1>
      <p>Materi ini dirancang khusus agar kamu bisa menguasai materi dari dasar sampai implementasinya di pekerjaan</p>

      <!-- Accordion -->
      <div class="d-flex flex-column container px-0 mt-2 align-items-center gap-4">
        <div class="accordion w-100 d-flex flex-column gap-2 accordion-flush" id="accordionFlushExample">
          <?php foreach ($data_modul['data_modul'] as $materi) { ?>

            <div class="accordion-item">
              <h2 class="accordion-header ">

                <button class="accordion-button rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $materi['modul_id'] ?>" aria-expanded="false" aria-controls="flush-collapse<?= $materi['modul_id'] ?>">

                  <?= $materi['modul_title']; ?>

                </button>
              </h2>
              <div id="flush-collapse<?= $materi['modul_id'] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body d-flex flex-column gap-2">
                  <?php foreach ($materi['submoduls'] as $submoduls) { ?>
                    <div class="d-flex gap-2">
                      <img src="<?= base_url('images/media-video.svg') ?>" alt="">

                      <a href="<?= base_url('/ecourse/' . $course_id . '/materi') ?>" class="submodul text-decoration-none"><?= $submoduls['submodul_title'] ?></a>
                    </div>

                  <?php } ?>
                </div>
              </div>
            </div>

          <?php } ?>


        </div>
      </div>
      <!-- Accordion End  -->
      <button class="btn-black mt-3 align-self-center">
        <a href="<?= base_url('/ecourse/' . $course_id . '/materi') ?>">Lihat Materi</a>
      </button>
    </div>
    <!-- kemampuan -->
    <div class="content-2" id="kemampuan">
      <h1 class="title-head">Kemampuan</h1>
      <p>Kamu akan dibimbing hingga menguasai ilmu Business Intelligence Bootcamp dari dasar sampai penerapannya dalam pekerjaan.</p>
      <div>
        <h1 class="d-flex subtitle">
          <img src="<?= base_url('images/laptop.svg') ?>" alt="">Hard Skill
        </h1>
        <div class="d-flex gap-2 flex-wrap">
          <?php if (empty($filtered_hardskills)) : ?>
            <h5 class="label-skill">Hard Skill</h5>
          <?php else : ?>
            <?php foreach ($filtered_hardskills as $label_hard) : ?>
              <h5 class="label-skill"><?= htmlspecialchars($label_hard['title']) ?></h5>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
      <div>
        <h1 class="d-flex subtitle">
          <img src="<?= base_url('images/lamp.svg') ?>" alt="">Soft Skill
        </h1>
        <div class="d-flex gap-2 flex-wrap">
          <?php if (empty($filtered_softskills)) : ?>
            <h5 class="label-skill">Soft Skill</h5>
          <?php else : ?>
            <?php foreach ($filtered_softskills as $softskill) : ?>
              <h5 class="label-skill"><?= htmlspecialchars($softskill['title']) ?></h5>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <!-- metode -->
    <div class="content-3" id="metode">
      <h1 class="title-head">Metode Belajar</h1>
      <div class="wrapper mt-3">
        <h1>Self Guided Learning</h1>
        <p>
          Anda akan diberikan modul dalam bentuk video yang akan membahas berbagai macam topik dalam video yang singkat namun padat. Untuk menguji pengetahuan dan keahlian, Anda akan mendapatkan case study assignment dan assessment.
        </p>
      </div>
    </div>
    <!-- mentor -->
    <div class="content-4" id="mentor">
      <h1 class="title-head">Mentor</h1>
      <div class="mentor-card d-flex flex-column flex-lg-row gap-4 align-items-center mt-4">
        <img src="<?= $course['mentor']['avatar'] ?>" alt="" class="mentor-avatar">
        <div>
          <h1><?= $course['mentor']['name'] ?></h1>
          <p>Former Head of Business Intelligence • GOJEK</p>
          <h5><span><?= $course['mentor']['name'] ?></span> adalah Head of Data di Gojek yang memimpin tim BI dan berfokus pada produk-produk seperti GoClub, CRM, and Incentives Tools, serta cross-functional consumer analytics scope pada platform Gojek. Dia adalah data geek dengan pengalaman 9+ tahun dalam Business Intelligence, Data Visualization, Analytics, and Data Science.</h5>
          <div class="d-flex linkedin gap-2">
            <img src="<?= base_url('images/sosmed/linkedin2.svg') ?>" alt="">
            <a href="" class=" text-decoration-none">Lihat Profil Lengkap</a>
          </div>
        </div>
      </div>
    </div>
    <!-- ulasan -->
    <div id="ulasan">
      <h1 class="title-head">Ulasan</h1>
      <div class="wrapper">
        <article class="d-flex gap-3 align-items-start py-lg-3 py-2 px-lg-4 px-3 mb-2 rounded-4">
          <img src="<?= base_url('images/userprofile.png') ?>" alt="" class="user-profile mt-2">
          <div class="ulasan d-flex flex-column">
            <h1 class="d-flex align-items-center gap-2">User231
              <span>diunggah 13 April 2024</span>
            </h1>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi architecto temporibus maiores quisquam nam enim dolores distinctio quae, vero unde.
            </p>

          </div>
        </article>
      </div>
    </div>
    <!-- faq -->
    <div id="faq">
      <h1 class="title-head">Frequently Asked Questions</h1>
      <p>Apa sih yang Kamu Bingungin?</p>
      <section>
        <div class="d-flex flex-column container px-0 mt-2 align-items-center gap-4">
          <div class="accordion w-100 d-flex flex-column gap-2 accordion-flush" id="accordionFlushExample2">
            <div class="accordion-item">
              <h2 class="accordion-header ">

                <button class="accordion-button rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne2" aria-expanded="false" aria-controls="flush-collapseOne2">
                  <img src="/images/question.svg" alt="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, cum.
                </button>
              </h2>
              <div id="flush-collapseOne2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo2" aria-expanded="false" aria-controls="flush-collapseTwo2">
                  <img src="/images/question.svg" alt="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, cum.
                </button>
              </h2>
              <div id="flush-collapseTwo2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree2" aria-expanded="false" aria-controls="flush-collapseThree2">
                  <img src="/images/question.svg" alt="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, cum.
                </button>
              </h2>
              <div id="flush-collapseThree2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- banner hubungi kami -->
      <div class="mailto d-flex justify-content-between align-items-center mt-lg-5 mt-3">
        <h1 class="my-auto">Punya pertanyaan lebih lanjut?</h1>
        <div class="mailto-button d-flex gap-1 gap-lg-2">
          <p class="">Hubungi Kami</p>
          <img src="<?= base_url('images/Email.svg') ?>" alt="" class="">
        </div>
      </div>


    </div>
  </section>
  <section class="col col-lg-5 d-lg-block d-none sticky-side">
    <div class="content-sticky d-flex justify-content-center">
      <!-- side nav -->
      <div class="side-nav d-flex flex-column gap-3 p-4 rounded-4">
        <h1>Detail Kelas</h1>
        <div class="d-flex flex-column border-3 border-start border-black gap-2">
          <a href="#materi">Materi</a>
          <a href="#kemampuan">Kemampuan</a>
          <a href="#metode">Metode Belajar</a>
          <a href="#mentor">Mentor</a>
          <a href="#ulasan">Ulasan</a>
          <a href="#faq">FAQ</a>
        </div>
        <div class="d-flex price ">
          <h2>Rp <?= formatRupiah($course['price']); ?></h2>

        </div>
        <div class="d-flex gap-3">
          <button class="btn-outline2">Hubungi Kami</button>
          <a class="btn-fill text-white" href="<?= base_url('/ecourse/' . $course['course_id'] . '/payment') ?>">Daftar Sekarang</a>
        </div>

      </div>
    </div>
  </section>
</div>

<!-- card ecourse -->

<!-- card ecourse end -->



<?= $this->endSection(); ?>