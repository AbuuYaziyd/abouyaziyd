<?= $this->extend('layouts/email') ?>

<?= $this->section('content') ?>

    <div>
        <h2><b>Karibu, <?= APP_NAME ?></h2></b>
        <h4>ASSALAAMU ALAIKUM WARAHMATULLAHI WABARAKAATUH</h4>
        <h4>Umefanikiwa kujisajili katika website yetu - <a href="<?= base_url() ?>"><?= APP_NAME ?></a> - na haya ni baadhi ya maelezo yako tuliyoyahifadhi katika Mauqi' yetu</h4><br>
        <h4>
            <b>
                Jina la Mtumiaji: <?= APP_NAME ?><br>
                Jina la Kamili: <?= APP_NAME ?><br>
                Email: <a href="mailto:<?= APP_NAME ?>"><?= APP_NAME ?></a><br>
                Password yako: <?= APP_NAME ?><br>
                Mauqi' yetu: <a href="<?= base_url() ?>" target="_blank"><?= APP_NAME ?></a><br>
            </b>
        </h4>
        <h4>Sasa unaweza kuingia kwenye website yetu kwa kutumia email yako pamoja na password</h4>
        <div class="col-12 d-flex justify-content-center mt-2">
            <a href="<?= base_url('login') ?>" target="_blank" class="btn btn-primary">Ingia</a>
        </div>
    </div>
<?= $this->endSection() ?>