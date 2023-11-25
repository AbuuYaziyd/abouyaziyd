<?= $this->section('styles') ?>
  <link rel="stylesheet" href="<?= base_url('plugins/summernote/summernote-bs4.min.css') ?>">
  <?= $this->endsection() ?>
  <?= $this->section('scripts') ?>
  <link rel="stylesheet" href="<?= base_url('plugins/summernote/summernote-bs4.min.js') ?>">
  <?= $this->endsection() ?>
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()
  })
</script>