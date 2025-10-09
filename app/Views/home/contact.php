<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder"><?= lang('app.getInTouch') ?></h1>
                <p class="lead fw-normal text-muted mb-0"><?= lang('app.letsWorkTogether') ?></p>
            </div>
            <div class="d-flex justify-content-center fs-2 gap-4">
                <a class="text-gradient" target='_blank' href="https://youtube.com/@abouyaziyd"><i class="bi bi-youtube"></i></a>
                <a class="text-gradient" target='_blank' href="https://t.me/abouyaziyd"><i class="bi bi-telegram"></i></a>
                <a class="text-gradient" target='_blank' href="https://twitter.com/abouyaziyd"><i class="bi bi-twitter"></i></a>
                <a class="text-gradient" target='_blank' href="https://m.facebook.com/abouyaziyd"><i class="bi bi-facebook"></i></a>
                <a class="text-gradient" target='_blank' href="https://wa.me/255682057710"><i class="bi bi-whatsapp"></i></a>
                <a class="text-gradient" target='_blank' href="tel:+255682057710"><i class="bi bi-phone"></i></a>
                <a class="text-gradient" target='_blank' href="mailto:abouyaziyd@gmail.com"><i class="bi bi-envelope"></i></a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>