<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= lang('app.appName') ?> | 404 Kurasa Haijapatikana!</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>">
</head>
<body class="hold-transition layout-top-nav">
	<div class="wrapper">
		<div class="content-wrapper">
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="error-page col-12 px-5 py-5">
							<div class="error-content offset-2 px-5 py-5">
								<h1 class="headline text-danger display-1"> 404</h1>
								<h3><i class="fas fa-exclamation-triangle text-danger"></i> <b>Oops!</b> Ukurasa Haupo.</h3>
								<p>
									<?php if (!empty($message) && $message !== '(null)') : ?>
										<?= nl2br(esc($message)) ?>
									<?php else : ?>
										Samahani! Inavoonyesha kurasa unayoitafuta Haipo!
									<?php endif ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
  <footer class="main-footer">
    <div class="d-none d-sm-inline-block" style="text-align: center;">
      <b>Error: 404</b><strong> Kurasa Haijapatikana</strong>
    </div>
  </footer>
  <footer class="main-footer">
    <strong><?= lang('app.copyrights') ?> &copy; <?= date('Y') ?> <a href="<?= base_url() ?>"><?= lang('app.appName') ?></a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b><?= lang('app.createdBy') ?>: </b><strong><a href="http://abouyaziyd.rf.gd" target="_blank">abouyaziyd</a></strong>
    </div>
  </footer>
	</div>
	<script src="<?= base_url('plugins/jquery/jquery.min.js') ?>"></script>
	<script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('asset/js/adminlte.min.js') ?>"></script>
	<script src="<?= base_url('asset/js/demo.js') ?>"></script>
</body>

</html>