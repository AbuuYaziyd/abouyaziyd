<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AB Solutions, Come join us and Build the Future!">
    <meta name="keywords" content="AB Solutions">
    <meta name="author" content="abouyaziyd">
    <meta name="theme-color" content="#738d6d">
    <link rel="manifest" href="<?= base_url('manifest') ?>" />
    <script src="<?= base_url('assets/js/app.js') ?>"></script>
    <link rel="apple-touch-icon" href="<?= base_url('app-assets/logo.svg') ?> ">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('app-assets/logo.svg') ?> ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title><?= lang('app.appName') ?> | <?= $title ?></title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?= base_url('app-assets/plugins/fontawesome-free/css/all.min.css') ?>">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url('app-assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('app-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('app-assets/plugins/jqvmap/jqvmap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('app-assets/dist/css/adminlte.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('app-assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('app-assets/plugins/daterangepicker/daterangepicker.css') ?>">
  <link rel="stylesheet" href="<?= base_url('app-assets/plugins/summernote/summernote-bs4.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('app-assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">     <?= $this->renderSection('styles') ?>
  
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GDN87JD4VQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GDN87JD4VQ');
</script>
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

<script src="<?= base_url('app-assets/plugins/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('app-assets/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="<?= base_url('app-assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('app-assets/plugins/chart.js/Chart.min.js') ?>"></script>
<script src="<?= base_url('app-assets/plugins/sparklines/sparkline.js') ?>"></script>
<script src="<?= base_url('app-assets/plugins/jqvmap/jquery.vmap.min.js') ?>"></script>
<script src="<?= base_url('app-assets/plugins/jqvmap/maps/jquery.vmap.usa.js') ?>"></script>
<script src="<?= base_url('app-assets/plugins/jquery-knob/jquery.knob.min.js') ?>"></script>
<script src="<?= base_url('app-assets/plugins/moment/moment.min.js') ?>"></script>
<script src="<?= base_url('app-assets/plugins/daterangepicker/daterangepicker.js') ?>"></script>
<script src="<?= base_url('app-assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') ?>"></script>
<script src="<?= base_url('app-assets/plugins/summernote/summernote-bs4.min.js') ?>"></script>
<script src="<?= base_url('app-assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') ?>"></script>
<script src="<?= base_url('app-assets/dist/js/adminlte.js') ?>"></script>
<script src="<?= base_url('app-assets/dist/js/demo.js') ?>"></script>
<script src="<?= base_url('app-assets/dist/js/pages/dashboard.js') ?>"></script>
<?= $this->renderSection('scripts') ?>
<script src="<?= base_url('app-assets/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>

<?php if (session()->getFlashdata('toast')) : ?>
<script>
    $(document).ready(function () {
    var Toast = Swal.mixin({
      toast: false,
      position: 'center',
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
