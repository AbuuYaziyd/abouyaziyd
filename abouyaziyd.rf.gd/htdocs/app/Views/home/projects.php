<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><?= $cat['name'] ?></h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($pr as $key => $dt) : ?>
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#projectModal<?= $key+1 ?>">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="<?= base_url($dt['pr_img']) ?>" alt="project<?= $key+1 ?>" />
                </div>
            </div>
            
            <div class="portfolio-modal modal fade" id="projectModal<?= $key+1 ?>" tabindex="-1" aria-labelledby="projectModal<?= $key+1 ?>" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?= $dt['name'] ?></h2>
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <img class="img-fluid rounded mb-5" src="<?= base_url($dt['pr_img']) ?>" alt="project-<?= $key+1 ?>" />
                                        <p class="mb-4"><?= $dt['info'] ?></p>
                                        <a class="btn btn-primary" href="<?= $dt['link'] ?>" target="_blank">
                                            <i class="fas fa-globe fa-fw"></i>
                                            <?= lang('app.visit') ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<?= $this->include('home/about') ?>

<?= $this->endSection() ?>