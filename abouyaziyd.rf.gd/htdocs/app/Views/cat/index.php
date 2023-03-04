<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="content-header"></div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
        <section class="col">
          <div class="card">
            <div class="card-header">
              <h3><b><?= lang('app.categories') ?></b> <a href="<?= base_url('cat/add') ?>" class="btn btn-success float-right"><?= lang('app.add') ?></a></h3>
            </div>
            <div class="card-body">
            <table class="table table-bordered table-striped dtTable">
              <thead>
                <tr>
                  <th>#</th>
                  <th><?= lang('app.category') ?></th>
                  <th><?= lang('app.image') ?></th>
                  <th><?= lang('app.desc') ?></th>
                  <th><?= lang('app.edit') ?></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($cat as $key => $dt) : ?>
                  <tr>
                    <td><?= $key+1 ?></td>
                    <td><span class="badge badge-info"><?= $dt['name'] ?></span></td>
                    <td><img class="direct-chat-img" src="<?= $dt['cat_img'] ?>" alt="message user image"></td>
                    <td><?= substr($dt['info'], 0, 30) ?>...</td>
                    <td>
                      <a href="<?= base_url("cat/show/" . $dt['id']) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> <?= lang('app.edit') ?></a>
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