<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="content-header"></div>
<section class="content">
  <div class="container-fluid">
    <?= form_open_multipart('product/edit/'.$pr['id']) ?>
      <div class="row">
          <section class="col-12">
            <div class="card">
              <div class="card-header">
                <h3>
                  <b><?= lang('app.edit') ?> <?= lang('app.products') ?></b>
                  <div class="float-right col-4">
                  <select name="featured" class="custom-select">
                    <?php for ($i=0; $i < 9; $i++) : ?>
                      <option value="<?= $i ?>" <?= ($i+1==$pr['featured']?'selected':'') ?>><?= $i==0?lang('app.notFeatured'):lang('app.featured').' - '.$i ?></option>
                    <?php endfor ?>
                  </select>
                  </div>
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                      <label for="exampleInputBorder"><?= lang('app.category') ?></label>
                      <select name="cat_id" class="custom-select">
                        <?php foreach ($cat as $key => $dt) : ?>
                          <option value="<?= $dt['id'] ?>" <?= ($dt['id']==$pr['cat_id']?'selected':'') ?>><?= $dt['name'] ?></option>
                        <?php endforeach ?>
                      </select>
                    <div class="form-group">
                      <label for="exampleInputBorder"> <?= lang('app.productName') ?></label>
                      <input type="text" class="form-control" name="name" value="<?= $pr['name'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBorder"> <?= lang('app.productPrice') ?></label>
                      <input type="number" class="form-control" name="price" value="<?= $pr['price'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBorder"> <?= lang('app.measure') ?></label>
                      
                      <input type="text" class="form-control" name="measure" value="<?= $pr['measure'] ?>">
                    </div>
                      <div class="form-group">
                        <label for="exampleInputBorder"><?= lang('app.img') ?></label>
                        <input type="file" class="form-control" name="pr_img">
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-1">
                          <button type="submit" class="btn btn-primary btn-block"><?= lang('app.submit') ?></button>
                        </div>
                        <div class="col-md-6">
                          <a href="<?= base_url('product/delete/'.$pr['id']) ?>" class="btn btn-danger btn-block"><?= lang('app.delete') ?></a>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
          </section>  
      </div>
    </form>
    <div class="card card-success">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="card mb-2 bg-gradient-dark">
                  <img class="card-img-top" src="<?= base_url($pr['pr_img']) ?>" alt="product-1<?= $pr['id'] ?>">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <span class="badge badge-warning"><?= $pr['updated_at'] ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
  </div>
</section>  
<?= $this->endsection() ?>