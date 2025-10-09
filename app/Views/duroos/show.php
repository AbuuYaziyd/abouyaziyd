<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline"><?= $cat['name'] ?></span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <?php foreach ($duroos as $key => $dt) : ?>
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-5">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <h5><b><?= $dt['name'] ?></b></h5>
                                    <div><?= $dt['info'] ?></div>
                                    <a href="<?= base_url('pr-content/'.$dt['id']) ?>" class="btn btn-block btn-primary mt-3">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<!-- Call to action section-->
<section class="py-5 bg-gradient-primary-to-secondary text-white">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="display-4 fw-bolder mb-4"><?= lang('app.letsBuild') ?></h2>
            <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="<?= base_url('contact') ?>"><?= lang('app.contactMe') ?></a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>