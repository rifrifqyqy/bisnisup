<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" href="<?=  base_url ('styles/materi.css')?>">
        <header class="container mx-auto mt-4"> 
        <?= $this->include('layout/materiLayouts/breadCrumb'); ?>
        </header>
    <main class="container mx-auto mt-4 row">
      <aside class="col-3 px-0 overflow-hidden">
        <?= $this->include('layout/materiLayouts/sideNavigation'); ?>
      </aside>
      <article class="col">
        <?= $this->include('layout/materiLayouts/contentHeader'); ?>
        <?= $this->include('layout/materiLayouts/tabsMateri'); ?>

      </article>
    </main>

<!-- script -->
<script>
$(document).ready(function() {
    $('.form-check-input').on('change', function() {
        $('.form-check-input').not(this).prop('checked', false);
    });
});



</script>
<?= $this->endSection(); ?>

