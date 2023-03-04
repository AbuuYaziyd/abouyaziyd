<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="content-header"></div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
        <section class="col">
          <div class="card">
            <div class="card-header">
              <h3><b><?= lang('app.add') ?> <?= lang('app.category') ?></b></h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <?= form_open_multipart('cat/create') ?>
                    <div class="form-group">
                      <label for="exampleInputBorder"><?= lang('app.name') ?></label>
                      <input type="text" class="form-control" name="name" placeholder="<?= lang('app.name') ?>" value="<?= old('name') ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBorder"><?= lang('app.image') ?></label>
                      <input type="file" class="form-control" name="cat_img" placeholder="<?= lang('app.image') ?>" value="<?= old('featured') ?>">
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