<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="content-header"></div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
        <section class="col">
          <div class="card">
            <div class="card-header">
              <h3><b><?= lang('app.products') ?></b> <a href="<?= base_url('product/add') ?>" class="btn btn-success float-right"><?= lang('app.add') ?></a></h3>
            </div>
            <div class="card-body">
            <table class="table table-bordered table-striped dtTable">
              <thead>
                <tr>
                  <th>#</th>
                  <th><?= lang('app.product') ?></th>
                  <th><?= lang('app.price') ?></th>
                  <th><?= lang('app.featured') ?></th>
                  <th><?= lang('app.edit') ?></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($pr as $key => $dt) : ?>
                  <tr>
                    <td><?= $key+1 ?></td>
                    <td><?= $dt['name'] ?></td>
                    <td><?= $dt['price'] ?> TSH<?= $dt['measure'] ?></td>
                    <td><span class="badge badge-<?= $dt['featured']>0?'info':'danger' ?>"><?= $dt['featured']>0?lang('app.featured'):lang('app.notFeatured') ?></span></td>
                    <td>
                      <a href="<?= base_url("product/show/" . $dt['id']) ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i> <?= lang('app.edit') ?></a>
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