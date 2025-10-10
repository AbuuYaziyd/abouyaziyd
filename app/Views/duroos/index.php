<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline"><?= $title ?></span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <?php foreach ($cat as $key => $dt) : ?>
            <div class="col-md-4">
                <a href="<?= base_url('duroos/show/'.$dt['id']) ?>" style='text-decoration:none;'>
                    <div class="card shadow border-0 rounded-4 mb-5">
                        <div class="card-body p-3">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <div class="bg-light p-4 rounded-4">
                                        <div class="text-<?= $key%2==0?'primary':'secondary' ?> fw-bolder mb-2"><?= $dt['name'] ?></div>
                                        <div class="small text-muted"><?= $c->countDuroos($dt['id']) ?> - <?= lang('app.duroos') ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?= $this->endSection() ?>