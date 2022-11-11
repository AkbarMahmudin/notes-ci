<?= $this->extend('layouts/root_layout') ?>
<?= $this->section('content') ?>

<section class="notes">
  <h1>All Notes</h1>

  <!-- START: All Notes List -->
  <div class="note_list">
    <?php foreach($notes as $note): ?>
      <div class="note_item" data-id="<?= $note['id'] ?>" onclick="toDetailPage(this)">
        <h4 class="note_title"><?= $note['title'] ?></h4>
        <div class="note_content">
          <?= strlen($note['content']) > 100 ? substr($note['content'], 0, 100) . '...' : $note['content'] ?>
        </div>
        <span class="note_time"><?= $note['created_at'] ?></span>
      </div>
    <?php endforeach ?>
  </div>
  <!-- END: All Notes List -->

</section>

<a href="/new-note" class="float_button" title="Buat note baru">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4" style="width: 70%;">
    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
  </svg>
</a>
<?= $this->endSection() ?>