<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <!-- Portfolio Section-->
    <?= $this->include('home/categories') ?>
    <!-- About Section-->
    <?= $this->include('home/about') ?>
    <!-- Contact Section-->
    <?= $this->include('home/contact') ?>

<?= $this->endSection() ?>