<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= lang('app.appName') ?> - <?= $title ?></title>
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
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-GDN87JD4VQ"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-GDN87JD4VQ');
        </script>
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
                            <li class="nav-item"><a class="nav-link <?= uri_string()==''?'active':'' ?>" href="<?= base_url() ?>"><?= lang('app.home') ?></a></li>
                            <li class="nav-item"><a class="nav-link <?= uri_string()== 'about'?'active':'' ?>" href="<?= base_url('about') ?>"><?= lang('app.about') ?></a></li>
                            <li class="nav-item"><a class="nav-link <?= uri_string()== 'my-project'?'active':'' ?>" href="<?= base_url('project') ?>"><?= lang('app.projects') ?></a></li>
                            <li class="nav-item"><a class="nav-link <?= uri_string()== 'contact'?'active':'' ?>" href="<?= base_url('contact') ?>"><?= lang('app.contact') ?></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Header-->
            <?= $this->renderSection('content') ?>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0"><?= lang('app.copyright') ?> &copy; <?= date('Y') ?> <a href="<?= base_url() ?>" target="_blank" style="text-decoration: none;"><?= lang('app.appName') ?></a></div></div>
                    <div class="col-auto">
                        <a class="small" href="<?= base_url('privacy') ?>"><?= lang('app.privacy') ?></a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="<?= base_url('terms') ?>"><?= lang('app.terms') ?></a>
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