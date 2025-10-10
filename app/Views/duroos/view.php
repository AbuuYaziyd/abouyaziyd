<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline"><?= $cat['name'] ?></span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xxl-8">
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-gradient fw-bolder mb-0"><b><?= $darsa['name'] ?></b></h2>

                    <audio controls>
                        <source src="https://archive.org/download/darsa_subulu_salami_fiymaa_laa_yanbaghi_2025/001%20SBL-HDTH-01.mp3" type="audio/mpeg">
                    </audio>
                </div>
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-primary fw-bolder mb-2"><?= $darsa['owner'] ?></div>
                                    <div class="small fw-bolder"></div>
                                    <p><?= nl2br($darsa['info']) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?= $this->endSection() ?>