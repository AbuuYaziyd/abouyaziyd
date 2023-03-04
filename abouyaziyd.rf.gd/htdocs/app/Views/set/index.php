<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?= $title ?></h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row mb-2">
          <section class="col">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b><?= lang('app.infoWebsite') ?> </b></h3>
                <div class="card-tools">
                <span title="3 New Messages" class="badge badge-primary">4</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <?= form_open('set/infos/'.$footer['id']) ?>
                  <div class="row">
                    <div class="col mx-3">
                        <input class="mt-1 form-control" name="text" value="<?= $footer['text'] ?>">
                        <input class="mt-1 form-control" name="link" value="<?= $footer['link'] ?>">
                        <input class="mt-1 form-control" name="button" value="<?= $footer['button'] ?>">
                        <input class="mt-1 form-control" name="info" value="<?= $footer['info'] ?>">
                        <input class="mt-1 form-control" name="img" value="<?= $footer['img'] ?>">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-block"><?= lang('app.submit') ?></button>
                </div>
              </form>
            </div>
          </section>      
        </div><hr>
        <div class="row mb-2">
          <?php foreach ($corousel as $key => $dt) : ?>
            <section class="col-md-4">
              <div class="card direct-chat direct-chat-primary collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"><b><?= lang('app.corousel') ?> </b></h3>
                  <div class="card-tools">
                  <span title="3 New Messages" class="badge badge-primary"><?= $key+1 ?></span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body" style="display: none;">
                  <?= form_open_multipart('set/corousel/'.$dt['id']) ?>
                    <div class="row">
                      <div class="col mx-3">
                          <input class="mt-1 form-control" name="title" value="<?= $dt['text'] ?>">
                          <input class="mt-1 form-control" name="info" value="<?= $dt['info'] ?>">
                          <input type="file" name="img" id="img" class="form-control my-1">
                          <img src="<?= base_url($dt['img']) ?>" id="show_img" alt="image" height="150px">
                          <span class="badge badge-info mt-1"><?= $dt['updated_at'] ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block"><?= lang('app.submit') ?></button>
                  </div>
                </form>
              </div>
            </section>
          <?php endforeach ?>       
        </div><hr>
        <div class="row mb-2">
          <?php foreach ($service as $key => $dt) : ?>
            <section class="col-md-3">
              <div class="card direct-chat direct-chat-primary collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"><b><?= lang('app.service') ?> </b></h3>
                  <div class="card-tools">
                  <span title="3 New Messages" class="badge badge-warning"><?= $key+1 ?></span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body" style="display: none;">
                  <?= form_open_multipart('set/service/'.$dt['id']) ?>
                    <div class="row">
                      <div class="col mx-3">
                          <input class="mt-1 form-control" name="title" value="<?= $dt['text'] ?>">
                          <input class="mt-1 form-control" name="info" value="<?= $dt['info'] ?>">
                          <span class="badge badge-info mt-1"><?= $dt['updated_at'] ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block"><?= lang('app.submit') ?></button>
                  </div>
                </form>
              </div>
            </section>
            <?php endforeach ?>       
        </div><hr>
        <div class="row mb-2">
          <?php foreach ($bestPartner as $key => $dt) : ?>
            <section class="col-md-6">
              <div class="card direct-chat direct-chat-secondary collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"><b><?= lang('app.partner') ?> </b></h3>
                  <div class="card-tools">
                  <span title="3 New Messages" class="badge badge-secondary">#<?= $key+1 ?></span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body" style="display: none;">
                  <?= form_open_multipart('set/partner/'.$dt['id']) ?>
                    <div class="row">
                      <div class="col mx-3">
                          <input class="mt-1 form-control" name="text" value="<?= $dt['text'] ?>">
                          <input class="mt-1 form-control" name="link" value="<?= $dt['link'] ?>">
                          <input type="file" name="img" id="img" class="form-control my-1">
                          <img src="<?= base_url($dt['img']) ?>" id="show_img" alt="image" height="150px">
                          <span class="badge badge-info mt-1"><?= $dt['updated_at'] ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block"><?= lang('app.submit') ?></button>
                  </div>
                </form>
              </div>
            </section>
          <?php endforeach ?>  
          <?php foreach ($partner as $key => $dt) : ?>
            <section class="col-md-4">
              <div class="card direct-chat direct-chat-secondary collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"><b><?= lang('app.partner') ?> </b></h3>
                  <div class="card-tools">
                  <span title="3 New Messages" class="badge badge-secondary">#<?= $key+3 ?></span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body" style="display: none;">
                  <?= form_open_multipart('set/partner/'.$dt['id']) ?>
                    <div class="row">
                      <div class="col mx-3">
                          <input class="mt-1 form-control" name="text" value="<?= $dt['text'] ?>">
                          <input class="mt-1 form-control" name="link" value="<?= $dt['link'] ?>">
                          <input type="file" name="img" id="img" class="form-control my-1">
                          <img src="<?= base_url($dt['img']) ?>" id="show_img" alt="image" height="60px">
                          <span class="badge badge-info mt-1"><?= $dt['updated_at'] ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block"><?= lang('app.submit') ?></button>
                  </div>
                </form>
              </div>
            </section>
          <?php endforeach ?>       
        </div><hr>
        <div class="row mb-2">
          <?php foreach ($socials as $key => $dt) : ?>
            <section class="col-md-4">
              <div class="card direct-chat direct-chat-primary collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"><b><?= ucfirst($dt['text']) ?> </b></h3>
                  <div class="card-tools">
                  <span title="3 New Messages" class="badge badge-primary"><?= $key+1 ?></span>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body" style="display: none;">
                  <?= form_open('set/soci/'.$dt['id']) ?>
                    <div class="row">
                      <div class="col mx-3">
                          <input class="mt-1 form-control" name="link" value="<?= $dt['link'] ?>">
                          <span class="badge badge-info mt-1"><?= $dt['updated_at'] ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block"><?= lang('app.submit') ?></button>
                  </div>
                </form>
              </div>
            </section>
          <?php endforeach ?>       
        </div><hr>
      </div>
    </section>
 
<script>
    $(document).ready(function () {
        $('.#img1').change(function (e) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#show_img1').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>   
<?= $this->endsection() ?>