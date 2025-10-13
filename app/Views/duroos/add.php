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
            <?php $validation = \Config\Services::validation() ?>
            <?= form_open('duroos/create') ?>
            <div class="row">
              <div class="col-md-4 mb-2">
                <label> <?= lang('app.name') ?></label>
                <?php if ($validation->getError('name')) : ?>
                  <span class="badge badge-danger"> <?= $errors = $validation->getError('name') ?></span>
                <?php endif ?>
                <input type="text" class="form-control" name="name" placeholder="<?= lang('app.name') ?>" value="<?= old('name') ?>">
              </div>
              <div class="col-md-4 mb-2">
                <label><?= lang('app.category') ?></label>
                <select name="type" class="custom-select">
                  <?php foreach ($types as $dt) : ?>
                    <option value="<?= $dt['type'] ?>" <?= $type == $dt['type'] ? 'selected' : '' ?>><?= $dt['type'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="col-md-4 mb-2">
                <label> <?= lang('app.link') ?></label>
                <?php if ($validation->getError('link')) : ?>
                  <span class="badge badge-danger"> <?= $errors = $validation->getError('link') ?></span>
                <?php endif ?>
                <input type="text" class="form-control" name="link" placeholder="<?= lang('app.link') ?>" value="<?= old('link') ?>">
              </div>
              <div class="col-md-12 mb-2">
                <label>Info</label>
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