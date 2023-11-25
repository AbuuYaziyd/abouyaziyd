<?= $this->extend('layouts/email') ?>

<?= $this->section('content') ?>

    <div>
        <h2><b><?= lang('app.dearSub') ?></h2></b>
        <h4><?= lang('app.subSuccess') ?><br><?= lang('app.someInfoSub') ?></h4>
        <h4>
            <b>
                <?= lang('app.yourEmail') ?>: <a href="mailto:<?= $email ?>"><?= $email ?></a><br>
                <?= lang('app.ourWebsite') ?>: <a href="<?= base_url() ?>" target="_blank"><?= lang('app.appName') ?></a><br>
            </b>
        </h4>
    </div>
<?= $this->endSection() ?>