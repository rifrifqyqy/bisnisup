<?php
$url = 'http://0.tcp.ap.ngrok.io:18427/modul';
$konten = file_get_contents($url);
$data = json_decode($konten, true);

?>

<style>
  .progress-circle {
    display: block;
    margin: auto;
    max-width: 50px;
    max-height: 50px;
  }

  .progress-circle circle {
    fill: none;
    stroke-width: 10;
  }

  .progress-circle .background {
    stroke: var(--b100);
  }

  .progress-circle .progress {
    stroke: var(--y300);
    stroke-linecap: round;
    transition: stroke-dashoffset 0.35s;
  }

  .progress-text {
    fill: #000;
    font-size: 1.5em;
    text-anchor: middle;
    dominant-baseline: middle;
  }
</style>


<div class="accordion" id="accordionExample">
  <?php foreach ($data['data_modul'] as $modul) { ?>
    <div class="accordion-item">
      <h2 class="accordion-header d-flex">

        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $modul['modul_id'] ?>" aria-expanded="true" aria-controls="collapse<?= $modul['modul_id'] ?>">
          <!-- <svg id="progress1" class="progress-circle" viewBox="0 0 100 100">
            <circle class="background" cx="50" cy="50" r="45"></circle>
            <circle class="progress" cx="50" cy="50" r="45" stroke-dasharray="282.6" stroke-dashoffset="282.6"></circle>
            <text class="progress-text" x="50" y="50">0%</text>
          </svg> -->
          <?= $modul['modul_title'] ?></button>
      </h2>
      <div id="collapse<?= $modul['modul_id'] ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
        <div class="accordion-body px-0">
          <ul class="list-group">
            <li class="list-group-item">
              <input class="form-check-input me-1 custom-checkbox" type="checkbox" value="" id="firstCheckboxStretched" />
              <label class="form-check-label stretched-link" for="firstCheckboxStretched">Business Intelligence 101</label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1 custom-checkbox" type="checkbox" value="" id="secondCheckboxStretched" />
              <label class="form-check-label stretched-link" for="secondCheckboxStretched">Karir & Profesi di Bidang Business Intelligence</label>
            </li>
            <li class="list-group-item">
              <input class="form-check-input me-1 custom-checkbox" type="checkbox" value="" id="thirdCheckboxStretched" />
              <label class="form-check-label stretched-link" for="thirdCheckboxStretched">Literasi & Etika Digital</label>
            </li>
          </ul>
        </div>
      </div>
    </div>
  <?php } ?>

</div>

<script>
  function setProgress(elementId, progress) {
    const circle = document.querySelector(`#${elementId} .progress`);
    const text = document.querySelector(`#${elementId} .progress-text`);
    const radius = circle.r.baseVal.value;
    const circumference = 2 * Math.PI * radius;

    circle.style.strokeDasharray = `${circumference} ${circumference}`;
    circle.style.strokeDashoffset = `${circumference}`;

    const offset = circumference - (progress / 3) * circumference;
    circle.style.strokeDashoffset = offset;
    text.textContent = `${progress}/3`;
  }


  setProgress('progress1', 1);
  setProgress('progress2', 2);
  setProgress('progress3', 1);
</script>