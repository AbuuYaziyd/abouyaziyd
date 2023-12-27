<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<header class="py-5">
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            <div class="col-xxl-5">
                <!-- Header text content-->
                <div class="text-center text-xxl-start">
                    <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                        <div class="text-uppercase"><?= lang('app.Fx') ?></div>
                    </div>
                    <div class="fs-3 fw-light text-muted"><?= lang('app.availability') ?></div>
                    <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline"><?= lang('app.Getonlineandgrowfast') ?></span></h1>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                        <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="<?= base_url('about') ?>"><?= lang('app.resume') ?></a>
                        <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder" href="<?= base_url('my-project') ?>"><?= lang('app.projects') ?></a>
                    </div>
                </div>
            </div>
            <!-- Picture -->
            <?= $this->include('home/pic') ?>
        </div>
    </div>
</header>
<!-- About Section-->
<section class="bg-light py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xxl-8">
                <div class="text-center my-5">
                    <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline"><?= lang('app.aboutMe') ?></span></h2>
                    <p class="lead fw-light mb-4"><?= lang('app.aboutText') ?></p>
                    <p class="text-muted"><?= lang('app.aboutText2') ?></p>
                    <div class="d-flex justify-content-center fs-2 gap-4">
                        <a class="text-gradient" target='_blank' href="https://youtube.com/abouyaziyd"><i class="bi bi-youtube"></i></a>
                        <a class="text-gradient" target='_blank' href="https://t.me/abouyaziyd"><i class="bi bi-telegram"></i></a>
                        <a class="text-gradient" target='_blank' href="https://twitter.com/Abouyaziyd"><i class="bi bi-twitter"></i></a>
                        <a class="text-gradient" target='_blank' href="https://m.facebook.com/abouyaziyd/"><i class="bi bi-facebook"></i></a>
                        <a class="text-gradient" target='_blank' href="https://wa.me/255682057710"><i class="bi bi-whatsapp"></i></a>
                        <a class="text-gradient" target='_blank' href="tel:+255682057710"><i class="bi bi-phone"></i></a>
                        <a class="text-gradient" target='_blank' href="mailto:abouyaziyd@gmail.com"><i class="bi bi-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
</section>

<?= $this->endSection() ?>