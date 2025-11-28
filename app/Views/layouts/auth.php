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
  <title><?= lang('app.appName') ?> | <?= $title ?></title>
  <link rel="apple-touch-icon" href="<?= base_url('app-assets/logo.svg') ?> ">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('app-assets/logo.svg') ?> ">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?= base_url('app-assets/plugins/fontawesome-free/css/all.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('app-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('app-assets/dist/css/adminlte.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('app-assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') ?>">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-GDN87JD4VQ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-GDN87JD4VQ');
  </script>
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <img src="<?= base_url('app-assets/logo.svg') ?>" alt="logo" style="height: 100px;" /><br>
      <a href="<?= base_url() ?>"><b><?= lang('app.appName') ?></b></a>
    </div>
    <div class="card card-outline card-primary">
      <div class="card-body">
        <?= $this->renderSection('content') ?>
      </div>
    </div>
  </div>
  <script src="<?= base_url('app-assets/plugins/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('app-assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('app-assets/dist/js/adminlte.min.js') ?>"></script>
  <script src="<?= base_url('app-assets/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>

  <?php if (session()->getFlashdata('toast')) : ?>
    <script>
      $(document).ready(function() {
        var Toast = Swal.mixin({
          toast: true,
          position: 'center',
          showConfirmButton: false,
          timer: 3000
        })
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