<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!--  -->

<?php
$url = 'http://0.tcp.ap.ngrok.io:18427/course';
$konten = file_get_contents($url);
$data = json_decode($konten, true);
?>
<link rel="stylesheet" href="<?= base_url("styles/cardstyle.css") ?>">
<figure class="feedback">
  <img src="<?= base_url('images/Feedback.png') ?>" alt="">
</figure>
<h1 id="userName"></h1>
<div class="swiper container mySwiper mt-lg-5 mt-3">
  <div class="swiper-wrapper ">
    <div class="swiper-slide">
      <img src="images/carousel1.png" alt="">
    </div>
    <div class="swiper-slide">
      <img src="images/carousel2.png" alt="">
    </div>
    <div class="swiper-slide">
      <img src="images/carousel3.png" alt="">
    </div>
    <div class="swiper-slide">
      <img src="images/carousel4.png" alt="">
    </div>


  </div>
  <div class="swiper-button">
    <div class="swiper-prev">
      <img src="images/arrowleft.svg" alt="">
    </div>
    <div class="swiper-next">
      <img src="images/arrowright.svg" alt="">
    </div>
  </div>
  <div class="pagination-wrapper">
    <div class="swiper-pagination"></div>
  </div>
</div>


<!--  -->
<div class="container mt-3 mt-lg-5">
  <div class="row">
    <div class="col-0 col-lg-5 d-flex justify-content-center">
      <img src="images/home1.png" alt="" class="about-img">
    </div>
    <div class="col">
      <div class="biznisup mt-3 mt-lg-0">
        <h2>BIZNISUP</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore dolor voluptate impedit ad aliquid perspiciatis voluptates dignissimos ullam amet corporis?</p>
      </div>
      <ul class="nav nav-tabs gap-2 gap-lg-3 scrollwrapper" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Leadership</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Soft Skill</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Hard Skill</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Tech & Data</button>
        </li>
      </ul>
      <div class="tab-content mt-2 mt-lg-4" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
          <div class="text-wrap">
            <img src="images/toga.svg" alt="" class=" align-self-start mt-1">
            <div>
              <h2>General Leadership</h2>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus laudantium cupiditate quas minima neque fugiat architecto quasi aut, recusandae ducimus!</p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi molestias optio saepe a labore animi repellendus qui natus eveniet? Tempora.</p>
          <div class="text-wrap">
            <img src="images/toga.svg" alt="" class=" align-self-start mt-1">
            <div>
              <h2>General Leadership</h2>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus laudantium cupiditate quas minima neque fugiat architecto quasi aut, recusandae ducimus!</p>
            </div>
          </div>
          <div class="text-wrap">
            <img src="images/transformation.svg" alt="" class=" align-self-start mt-1">
            <div>
              <h2>Transformational</h2>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus laudantium cupiditate quas minima neque fugiat architecto quasi aut, recusandae ducimus!</p>
            </div>
          </div>
          <div class="text-wrap">
            <img src="images/medalion.svg" alt="" class=" align-self-start mt-1">
            <div>
              <h2>Change Management</h2>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus laudantium cupiditate quas minima neque fugiat architecto quasi aut, recusandae ducimus!</p>
            </div>
          </div>
          <div class="text-wrap">
            <img src="images/flag.svg" alt="" class=" align-self-start mt-1">
            <div>
              <h2>Innovative Leadership</h2>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus laudantium cupiditate quas minima neque fugiat architecto quasi aut, recusandae ducimus!</p>
            </div>
          </div>
          <div class="text-wrap">
            <img src="images/benefit.svg" alt="" class=" align-self-start mt-1">
            <div>
              <h2>Benefit</h2>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus laudantium cupiditate quas minima neque fugiat architecto quasi aut, recusandae ducimus!</p>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
      </div>
    </div>
  </div>
</div>
<!-- card -->

