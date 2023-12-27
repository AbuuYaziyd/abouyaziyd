<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="content-header"></div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
        <section class="col">
          <div class="card">
            <div class="card-header">
              <h3><b><?= lang('app.add') ?> <?= lang('app.category') ?></b> <a href="<?= base_url('cat') ?>" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-left"></i> <?= lang('app.back') ?></a></h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <?= form_open('cat/create') ?>
                    <div class="form-group">
                      <label for="exampleInputBorder"><?= lang('app.name') ?></label>
                      <input type="text" class="form-control" name="name" placeholder="<?= lang('app.name') ?>" value="<?= old('name') ?>">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputBorder"><?= lang('app.desc') ?></label>
                        <textarea name="info" class="form-control"></textarea>
                      </div>
                    <button type="submit" class="btn btn-primary btn-block"><?= lang('app.submit') ?></button>
                  </form>
                </div>
              </div>
          </div>
        </section>    
    </div>
  </div>
</section>
<?= $this->endsection() ?>