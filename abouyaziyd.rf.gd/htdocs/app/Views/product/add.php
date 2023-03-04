<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="content-header"></div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
        <section class="col">
          <div class="card">
            <div class="card-header">
              <h3><b><?= lang('app.add') ?> <?= lang('app.product') ?></b></h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <?= form_open_multipart('product/create') ?>
                    <div class="form-group">
                      <label for="exampleInputBorder"><?= lang('app.category') ?></label>
                      <select name="cat_id" class="custom-select">
                        <option selected disabled><?= lang('app.select') ?></option>
                        <?php foreach ($cat as $key => $dt) : ?>
                          <option value="<?= $dt['id'] ?>"><?= $dt['name'] ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBorder"> <?= lang('app.productName') ?></label>
                      <input type="text" class="form-control" name="name" placeholder="<?= lang('app.name') ?>" value="<?= old('name') ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBorder"> <?= lang('app.productPrice') ?></label>
                      <input type="number" class="form-control" name="price" placeholder="<?= lang('app.price') ?>" value="<?= old('price') ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBorder"> <?= lang('app.measure') ?></label>
                      
                      <input type="text" class="form-control" name="measure" placeholder="<?= lang('app.measure') ?>" value="<?= old('measure') ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBorder"><?= lang('app.img') ?></label>
                      <input type="file" class="form-control" name="pr_img" placeholder="<?= lang('app.img') ?>" value="<?= old('featured') ?>">
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