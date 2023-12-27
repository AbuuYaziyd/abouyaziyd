<?= $this->extend('layouts/app') ?>
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
                <h3 class="card-title"><b><?= lang('app.infoWebsite') ?> </b>
                <span class="badge badge-primary">4</span></h3>
              </div>
            </div>
          </section>      
        </div>
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