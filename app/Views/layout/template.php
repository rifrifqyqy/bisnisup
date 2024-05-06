<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

    <!-- <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .custom-btn {
            --bs-btn-color: #a37202;
            --bs-btn-border-color: #a37202;
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: #a37202;
            --bs-btn-hover-border-color: #a37202;
            --bs-btn-focus-shadow-rgb: 25, 135, 84;
            --bs-btn-active-color: #fff;
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

    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">Biznisup</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= base_url('/ecourse'); ?>">Link</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
                <button class="btn custom-btn" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <?= $this->renderSection('content'); ?>

    <footer
            class="text-center text-lg-start text-white"
            style="background-color: #a37202"
            >
        <!-- Grid container -->
        <div class="container p-4 pb-0">
        <!-- Section: Links -->
        <section class="">
            <!--Grid row-->
            <div class="row">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">
                Biznisup
                </h6>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc interdum massa eget convallis porttitor. Nulla dignissim dignissim mi, laoreet aliquam odio varius ultricies. Morbi congue sem urna, quis congue enim pretium vitae. Donec sed lacus id diam consectetur tempus. Maecenas molestie enim et lectus euismod, vel porttitor ex ullamcorper. 
                </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                <p>
                <a class="text-white">MDBootstrap</a>
                </p>
                <p>
                <a class="text-white">MDWordPress</a>
                </p>
                <p>
                <a class="text-white">BrandFlow</a>
                </p>
                <p>
                <a class="text-white">Bootstrap Angular</a>
                </p>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">
                Useful links
                </h6>
                <p>
                <a class="text-white">Your Account</a>
                </p>
                <p>
                <a class="text-white">Become an Affiliate</a>
                </p>
                <p>
                <a class="text-white">Shipping Rates</a>
                </p>
                <p>
                <a class="text-white">Help</a>
                </p>
            </div>

            <!-- Grid column -->
            <hr class="w-100 clearfix d-md-none" />

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p><i class="bi bi-geo-alt-fill"></i> New York, NY 10012, US</p>
                <p><i class="bi bi-envelope-fill"></i> info@gmail.com</p>
                <p><i class="bi bi-telephone-fill"></i> + 01 234 567 88</p>
            </div>
            <!-- Grid column -->
            </div>
            <!--Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-3">

        <!-- Section: Copyright -->
        <section class="p-3 pt-0">
            <div class="row d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-7 col-lg-8 text-center text-md-start">
                <!-- Copyright -->
                <div class="p-3">
                © 2024 Copyright:
                <a class="text-white" href=""
                    >Biznisup</a
                    >
                </div>
                <!-- Copyright -->
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                <!-- Linkedin -->
                <a
                class="btn btn-outline-light btn-floating m-1"
                class="text-white"
                role="button"
                href="https://www.linkedin.com/company/dconsulting-id/"
                target="_blank"
                ><i class="bi bi-linkedin"></i></a>

                <!-- Facebook -->
                <a
                class="btn btn-outline-light btn-floating m-1"
                class="text-white"
                role="button"
                href="https://m.facebook.com/profile.php?id=100063457724977"
                target="_blank"
                ><i class="bi bi-facebook"></i></a>

                <!-- Youtube -->
                <a
                class="btn btn-outline-light btn-floating m-1"
                class="text-white"
                role="button"
                href="https://youtube.com/@dconsultingid?si=kRoIWqzLo-LrXaSk"
                target="_blank"
                ><i class="bi bi-youtube"></i></a>

                <!-- Instagram -->
                <a
                class="btn btn-outline-light btn-floating m-1"
                class="text-white"
                role="button"
                href="https://www.instagram.com/dconsulting.id?igsh=MXgzeHVrenEyaHJ6bQ=="
                target="_blank"
                ><i class="bi bi-instagram"></i></a>
            </div>
            <!-- Grid column -->
            </div>
        </section>
        <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
    </footer>

    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> 

  </body>
</html>