<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="content-header"></div>
<section class="content">
  <div class="container-fluid">
    <?= form_open('duroos/update') ?>
    <div class="row">
      <section class="col-12">
        <div class="card">
          <div class="card-header">
            <h3><b><?= lang('app.edit') ?> <?= lang('app.projects') ?></b></h3>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4 mb-2">
                <label for="exampleInputBorder">Jina la Darsa</label>
                <input type="text" class="form-control" name="name" value="<?= $darsa['name'] ?>">
              </div>
              <div class="col-md-4">
                <label for="exampleInputBorder">Aina</label>
                <select name="type" class="custom-select">
                  <?php foreach ($type as $dt) : ?>
                    <option value="<?= $dt['type'] ?>" <?= ($dt['type'] == $darsa['type'] ? 'selected' : '') ?>><?= $dt['type'] ?></option>
                  <?php endforeach ?>
                </select>
              </div>
              <div class="col-md-4 mb-2">
                <label for="exampleInputBorder"> <?= lang('app.projectLink') ?></label>
                <input type="text" name="link" class="form-control" value="<?= $darsa['link'] ?>">
              </div>
              <div class="col-12 mb-2">
                <label for="exampleInputBorder"> <?= lang('app.projectInfo') ?></label>
                <textarea name="info" rows="10" class="form-control"><?= $darsa['info'] ?></textarea>
              </div>
            </div>
          </div>
          <input type="hidden" name="id" value="<?= $darsa['id'] ?>">
          <div class="row m-2">
            <div class="col-md-6 mb-1">
              <button type="submit" class="btn btn-primary btn-block btn-lg"><?= lang('app.submit') ?></button>
            </div>
            <div class="col-md-6">
              <a href="<?= base_url('duroos/delete/' . $darsa['id']) ?>" class="btn btn-danger btn-block btn-lg delete"><?= lang('app.delete') ?></a>
            </div>
          </div>
        </div>
    </div>
</section>
</div>
</form>
</section>
<script>
  $('.delete').on('click', function(e) {
    e.preventDefault();
    url = $(this).attr('href');
    Swal.fire({
      title: '<?= lang('app.doYouReallyWantToDelete') ?>',
      text: '<?= lang('app.afterDeleteItsGone') ?>',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: '<?= lang('app.yes') ?>',
      cancelButtonText: '<?= lang('app.no') ?>',
    }).then(function(result) {
      if (result.value) {
        window.location.href = url;
      }
    })
  });
</script>
<?= $this->endsection() ?>