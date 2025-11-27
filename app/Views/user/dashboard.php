<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <a href="<?= base_url('set') ?>" style="text-decoration: none;">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog spin"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><b>Settings</b></span>
            </div>
          </div>
        </a>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <a href="<?= base_url('cat') ?>" style="text-decoration: none;">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><b>Categories</b></span>
            </div>
          </div>
        </a>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <a href="<?= base_url('project') ?>" style="text-decoration: none;">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-box"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><b>Projects</b></span>
            </div>
          </div>
        </a>
      </div>
      <div class="col-12 col-sm-6 col-md-3">
        <a href="<?= base_url('duroos/page') ?>" style="text-decoration: none;">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-microphone"></i></span>
            <div class="info-box-content">
              <span class="info-box-text"><b>Duroos</b></span>
            </div>
          </div>
        </a>
      </div>

      <!-- fix for small devices only -->
      <div class="clearfix hidden-md-up"></div>

      <!-- /.col -->
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<?= $this->endsection() ?>