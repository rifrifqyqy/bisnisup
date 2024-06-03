<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<link rel="stylesheet" href="<?=  base_url ('styles/ecourse.css')?>">

<!-- banner ecourse -->
<div class="banner-course position-relative">
<img src="<?= $course['thumb']?>" alt="" class="banner-img position-absolute">
  <div class="row container m-auto">
    <aside class="col wrap-content">
        <div class="title-course">
          <h1><?= $course['title']; ?></h1>
          <p></p>
        </div>
        <div class="label-course">
          <div>
            <img src="<?= base_url('images/open-book.svg')?>" alt="">
            <p><?= count($course['outlines'])?> Modul</p>
          </div>
          <div>
            <img src="<?= base_url('images/Star.svg')?>" alt="">
            <p>4.5</p>
          </div>
          <div>
            <img src="<?=  base_url('images/book.svg')?>" alt="">
            <p>25 Kuis dan Latihan</p>
          </div>
          <div>
            <img src="<?= base_url('images/medal.svg')?>" alt="">
            <p>Sertifikat</p>
          </div>
        </div>
        <div class="price-course d-flex">
          <h1><span>RP</span> 1000,000</h1>
          <p>Rp 1000,000</p>
        </div>
        <div class="d-flex gap-3">
          <button type="button" class="btn-outline">Hubungi Kami</button>
          <button type="button" class="btn-fill">Daftar Sekarang</button>
        </div>
    </aside>
    <section class="col">
        <div class="d-flex justify-content-end">
        <iframe width="560" height="350" src="https://www.youtube.com/embed/VIDEO_ID" frameborder="0" allowfullscreen class="rounded-4"></iframe>
        </div>
    </section>
  </div>
</div>

<!-- banner course end -->

<div class="row container mx-auto mt-5">
  <section class="col d-flex flex-column gap-5">
    <div class="content-1" id="materi">
      <h1 class="title-head">Yang akan kamu pelajari</h1>
      <p>Materi ini dirancang khusus agar kamu bisa menguasai materi dari dasar sampai implementasinya di pekerjaan</p>

      <!-- Accordion -->
      <div>
      <div class="d-flex flex-column container px-0 mt-2 align-items-center gap-4">
       <div class="accordion w-100 d-flex flex-column gap-2 accordion-flush" id="accordionFlushExample">
       <?php foreach ($course['outlines'] as $outline) {?>
        <div class="accordion-item">
        <h2 class="accordion-header ">
        
        <button class="accordion-button rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $outline['outlinecourse_id'] ?>" aria-expanded="false" aria-controls="flush-collapse<?= $outline['outlinecourse_id'] ?>">
        <img src="<?= base_url('images/open-book.svg')?>" alt="">
        <?= $outline['outline_title'] ?>
        </button>
      </h2>
      <div id="flush-collapse<?= $outline['outlinecourse_id'] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
          <?= $outline['outline_description'] ?>
        </div>
      </div>
      </div>

    <?php }?>
   
    
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
          <img src="images/open-book.svg" alt="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, cum.
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
      </div>
    </div>
  </div>
      </div>


      </div>
      <!-- Accordion End  -->
    </div>
    <!-- kemampuan -->
    <div class="content-2" id="kemampuan">
      <h1 class="title-head">Kemampuan</h1>
      <p>Kamu akan dibimbing hingga menguasai ilmu Business Intelligence Bootcamp dari dasar sampai penerapannya dalam pekerjaan.</p>
      <div>
        <h1 class="d-flex subtitle">
          <img src="<?= base_url('images/laptop.svg')?>" alt="">Hard Skill
        </h1>
        <div>
          <h5 class="label-skill">Gather and organize data</h5>
        </div>
      </div>
      <div>
        <h1 class="d-flex subtitle">
          <img src="<?= base_url('images/lamp.svg')?>" alt="">Soft Skill
        </h1>
        <div>
          <h5 class="label-skill">Gather and organize data</h5>
        </div>
      </div>
    </div>
    <!-- metode -->
    <div class="content-3" id="metode">
      <h1 class="title-head">Metode Belajar</h1>
      <div></div>
    </div>
    <!-- mentor -->
    <div class="content-4" id="mentor">
      <h1 class="title-head">Mentor</h1>
      <div class="mentor-card d-flex gap-4 align-items-center mt-4">
        <img src="<?= base_url('images/mentor1.png')?>" alt="">
        <div >
          <h1><?= $course['mentor']?></h1>
          <p>Former Head of Business Intelligence • GOJEK</p>
          <h5><span><?= $course['mentor']?></span> adalah Head of Data di Gojek yang memimpin tim BI dan berfokus pada produk-produk seperti GoClub, CRM, and Incentives Tools, serta cross-functional consumer analytics scope pada platform Gojek. Dia adalah data geek dengan pengalaman 9+ tahun dalam Business Intelligence, Data Visualization, Analytics, and Data Science.</h5>
          <div class="d-flex linkedin gap-2">
            <img src="<?= base_url('images/sosmed/linkedin2.svg')?>" alt="">
           <a href="" class=" text-decoration-none">Lihat Profil Lengkap</a>
          </div>
        </div>
      </div>
    </div>
    <!-- ulasan -->
    <div id="ulasan">
      <h1 class="title-head">Ulasan</h1>
      <div></div>
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
        <img src="images/open-book.svg" alt="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, cum.
        </button>
      </h2>
      <div id="flush-collapseOne2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo2" aria-expanded="false" aria-controls="flush-collapseTwo2">
        <img src="images/open-book.svg" alt="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, cum.
        </button>
      </h2>
      <div id="flush-collapseTwo2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button rounded-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree2" aria-expanded="false" aria-controls="flush-collapseThree2">
          <img src="images/open-book.svg" alt="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, cum.
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
      <div class="mailto d-flex justify-content-between align-items-center mt-5">
        <h1 class="my-auto">Punya pertanyaan lebih lanjut?</h1>
        <div class="mailto-button d-flex gap-1 gap-lg-2">
            <p class="">Hubungi Kami</p>
          <img src="<?= base_url('images/Email.svg')?>" alt="" class="">
        </div>
      </div>

      
    </div>
  </section>
  <section class="col col-5 sticky-side">
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
          <h2>Rp 1000,000</h2>
          <p class=" text-decoration-line-through mt-3">Rp 1000,000</p>
        </div>
        <div class="d-flex gap-3">
          <button class="btn-outline2">Hubungi Kami</button>
          <button class="btn-fill">Daftar Sekarang</button>
        </div>
        
      </div>
    </div>
  </section>
</div>

<!-- card ecourse -->

<!-- card ecourse end -->



<?= $this->endSection(); ?>

