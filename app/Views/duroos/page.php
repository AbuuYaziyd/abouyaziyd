<?= $this->extend('layouts/app') ?>

<?= $this->section('bread') ?>
<ol class="breadcrumb float-sm-right">
  <li class="breadcrumb-item"><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
  <li class="breadcrumb-item active">Duroos</li>
</ol>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<section class="content">
  <?php foreach ($categories as $ct) : ?>
    <?php $darsa = $drs->select('type')->distinct()->findAll(); ?>
    <div class="card direct-chat direct-chat-primary">
      <div class="card-header">
        <h3 class="card-title"><b><?= $ct['name'] ?> -
            <span class="badge badge-primary"><?= count($darsa) ?></span></b></h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="row m-2">
          <?php foreach ($darsa as $dr) : ?>
            <div class="col-12 col-sm-6 col-md-3">
              <a href="<?= base_url('duroos/type/' . $dr['type']) ?>">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-microphone"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text"><?= $dr['type'] ?></span>
                    <span class="info-box-number"><?= count($drs->darsa($dr['type'])) ?></span>
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach ?>
        </div>
        <!-- <div class="card-footer">
          <form action="#" method="post">
            <div class="input-group">
              <input type="text" name="message" placeholder="Type Message ..." class="form-control">
              <span class="input-group-append">
                <button type="button" class="btn btn-primary">Send</button>
              </span>
            </div>
          </form>
        </div> -->
      </div>
    </div>
  <?php endforeach ?>
</section>
<?= $this->endsection() ?>