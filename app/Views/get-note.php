<?= $this->extend('layouts/root_layout') ?>
<?= $this->section('content') ?>

<section class="form">

<form class="form_note" action="/update/<?= $note['id'] ?>" method="POST">
  <div class="form_action">
    <a href="/" class="cancel_button">Batal</a>
    <button type="submit" class="save_button">Simpan</button>
  </div>
  <input type="text" name="title" class="form_title" placeholder="Judul" value="<?= $note['title'] ?>">
  <input type="hidden" name="content" value='<?= $note["content"] ?>'>
  <div class="form_content" id="form_content" placeholder="Tulis catatanmu disini..." oninput="autoResize(this)">
    <?= $note['content'] ?>
  </div>
</form>

<form action="/delete/<?= $note['id'] ?>" method="post">
  <button type="button" class="delete_button" onclick="confirmDelete(this)">Hapus</button>
  <button type="submit" id="confirm_delete" style="display: none;"></button>
</form>

</section>
<?= $this->endSection() ?>