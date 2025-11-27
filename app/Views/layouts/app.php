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
    <link rel="manifest" href="<?= base_url('manifest') ?>" />
    <link rel="stylesheet" href="<?= base_url('app-assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('app-assets/dist/css/adminlte.min.css') ?>">
    <link rel="apple-touch-icon" href="<?= base_url('app-assets/logo.svg') ?> ">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('app-assets/logo.svg') ?> ">
    <script src="<?= base_url('app-assets/plugins/sweetalert2/sweetalert2.min.js') ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <?= $this->renderSection('styles') ?>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="<?= base_url('dashboard') ?>" class="navbar-brand">
                    <img src="<?= base_url('app-assets/logo.svg') ?>" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light"><?= lang('app.appName') ?></span>
                </a>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <!-- Notifications Dropdown Menu -->
                    <div class="user-panel d-flex">
                        <div class="image mr-1">
                            <img src="https://ui-avatars.com/api/?name=<?= session('name') ?>&&rou&&background=random" class="img-circle elevation-1" alt="avatar">
                        </div>
                    </div>
                    <div class="info">
                        <div class="btn-group">
                            <li class="nav-item dropdown">
                                <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><?= session('name') ?></a>
                                <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                    <li>
                                        <a href="<?= base_url('user/show/' . session('id')) ?>" class="dropdown-item">
                                            <i class="fas fa-universal-access"></i> Wasifu</a>
                                    </li>
                                    <li>
                                        <a href="<?= base_url('user/edit/' . session('id')) ?>" class="dropdown-item">
                                            <i class="fas fa-wrench"></i> Edit Wasifu </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li><a href="<?= base_url('logout') ?>" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Ondoka</a></li>
                                </ul>
                            </li>
                        </div>
                    </div>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-8">
                            <h1 class="m-0"><b><?= $title ?></b></h1>
                        </div>
                        <div class="col-sm-4">
                            <?= $this->renderSection('bread') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <?= $this->renderSection('content') ?>
                </div>
            </div>
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
    <script src="<?= base_url('app-assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('app-assets/dist/js/adminlte.js') ?>"></script>
    <script src="<?= base_url('app-assets/dist/js/demo.js') ?>"></script>
</body>

</html>