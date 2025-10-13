<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="content-header"></div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
        <section class="col">
          <div class="card">
            <div class="card-header">
              <h3><b>Ongeza Darsa</b></h3>
            </div>
            <div class="card-body">
                <?= form_open_multipart('duroos/create') ?>
                  <div class="row">
                    <div class="col-md-4 mb-2">
                      <label for="exampleInputBorder"> <?= lang('app.name') ?></label>
                      <input type="text" class="form-control" name="name" placeholder="<?= lang('app.name') ?>" value="<?= old('name') ?>">
                    </div>
                    <div class="col-md-4 mb-2">
                      <label for="exampleInputBorder"><?= lang('app.category') ?></label>
                      <select name="type" class="custom-select">
                        <?php foreach ($types as $dt) : ?>
                          <option value="<?= $dt['type'] ?>" <?= $type == $dt['type'] ? 'selected' : '' ?>><?= $dt['type'] ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                    <div class="col-md-4 mb-2">
                      <label for="exampleInputBorder"> <?= lang('app.link') ?></label>
                      <input type="text" class="form-control" name="link" placeholder="<?= lang('app.link') ?>" value="<?= old('link') ?>">
                    </div>
                    <div class="col-md-12 mb-2">
                      <label for="exampleInputBorder">Info</label>
                      <textarea name="info" rows="10" class="form-control" placeholder="Info"></textarea>
                    </div>
                    <input type="hidden" name="category_id" value="<?= $darsa['category_id'] ?>">
                    <button type="submit" class="btn btn-primary btn-lg btn-block"><?= lang('app.submit') ?></button>
                </div>
              </form>
          </div>
        </section>    
    </div>
  </div>
</section>
<?= $this->endsection() ?>