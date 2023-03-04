<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ZANZIBAR ASSOCIATION OF VEGETABLE AND FRUITS GROWERS (UWAMWIMA)">
    <meta name="keywords" content="UWAMWIMA">
    <meta name="author" content="abouyaziyd">
    <meta name="theme-color" content="#738d6d">
    <link rel="manifest" href="<?= base_url('manifest') ?>" />
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
    <link rel="apple-touch-icon" href="<?= base_url('assets/images/logo/logo.png') ?> ">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/logo/logo.png') ?> ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title><?= lang('app.appName') ?> | <?= $title ?></title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('plugins/jqvmap/jqvmap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('plugins/daterangepicker/daterangepicker.css') ?>">
  <link rel="stylesheet" href="<?= base_url('plugins/summernote/summernote-bs4.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">     <?= $this->renderSection('styles') ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <?= $this->include('layouts/nav') ?>
    <?= $this->include('layouts/sidebar') ?>
  <div class="content-wrapper">
    <div class="content-header"></div>
    <?= $this->renderSection('content') ?>
  </div>
  <footer class="main-footer">
    <strong><?= lang('app.copyrights') ?> &copy; <?= date('Y') ?> <a href="<?= base_url() ?>"><?= lang('app.appName') ?></a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b><?= lang('app.createdBy') ?>: </b><strong><a href="http://abouyaziyd.rf.gd" target="_blank">abouyaziyd</a></strong>
    </div>
  </footer>
</div>

<script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('plugins/chart.js/Chart.min.js') ?>"></script>
<script src="<?= base_url('plugins/sparklines/sparkline.js') ?>"></script>
<script src="<?= base_url('plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
<script src="<?= base_url('plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
<script src="<?= base_url('plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
<script src="<?= base_url('plugins/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('plugins/daterangepicker/daterangepicker.js') ?>"></script>
<script src="<?= base_url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<script src="<?= base_url('plugins/summernote/summernote-bs4.min.js') ?>"></script>
<script src="<?= base_url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<script src="<?= base_url('dist/js/adminlte.js') ?>"></script>
<script src="<?= base_url('dist/js/demo.js') ?>"></script>
<script src="<?= base_url('dist/js/pages/dashboard.js') ?>"></script>
<?= $this->renderSection('scripts') ?>
<script src="<?= base_url('plugins/sweetalert2/sweetalert2.min.js') ?>"></script>

<?php if (session()->getFlashdata('toast')) : ?>
<script>
    $(document).ready(function () {
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000})
      Toast.fire({
        icon: '<?= session()->getFlashdata('toast') ?>',
        title: '<?= session()->getFlashdata('title') ?>',
        text: '<?= session()->getFlashdata('text') ?>',
      })
    });
</script>
<?php endif ?>
</body>
</html>
