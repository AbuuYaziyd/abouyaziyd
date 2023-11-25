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
                            <?= form_open('register') ?>

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

                            <label><?= lang('app.email') ?></label>
                            <?php if ($validation->getError('email')) : ?>
                                <span class="badge badge-danger"> <?= $errors = $validation->getError('email') ?></span>
                            <?php endif ?>
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                <input type="email" class="form-control" name="email" placeholder="<?= lang('app.email') ?>">
                                <div class="form-control-position">
                                    <i class="la la-envelope"></i>
                                </div>
                            </fieldset> 

                            <label><?= lang('app.phone') ?></label>
                            <?php if ($validation->getError('phone')) : ?>
                                <span class="badge badge-danger"> <?= $errors = $validation->getError('phone') ?></span>
                            <?php endif ?>
                            <fieldset class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="255683123456">
                            </fieldset>

                            <label><?= lang('app.dob') ?></label>
                            <?php if ($validation->getError('dob')) : ?>
                                <span class="badge badge-danger"> <?= $errors = $validation->getError('dob') ?></span>
                            <?php endif ?>
                            <fieldset class="form-group position-relative has-icon-left mb-1">
                                <input type="date" class="form-control" name="dob" placeholder="<?= lang('app.dob') ?>">
                                <div class="form-control-position">
                                    <i class="la la-calendar"></i>
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

                            <label><?= lang('app.city') ?></label>
                            <?php if ($validation->getError('city')) : ?>
                                <span class="badge badge-danger"> <?= $errors = $validation->getError('city') ?></span>
                            <?php endif ?>
                            <fieldset class="form-group position-relative has-icon-left mb-2">
                                <select class="custom-select form-control" name="city">
                                    <option selected disabled><?= lang('app.choose') ?></option>
                                    <?php foreach ($city as $key => $data) : ?>
                                        <option value="<?= $data['id'] ?>"><?= strtoupper($data['name']) ?></option>
                                    <?php endforeach ?>
                                </select>
                                <div class="form-control-position">
                                    <i class="la la-flag"></i>
                                </div>
                            </fieldset>

                            <button type="submit" class="btn btn-info btn-lg btn-block"><?= lang('app.send') ?></button>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-center"><?= lang('app.doyouhaveaccount') ?> <a href="<?= base_url('login') ?>" class="card-link"><?= lang('app.login') ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection() ?>