<section class="container mx-auto mt-2 mt-lg-5">
  <h1 class="text-center header">Daftar Kelas</h1>
  <section class="scrollwrapper d-flex gap-2 gap-lg-4 justify-content-between w-100 overflow-x-auto">
    <!-- loop card dataApi -->
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

    $data_subset = array_slice($data, 0, 3);

    foreach ($data_subset as $value) {
    ?>
      <div class="card-container mt-2 mt-lg-5">
        <a href="<?= base_url('/ecourse/' . $value['course_id'] . '/'); ?>" class="text-decoration-none d-flex flex-column gap-2 h-100">
          <!-- card header -->
          <img src="<?= $value['thumb']; ?>" alt="" class="course-img">
          <div class="d-flex justify-content-between align-items-center mt-lg-2">
            <div class="ctg-label"><?= $value['category']; ?></div>
            <div class="d-flex rating-label gap-2">
              <img src="images/star.svg" alt="">
              <p class="my-auto">4.5</p>
            </div>
          </div>
          <!-- card body -->
          <div class="card-body">
            <h1><?= $value['title']; ?></h1>
            <p class="card-desc"><?= $value['description']; ?></p>
            <div class="d-flex gap-2 mb-1 mb-lg-3">
              <img src="images/open-book.svg" alt="">
              <p class="my-auto">9 Modul</p>
            </div>
          </div>
          <!-- card footer -->
          <div class="card-footer d-flex justify-content-between align-items-center">
            <h1>Rp 1000.000</h1>
            <div class="d-flex align-items-center gap-lg-3 gap-1">
              <img src="images/mentor.png" alt="" class="rounded-circle">
              <p class="my-auto"><?= $value['mentor']['name']; ?></p>
            </div>
          </div>
        </a>
      </div>
    <?php
    }
    ?>
    <!-- end card -->
  </section>
  <button class="d-flex justify-content-between btn-selengkapnya mt-4 mx-auto gap-1 gap-lg-3">
    <a href="<?= base_url('/listecourse'); ?>" class="">Lihat Selengkapnya</a>
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
      <path d="M9.5 7L14.5 12L9.5 17" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
  </button>

</section>

<!-- card end -->
<!-- Accordion -->

<section class="d-flex flex-column container px-0 mt-5 align-items-center gap-lg-4 gap-2">
  <div class="faq text-center">
    <h2>Frequently Asked Question</h2>
    <p>Apa sih yang Kamu Bingungin?</p>
  </div>
  <div class="accordion d-flex flex-column gap-2 accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header ">

        <button class="accordion-button rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          <img src="/images/question.svg" alt="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, cum.
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          <img src="/images/question.svg" alt="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, cum.
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
          <img src="/images/question.svg" alt="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, cum.
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
      </div>
    </div>
  </div>
</section>

<!-- Accordion end -->

<!-- hubungi kami -->

<div class="mailto d-flex justify-content-between align-items-center mt-2 mt-lg-5">
  <h1 class="my-auto">Punya pertanyaan lebih lanjut?</h1>
  <div class="mailto-button d-flex gap-1 gap-lg-2">
    <p class="">Hubungi Kami</p>
    <img src="images/Email.svg" alt="" class="">
  </div>
</div>

<!-- hubungi kami end -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function(index, className) {
        return '<div class="' + className + '">' + "</div>";
      },
    },
    navigation: {
      nextEl: ".swiper-next",
      prevEl: ".swiper-prev",
    },
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
  });


  document.addEventListener('DOMContentLoaded', async function() {
    // Ambil token dari penyimpanan lokal (misalnya localStorage)
    const token = localStorage.getItem('token');

    if (token) {
      try {
        const response = await fetch('https://dummyjson.com/auth/me', {
          method: 'GET',
          headers: {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json'
          }
        });

        const userData = await response.json();

        if (response.ok) {
          // Menampilkan nama pengguna di <h1>
          document.getElementById('userName').innerText = `Welcome, ${userData.firstName} ${userData.lastName}`;
        } else {
          throw new Error(userData.message || 'Failed to fetch current user');
        }

      } catch (error) {
        console.error('Error fetching current user:', error);
        // Handle error (misalnya, tampilkan pesan kepada pengguna)
      }
    } else {
      console.log('Token not found. User not authenticated.');
      // Handle case where user is not authenticated
    }
  });
</script>
<?= $this->endSection(); ?>