
<?php

$url = 'http://0.tcp.ap.ngrok.io:18427/course';
$konten = file_get_contents($url);
$data = json_decode($konten, true);
function formatRupiah($number)
{
    return number_format($number, 0, ',', '.');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= base_url('styles/home.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('styles/payment.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('styles/cardstyle.css'); ?>">

    <title><?= $title; ?></title>

</head>

<body>

    <section class="header-payment container rounded-4 py-2 mx-auto d-flex mt-3 justify-content-end sticky-top">
        <button class="d-flex gap-3 align-items-center rounded-2 py-2 px-3" onclick="goBack()">
            <img src="<?= base_url('images/close.svg') ?>" alt="">
            <p class="my-auto">Batal</p>
        </button>

    </section>
    <section class="payment container d-flex mx-auto mt-4 gap-5">
        <main class="w-75">
            <h1 class="mb-4">Metode Pembayaran</h1>
            <section class="wrapper-payment p-4 rounded-4">
                <h2>Kartu Kredit/Debit</h2>
                <form class="mt-4">
                    <div class="row mb-3">
                        <div class="w-100">
                            <label for="input1" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control w-100" id="input1" placeholder="Masukkan Nama">

                            <label for="input2" class="form-label mt-2">Nomor Kartu</label>
                            <input type="text" class="form-control w-100" id="input2" placeholder="Masukkan Nomor Kartu">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="input3" class="form-label">Tanggal Kadaluarsa</label>
                            <input type="date" class="form-control w-100" id="input3" placeholder="Tanggal Kadaluarsa Kartu">
                        </div>
                        <div class="col-md-6">
                            <label for="input4" class="form-label">CVV</label>
                            <input type="text" class="form-control w-100" id="input4" placeholder="Masukkan CVV">
                        </div>
                    </div>

                </form>
                <form class="form-payment">
                    <h2>Transfer Bank</h2>
                    <section class="method-wrap">
                        <div class="method">
                            <img src="<?= base_url('images/payment/bac.png') ?>" alt="" class="w-full">
                            <p>Bank BCA</p>
                        </div>
                        <div class="method">
                            <img src="<?= base_url('images/payment/mandiri.png') ?>" alt="" class="w-full">
                            <p>Bank Mandiri</p>
                        </div>
                        <div class="method">
                            <img src="<?= base_url('images/payment/bri.png') ?>" alt="" class="w-full">
                            <p>Bank BRI</p>
                        </div>
                        <div class="method">
                            <img src="<?= base_url('images/payment/bankbsi.png') ?>" alt="" class="w-full">
                            <p>Bank BSI</p>
                        </div>
                    </section>

                </form>
                <form class="form-payment">
                    <h2>E-Wallet</h2>
                    <section class="method-wrap">
                        <div class="method">
                            <img src="<?= base_url('images/payment/ovo.png') ?>" alt="" class="w-full">
                            <p>OVO</p>
                        </div>
                        <div class="method">
                            <img src="<?= base_url('images/payment/linkaja.png') ?>" alt="" class="w-full">
                            <p>LinkAja</p>
                        </div>
                        <div class="method">
                            <img src="<?= base_url('images/payment/spay.png') ?>" alt="" class="w-full">
                            <p>ShopeePay</p>
                        </div>
                        <div class="method">
                            <img src="<?= base_url('images/payment/dana.png') ?>" alt="" class="w-full">
                            <p>Dana</p>
                        </div>
                    </section>

                </form>
                <form class="form-payment">
                    <h2>Q-RIS</h2>
                    <section class="method-wrap">
                        <div class="method">
                            <img src="<?= base_url('images/payment/qris.png') ?>" alt="" class="w-full">
                            <p>QRIS</p>
                        </div>
                    </section>
                </form>
            </section>
        </main>
        <aside class="">
            <h1>Detail Pesanan</h1>
            <section>
                <?php
                $selected_course = [];
                foreach ($data['data_course'] as $course) {
                    if ($course['course_id'] == $course_id) {
                        $selected_course = $course;
                        break;
                    }
                }


                if ($selected_course) {
                    $thumb_url = $selected_course['thumb'];
                ?>
                    <div class="card-container mt-4">
                        <!-- card header -->
                        <img src="<?= $thumb_url ?>" alt="" class="course-img">
                        <div class="d-flex justify-content-between align-items-center mt-lg-2">
                            <div class="ctg-label"><?= $selected_course['category']; ?></div>
                            <div class="d-flex rating-label gap-2">
                                <img src="<?= base_url('images/star.svg') ?>" alt="">
                                <p class="my-auto">4.5</p>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body mt-2">
                            <h1><?= $selected_course['title']; ?></h1>
                        </div>
                        <!-- card footer -->
                        <div class="card-footer mt-2 d-flex justify-content-between align-items-center">
                            <h1>Rp <?= formatRupiah($selected_course['price']); ?></h1>
                            <div class="d-flex align-items-center gap-lg-3 gap-1">
                                <img src="images/mentor.png" alt="" class="rounded-circle">
                                <p class="my-auto"><?= $selected_course['mentor']['name']; ?></p>
                            </div>
                        </div>

                    </div>
                <?php
                } else {
                    // Jika course dengan course_id tidak ditemukan
                    echo "Course not found.";
                }
                ?>

            </section>
            <section class="wrapper-transaksi d-flex flex-column gap-2 bg-white rounded-4 p-3 mt-4">
                <div class="d-flex justify-content-between pb-3 border-bottom">
                    <p>Harga</p>
                    <p>Rp <?= formatRupiah($selected_course['price']); ?></p>
                </div>
                <section class="d-flex flex-column border-bottom pb-2 gap-2">
                    <div class="d-flex justify-content-between">
                        <p class="subtotal">Sub Total</p>
                        <p class="my-auto">Rp <?= formatRupiah($selected_course['price']); ?></p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="">Tax</p>
                        <p>Rp 0</p>
                    </div>
                </section>
                <div class="total d-flex justify-content-between">
                    <p>Total</p>
                    <p>Rp <?= formatRupiah($selected_course['price']); ?></p>
                </div>
            </section>
            <div class="d-flex flex-column gap-2 mt-3">
                <p class="my-auto">Pastikan data yang kamu masukkan sesuai ya..</p>
                <button class="konfirmasi rounded-pill py-2">
                    <a href="">Konfirmasi Pembayaran</a>
                </button>
            </div>
        </aside>

    </section>
    <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const methods = document.querySelectorAll('.method');

            methods.forEach(method => {
                method.addEventListener('click', function() {
                    // Remove 'active' class from all methods
                    methods.forEach(m => m.classList.remove('active'));
                    // Add 'active' class to the clicked method
                    this.classList.add('active');
                });
            });
        });

        function goBack() {
            // Kembali ke halaman sebelumnya dalam history
            window.history.back();
        }
    </script>


</body>

</html>