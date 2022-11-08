<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
    <main>
        <?= $this->include('home/master') ?>
        <?= $this->include('home/about') ?>
        <?= $this->include('home/services') ?>
        <?= $this->include('home/project') ?>
        <?= $this->include('home/contact') ?>
    </main>
<?= $this->endSection() ?>