<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="content-header"></div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
        <section class="col">
          <div class="card">
            <div class="card-header">
              <h3><b><?= lang('app.add') ?> <?= lang('app.project') ?></b></h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <?= form_open_multipart('project/create') ?>
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
                      <label for="exampleInputBorder"> <?= lang('app.projectName') ?></label>
                      <input type="text" class="form-control" name="name" placeholder="<?= lang('app.name') ?>" value="<?= old('name') ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBorder"> <?= lang('app.projectLink') ?></label>
                      <input type="text" class="form-control" name="link" placeholder="<?= lang('app.link') ?>" value="<?= old('link') ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBorder"> <?= lang('app.projectInfo') ?></label>
                      <textarea name="info" id="summernote"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBorder"><?= lang('app.status') ?></label>
                      <select name="status" class="custom-select">
                        <option selected disabled><?= lang('app.select') ?></option>
                        <option value="done"><?= lang('app.done') ?></option>
                        <option value="notDone"><?= lang('app.notDone') ?></option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBorder"><?= lang('app.image') ?></label>
                      <input type="file" class="form-control" name="pr_img" placeholder="<?= lang('app.img') ?>" value="<?= old('pr_img') ?>">
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
<?= $this->include('layouts/text') ?>
<?= $this->endsection() ?>