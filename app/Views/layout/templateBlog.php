<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />


    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= base_url('styles/home.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('styles/blog.css'); ?>">
    <style>
        .custom-btn {
            --bs-btn-color: #a37202;
            --bs-btn-border-color: #a37202;
            --bs-btn-hover-color: #e5b30c;
            --bs-btn-hover-bg: #a37202;
            --bs-btn-hover-border-color: #a37202;
            --bs-btn-focus-shadow-rgb: 25, 135, 84;
            --bs-btn-active-color: #e5b30c;
            --bs-btn-active-bg: #a37202;
            --bs-btn-active-border-color: #a37202;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #a37202;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #a37202;
            --bs-gradient: none;
        }
    </style>

    <title><?= $title; ?></title>

</head>

<body>

    <nav class="navbar navbar-expand-lg sticky-top bg-white" data-bs-theme="light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('/'); ?>">
                <img src="<?= base_url('images/biznisup.svg'); ?>" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-black" href="<?= base_url('/ecourse'); ?>">Blog</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-black" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Topik Belajar
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="<?= base_url('/blog'); ?>">General</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="<?= base_url('/blog'); ?>">Cerita Sukses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="<?= base_url('/blog'); ?>">Mentor</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>

    <?= $this->renderSection('content'); ?>

    <footer class="text-center mt-5 text-lg-start text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-4 mx-auto mb-3 mt-lg-3 mb-lg-4">
                        <div>
                            <img src="<?= base_url('images/darkbiznisup.svg'); ?>" alt="" class="logo-footer">
                        </div>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-3 mx-auto mt-3">
                        <h6 class=" mb-lg-4 font-weight-bold">Alamat</h6>
                        <p>
                            <a class="text-white">Ruko Darmo Galeria Blok C-18, Jalan Mayjend Sungkono, Surabaya Barat. </a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mt-3 mb-4 mb-lg-0 menu-footer">
                        <h6 class="mb-lg-4">
                            Menu
                        </h6>
                        <a class="text-white">Beranda</a>
                        <a class="text-white">Be Success</a>
                        <a class="text-white">Blog</a>
                        <a class="text-white">FAQ</a>
                        <a class="text-white">Tentang Kami</a>

                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="mb-3">Sosial Media</h6>
                        <div class="sosmed d-flex justify-content-center justify-content-md-start">
                            <div class="d-flex gap-4">
                                <img src="<?= base_url('images/sosmed/youtube.svg') ?>" alt="">
                                <img src="<?= base_url('images/sosmed/facebook.svg') ?>" alt="">
                                <img src="<?= base_url('images/sosmed/twitter.svg') ?>" alt="">
                                <img src="<?= base_url('images/sosmed/instagram.svg') ?>" alt="">
                                <img src="<?= base_url('images/sosmed/linkedin.svg') ?>" alt="">
                            </div>
                        </div>
                        <h6 class="mt-4 mb-3">Temukan Kami</h6>
                        <div class="d-flex justify-content-center justify-content-md-start">
                            <div class="d-flex gap-4">
                                <img src="<?= base_url('images/appstr.svg') ?>" alt="">
                                <img src="<?= base_url('images/gglplay.svg') ?>" alt="">

                            </div>
                        </div>
                        <p class="mt-3">BIZNISUP @2024. All rights reserved.</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="my-3">

            <!-- Section: Copyright -->
            <!-- Section: Copyright -->
        </div>

        <!-- Grid container -->
    </footer>

    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script>
        const colorMenu = "text-dark"
    </script>

</body>

</html>