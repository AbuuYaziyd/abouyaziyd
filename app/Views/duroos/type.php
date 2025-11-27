<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <section class="col">
        <div class="card">
          <div class="card-header">
            <h3><b><?= $type['name'] ?></b> | <?= count($duroos) ?> <a href="<?= base_url('duroos/add/' . $type['id']) ?>" class="btn btn-success btn-sm float-right"><i class="fas fa-plus-circle"></i> <?= lang('app.add') ?></a></h3>
          </div>
          <div class="card-body">
            <table class="table table-bordered table-striped dtTable">
              <thead>
                <tr>
                  <th><?= lang('app.duroos') ?></th>
                  <th><?= lang('app.desc') ?></th>
                  <th><?= lang('app.options') ?></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($duroos as $dt) : ?>
                  <tr>
                    <td><a href="<?= base_url('duroos/view/' . $dt['id']) ?>" target="_blank" class="badge badge-secondary"><?= $dt['name'] ?></a></td>
                    <td><?= substr($dt['info'], 0, 30) ?>...</td>
                    <td>
                      <a href="<?= base_url("duroos/edit/" . $dt['id']) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> <?= lang('app.edit') ?></a>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
      </section>
    </div>
  </div>
</section>
<?= $this->endsection() ?>
<?= $this->include('layouts/table') ?>