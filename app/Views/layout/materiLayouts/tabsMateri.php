<link rel="stylesheet" href="<?= base_url ('styles/materi.css')?>">

<!-- <template> -->
<section class="content-materi mt-4">
  <article class="tab-header d-flex">
    <div class="tab-item active" data-tab="tab1">Gambaran Umum</div>
    <div class="tab-item" data-tab="tab2">QnA</div>
    <div class="tab-item" data-tab="tab3">Catatan</div>
    <div class="tab-item" data-tab="tab4">Pengumuman</div>
    <div class="tab-item" data-tab="tab5">Ulasan</div>
  </article>
  <main class="tab-content">
    <div id="tab1" class="tab-pane active">
      <div class="d-flex flex-column">
        <h1>Tentang Kelas ini</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique error dolorum sed velit alias saepe sint repellendus enim distinctio? Ea sed unde facere. Ab minus, molestias animi aliquid cupiditate saepe?</p>
      </div>
      <div>
        <h1>Alat Pembelajaran</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi alias sit, quae quibusdam quos saepe neque laudantium laboriosam ipsam corporis.</p>
      </div>
    </div>
    <div id="tab2" class="tab-pane">
        <main class="w-100 d-flex flex-column gap-4">
        <div class="qna-input d-flex w-100 gap-4">
            <input type="text" placeholder="Pertanyaan kamu..." class="w-100 rounded-2 border-0">
           <?= $this->include('components/button/caributton'); ?>
        </div>
        <section class="d-flex gap-5">
        <div class="d-flex flex-column">
            <h1>Filter : </h1>
            <div class="dropdown">
                <button class="btn border-1 border-black dropdown-toggle d-flex justify-content-between align-items-center" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Semua Pelajaran
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item"  data-value="Action">Action</a></li>
                    <li><a class="dropdown-item"  data-value="Another action">Another action</a></li>
                    <li><a class="dropdown-item"  data-value="Something else here">Something else here</a></li>
                </ul>
            </div>
        </div>
        <div class="d-flex flex-column">
            <h1>Urutkan Menurut : </h1>
            <div class="dropdown">
                <button class="btn  border-1 border-black dropdown-toggle d-flex justify-content-between align-items-center" type="button" data-bs-toggle="dropdown" aria-expanded="false" style=" width : 300px" id="dropdownMenuButton2">
                    Terbaru
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <li><a class="dropdown-item" data-value="action">Action</a></li>
                    <li><a class="dropdown-item" data-value="Another action">Another action</a></li>
                    <li><a class="dropdown-item" data-value="walawe">walawe</a></li>
                </ul>
            </div>
        </div>
        </section>
        <div>
            <h1>Pertanyaan yang di-pin di modul ini</h1>
            <article class="d-flex gap-3 align-items-start py-3 px-4 mb-2 mx-2 rounded-4">
                <img src="<?= base_url('images/userprofile.png')?>" alt="" class="user-profile mt-2">
                <div class="ulasan d-flex flex-column">
                    <h1 class="d-flex align-items-center gap-2">User231
                        <span>diunggah 13 April 2024</span>
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi architecto temporibus maiores quisquam nam enim dolores distinctio quae, vero unde.
                    </p>
                    <a>
                        Balasan (24)
                    </a>
                </div>
            </article>
        </div>
    </main>
    </div>
    <div id="tab3" class="tab-pane">
      <p>Konten untuk Catatan</p>
    </div>
    <div id="tab4" class="tab-pane">
      <p>Konten untuk Pengumuman</p>
    </div>
    <div id="tab5" class="tab-pane">
      <p>Konten untuk Ulasan</p>
    </div>
  </main>
</section>
<!-- </template> -->

<!-- <script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-beta3/js/bootstrap.bundle.min.js"></script>


<script>
  $(document).ready(function () {
    $(".tab-item").click(function () {
      var tab_id = $(this).attr("data-tab");

      $(".tab-item").removeClass("active");
      $(".tab-pane").removeClass("active");

      $(this).addClass("active");
      $("#" + tab_id).addClass("active");
    });
  });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.dropdown-item', '.dropdown-item2').forEach(function(item) {
            item.addEventListener('click', function() {
                var selectedText = this.textContent;
                document.getElementById('dropdownMenuButton', '.dropdownMenuButton2').textContent = selectedText;
            });
        });
    });
</script>
<!-- </script> -->
