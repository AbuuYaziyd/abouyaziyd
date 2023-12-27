<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="content-header"></div>
<section class="content">
  <div class="container-fluid">
    <?= form_open_multipart('project/edit/'.$pr['id']) ?>
      <div class="row">
          <section class="col-12">
            <div class="card">
              <div class="card-header">
                <h3><b><?= lang('app.edit') ?> <?= lang('app.projects') ?></b></h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                      <label for="exampleInputBorder"><?= lang('app.project') ?></label>
                      <select name="cat_id" class="custom-select">
                        <?php foreach ($cat as $key => $dt) : ?>
                          <option value="<?= $dt['id'] ?>" <?= ($dt['id']==$pr['cat_id']?'selected':'') ?>><?= $dt['name'] ?></option>
                        <?php endforeach ?>
                      </select>
                    <div class="form-group">
                      <label for="exampleInputBorder"> <?= lang('app.projectName') ?></label>
                      <input type="text" class="form-control" name="name" value="<?= $pr['name'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBorder"> <?= lang('app.projectInfo') ?></label>
                      <textarea name="info" class="form-control"><?= $pr['info'] ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBorder"> <?= lang('app.projectLink') ?></label>
                      <input type="text" name="link" class="form-control" value="<?= $pr['link'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputBorder"><?= lang('app.status') ?></label>
                      <select name="status" class="custom-select">
                        <option selected disabled><?= lang('app.select') ?></option>
                        <option value="done" <?= $pr['status']=='done'?'selected':'' ?>><?= lang('app.done') ?></option>
                        <option value="notDone" <?= $pr['status']=='notDone'?'selected':'' ?>><?= lang('app.notDone') ?></option>
                      </select>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputBorder"><?= lang('app.image') ?></label>
                        <input type="file" class="form-control" name="pr_img">
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-1">
                          <button type="submit" class="btn btn-primary btn-block"><?= lang('app.submit') ?></button>
                        </div>
                        <div class="col-md-6">
                          <a href="<?= base_url('project/delete/'.$pr['id']) ?>" class="btn btn-danger btn-block"><?= lang('app.delete') ?></a>
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
                  <img class="card-img-top" src="<?= base_url($pr['pr_img']) ?>" alt="project-<?= $pr['name'] ?>">
                  <!-- <div class="card-img-overlay d-flex flex-column justify-content-end">
                    <span class="badge badge-warning"><?= $pr['updated_at'] ?></span>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div> 
  </div>
</section>
<?= $this->endsection() ?>