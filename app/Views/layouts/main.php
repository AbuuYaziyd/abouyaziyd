<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="<?= lang('app.appName') ?>">

        <title><?= lang('app.appName') ?></title>

        <!-- CSS FILES -->
        <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/bootstrap-icons.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/magnific-popup.css') ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/templatemo-first-portfolio-style.css') ?>" rel="stylesheet">
    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="spinner-rotate"></span>
            </div>
        </section>

        <?= $this->include('layouts/navigation') ?>

        <?= $this->renderSection('content') ?>

        <?= $this->include('layouts/footer') ?>

        <!-- JAVASCRIPT FILES -->
        <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.sticky.js') ?>"></script>
        <script src="<?= base_url('assets/js/click-scroll.js') ?>"></script>
        <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/magnific-popup-options.js') ?>"></script>
        <script src="<?= base_url('assets/js/custom.js') ?>"></script>

    </body>
</html>