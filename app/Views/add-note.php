<?= $this->extend('layouts/root_layout') ?>
<?= $this->section('content') ?>

<section class="form">

<form class="form_note" action="/" method="POST">
  <div class="form_action">
    <a href="/" class="cancel_button">Batal</a>
    <button type="submit" class="save_button">Simpan</button>
  </div>
  <input type="text" name="title" class="form_title" placeholder="Judul">
  <input type="hidden" name="content">
  <div class="form_content" id="form_content" placeholder="Tulis catatanmu disini..." oninput="autoResize(this)"></div>
</form>

</section>
<?= $this->endSection() ?>