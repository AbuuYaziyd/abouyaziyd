<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<div class="content-header"></div>
<section class="content">
  <div class="container-fluid">
    <?= form_open('cat/edit/'.$cat['id']) ?>
      <div class="row">
          <section class="col-12">
            <div class="card">
              <div class="card-header">
                <h3><b><?= lang('app.edit') ?> <?= lang('app.category') ?></b></h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                      <div class="form-group">
                        <label for="exampleInputBorder"><?= lang('app.name') ?></label>
                        <input type="text" class="form-control" name="name" value="<?= $cat['name'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputBorder"><?= lang('app.desc') ?></label>
                        <textarea name="info" class="form-control"><?= $cat['info'] ?></textarea>
                      </div>
                      <div class="row">
                        <div class="col-md-6 mb-1">
                          <button type="submit" class="btn btn-primary btn-block"><?= lang('app.submit') ?></button>
                        </div>
                        <div class="col-md-6">
                          <a href="<?= base_url('cat/delete/'.$cat['id']) ?>" class="btn btn-danger btn-block delete"><?= lang('app.delete') ?></a>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
          </section>  
      </div>
    </form>
  </div>
</section>
<script>
    $('.delete').on('click', function (e) {
        e.preventDefault();
        url = $(this).attr('href');
        Swal.fire({
            title: "<?= lang('app.delete') ?>",
            text: "<?= lang('app.sureDelete') ?>",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "<?= lang('app.yes') ?>",
            cancelButtonText: "<?= lang('app.no') ?>",
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger ml-1',
            buttonsStyling: false,
        }).then(function (result) {
            if (result.value) {
                window.location.href = url;
            }
        })
    });
</script>
<?= $this->endsection() ?>