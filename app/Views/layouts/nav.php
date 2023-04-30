
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('') ?>" class="nav-link" target="_blank"><?= lang('app.website') ?></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-danger navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->
      
    <div class="user-panel d-flex">
      <div class="image mr-1">
        <img src="https://ui-avatars.com/api/?name=<?= session('name') ?>&&rou&&background=random" class="img-circle elevation-1" alt="avatar">
      </div>
    </div>
    <div class="info">
      <div class="btn-group">
        <li class="nav-item dropdown">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><?= session('name') ?></a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <li>
              <a href="<?= base_url('user/show/' . session('id')) ?>" class="dropdown-item">
              <i class="fas fa-universal-access"></i> Wasifu</a>
            </li>
            <li>
              <a href="<?= base_url('user/edit/' . session('id')) ?>" class="dropdown-item">
              <i class="fas fa-wrench"></i> Edit Wasifu </a>
            </li>
            <li class="dropdown-divider"></li>
            <li><a href="<?= base_url('logout') ?>" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Ondoka</a></li>
          </ul>
        </li>
      </div>
    </div>
    </ul>
  </nav>