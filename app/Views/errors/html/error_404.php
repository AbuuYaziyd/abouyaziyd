<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?> - <?= lang('app.appName') ?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/logo.svg') ?>" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url('assets/css/styles.css') ?>" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="<?= base_url() ?>"><span class="fw-bolder text-primary"><?= lang('app.appName') ?></span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>"><?= lang('app.home') ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>"><?= lang('app.about') ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('project') ?>"><?= lang('app.projects') ?></a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('contact') ?>"><?= lang('app.contact') ?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <div class="text-center text-xxl-start">
            <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                <div class="text-uppercase">Error: 404</div>
            </div>
            <div class="fs-3 fw-light text-muted">
                <?php if (!empty($message) && $message !== '(null)') : ?>
                    <?= nl2br(esc($message)) ?>
                <?php else : ?>
                    <?= lang('app.errorNotFound') ?>
                <?php endif ?>
            </div>
            <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline"><b>Oops!</b> <?= lang('app.errorNotFound') ?></span></h1>
        </div>
    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0">Copyright &copy; <?= date('Y') ?> <a href="<?= base_url() ?>" target="_blank" style="text-decoration: none;"><?= lang('app.appName') ?></a></div>
                </div>
                <div class="col-auto">
                    <a class="small" href="#!"><?= lang('app.privacy') ?></a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!"><?= lang('app.terms') ?></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
</body>

</html>