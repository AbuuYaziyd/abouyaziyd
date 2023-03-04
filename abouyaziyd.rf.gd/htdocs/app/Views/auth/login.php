<?= $this->extend('layouts/auth') ?>

<?= $this->section('content') ?>
        <div class="social-auth-links text-center mt-2 mb-3">
            <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google mr-2"></i> Google
            </a>
        </div><hr>
<?php $validation = \Config\Services::validation() ?>
    <?= form_open('login') ?>
        <label><b><?= lang('app.id') ?>/<?= lang('app.email') ?></b></label>
            <?php if ($validation->getError('id')) : ?>
                <span class="badge badge-danger"> <?= $errors = $validation->getError('id') ?></span>
            <?php endif ?>
            <div class="input-group mb-3">
            <input type="text" class="form-control" name="id" placeholder="<?= lang('app.id') ?>/<?= lang('app.email') ?>">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
            </div>
        <label><b><?= lang('app.password') ?></b></label>
        <?php if ($validation->getError('password')) : ?>
            <span class="badge badge-danger"> <?= $errors = $validation->getError('password') ?></span>
        <?php endif ?>
        <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="<?= lang('app.password') ?>">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <a href="<?= base_url('recover') ?>"><?= lang('app.forgetPass') ?></a>
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block"><?= lang('app.login') ?></button>
            </div>
        </div>
    </form>
<?= $this->endSection() ?>