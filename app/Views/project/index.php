<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="content-header"></div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
        <section class="col">
          <div class="card">
            <div class="card-header">
              <h3><b><?= lang('app.projects') ?></b> <a href="<?= base_url('project/add') ?>" class="btn btn-success btn-sm float-right"><i class="fas fa-plus-circle"></i> <?= lang('app.add') ?></a></h3>
            </div>
            <div class="card-body">
            <table class="table table-bordered table-striped dtTable">
              <thead>
                <tr>
                  <th>#</th>
                  <th><?= lang('app.project') ?></th>
                  <th><?= lang('app.type') ?></th>
                  <th><?= lang('app.image') ?></th>
                  <th><?= lang('app.desc') ?></th>
                  <th><?= lang('app.options') ?></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($pr as $key => $dt) : ?>
                  <tr>
                    <td><?= $key+1 ?></td>
                    <td><a href="<?= $dt['link']??'#' ?>" target="_blank" class="badge badge-<?= $dt['status']=='done'?'success':'secondary' ?>"><?= $dt['name'] ?></a></td>
                    <td><?= $p->cat($dt['cat_id'])['name'] ?></td>
                    <td><img class="direct-chat-img" src="<?= $dt['pr_img'] ?>" alt="category-<?= $key+1 ?>"></td>
                    <td><?= substr($dt['info'], 0, 30) ?>...</td>
                    <td>
                      <a href="<?= base_url("project/show/" . $dt['id']) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> <?= lang('app.edit') ?></a>
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