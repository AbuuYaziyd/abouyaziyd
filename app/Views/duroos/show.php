<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="py-5">
    <div class="container px-5 mb-3">
        <div class="text-center mb-3">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline"><?= $cat['name'] ?></span></h1>
        </div>
        <section>
            <div class="card shadow border-0 rounded-4 mb-5">
                <div class="card-body p-5">
                    <?php foreach ($duroos as $dr) : ?>
                        <?php $darsa = $drs->darsa($dr['type']) ?>
                        <div class="mb-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-mic"></i></div>
                                <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline"><?= $dr['type'] ?></span></h3>
                            </div>
                            <div class="row row-cols-1 row-cols-md-3 mb-3">
                                <?php foreach ($darsa as $d) : ?>
                                    <div class="col mb-2">
                                        <a href="<?= base_url('duroos/view/' . $d['id']) ?>" class="d-flex bg-light rounded-4 p-3 h-100" style="text-decoration: none;"><span class="text-gradient"><?= $d['name'] ?></span></a>

                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    </div>
</section>

<?= $this->endSection() ?>