<?= $this->extend('auth/main') ?>

<?= $this->section('content') ?>
<div class="content-body">
    <section class="row flexbox-container">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0 mb-2">
                <div class="card border-grey border-lighten-3 m-0">
                    <div class="card-header border-1">
                        <div class="card-title text-center">
                            <div class="p-1"><img src="<?= base_url('app-assets/images/logo/logo.svg') ?>" alt="logo" height="80px"></div>
                        </div>
                        <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span><?= lang('app.register') ?></span>
                        </h6>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <?php $validation = \Config\Services::validation() ?>
                            <?= form_open('tasjil') ?>

                            <label><?= lang('app.fstnames') ?> (<?= lang('app.inSW') ?>) :</label>
                            <?php if ($validation->getError('name')) : ?>
                                <span class="badge badge-danger"> <?= $errors = $validation->getError('name') ?></span>
                            <?php endif ?>
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                <input type="text" class="form-control" name="name" placeholder="<?= lang('app.fstnames') ?> (<?= lang('app.inSW') ?>)">
                                <div class="form-control-position">
                                    <i class="la la-user"></i>
                                </div>
                            </fieldset>

                            <label><?= lang('app.lname') ?> (<?= lang('app.inSW') ?>) :</label>
                            <?php if ($validation->getError('lname')) : ?>
                                <span class="badge badge-danger"> <?= $errors = $validation->getError('lname') ?></span>
                            <?php endif ?>
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                <input type="text" class="form-control" name="lname" placeholder="<?= lang('app.lname') ?> (<?= lang('app.inSW') ?>)">
                                <div class="form-control-position">
                                    <i class="la la-user"></i>
                                </div>
                            </fieldset>

                            <label><?= lang('app.fullName') ?> (<?= lang('app.inAR') ?>) :</label>
                            <?php if ($validation->getError('nameArabic')) : ?>
                                <span class="badge badge-danger"> <?= $errors = $validation->getError('nameArabic') ?></span>
                            <?php endif ?>
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                <input type="text" class="form-control" name="nameArabic" placeholder="<?= lang('app.fullName') ?> (<?= lang('app.inAR') ?>)">
                                <div class="form-control-position">
                                    <i class="la la-user"></i>
                                </div>
                            </fieldset>

                            <label><?= lang('app.malaf') ?></label>
                            <?php if ($validation->getError('malaf')) : ?>
                                <span class="badge badge-danger"> <?= $errors = $validation->getError('malaf') ?></span>
                            <?php endif ?>
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                <input type="text" class="form-control" name="malaf" placeholder="R2020/0001">
                                <div class="form-control-position">
                                    <i class="la la-university"></i>
                                </div>
                            </fieldset>

                            <label><?= lang('app.sex') ?></label>
                            <?php if ($validation->getError('sex')) : ?>
                                <span class="badge badge-danger"> <?= $errors = $validation->getError('sex') ?></span>
                            <?php endif ?>
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="radio" name="sex" value="M" checked> <?= lang('app.male') ?>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="sex" value="F"> <?= lang('app.female') ?>
                                    </div>
                                </div>
                            </fieldset>

                            <button type="submit" class="btn btn-info btn-lg btn-block mb-2"><?= lang('app.register') ?></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>