<?php

use App\Models\Category;

$cat = new Category();
$drs_count = $cat->where('type', 'duroos')->countAllResults();
// dd($drs_count);

?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="<?= base_url() ?>" class="brand-link">
    <img src="<?= base_url('app-assets/logo.svg') ?>" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"><b><?= lang('app.appName') ?></b></span>
  </a>

  <div class="sidebar">
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?= base_url('user') ?>" class="<?= $title == lang('app.dashboard') ? 'active' : '' ?> nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              <?= lang('app.dashboard') ?>
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <?php if (session('role') == 'admin') : ?>
          <li class="nav-item">
            <a href="<?= base_url('set') ?>" class="<?= $title == lang('app.settings') ? 'active' : '' ?> nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                <?= lang('app.settings') ?>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('cat') ?>" class="<?= $title == lang('app.categories') ? 'active' : '' ?> nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                <?= lang('app.categories') ?>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('project') ?>" class="<?= $title == lang('app.projects') ? 'active' : '' ?> nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>
                <?= lang('app.projects') ?>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('duroos/page') ?>" class="<?= $title == lang('app.duroos') ? 'active' : '' ?> nav-link">
              <i class="nav-icon fas fa-microphone"></i>
              <p>
                <?= lang('app.duroos') ?>
                <span class="badge badge-info right"><?= $drs_count ?></span>
              </p>
            </a>
          </li>
        <?php endif ?>
        </li>
      </ul>
    </nav>
  </div>
</aside>