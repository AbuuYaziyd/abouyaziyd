<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<!-- Master-->
<?= $this->include('home/master') ?>
<!-- Works Section-->
<?= $this->include('home/works') ?>
<!-- About Section-->
<?= $this->include('home/about') ?>
<!-- Contact Section-->
<?= $this->include('home/contact') ?>

<?= $this->endSection() ?>