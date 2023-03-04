<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div class="content-header"></div>
<section class="content">
  <div class="container-fluid">
    <?= form_open_multipart('cat/edit/'.$cat['id']) ?>
      <div class="row">
          <section class="col-12">
            <div class="card">
              <div class="card-header">
                <h3>
                  <b><?= lang('app.edit') ?> <?= lang('app.category') ?></b>
                  <div class="float-right col-4">
                  <select name="featured" class="custom-select">
                    <?php for ($i=0; $i < 7; $i++) : ?>
                      <option value="<?= $i ?>" <?= ($i+1==$cat['featured']?'selected':'') ?>><?= $i==0?lang('app.notFeatured'):lang('app.featured').' - '.$i ?></option>
                    <?php endfor ?>
                  </select>
                  </div>
                </h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                      <div class="form-group">
                        <label for="exampleInputBorder"><?= lang('app.name') ?></label>
                        <input type="text" class="form-control" name="name" value="<?= $cat['name'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputBorder"><?= lang('app.img') ?></label>
                        <input type="file" class="form-control" name="cat_img">
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-1">
                          <button type="submit" class="btn btn-primary btn-block"><?= lang('app.submit') ?></button>
                        </div>
                        <div class="col-md-6">
                          <a href="<?= base_url('cat/delete/'.$cat['id']) ?>" class="btn btn-danger btn-block"><?= lang('app.delete') ?></a>
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
                  <img class="card-img-top" src="<?= base_url($cat['cat_img']) ?>" alt="category-<?= $cat['id'] ?>">
                  <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <span class="badge badge-warning"><?= $cat['updated_at'] ?></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
  </div>
</section>  
<?= $this->endsection() ?>