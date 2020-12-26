<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title><?= $judul ?></title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

	<!-- Fonts and icons -->
	<script src="<?= base_url('assets/js/plugin/webfont/webfont.min.js') ?>"></script>
	<script>
		WebFont.load({
			google: {
				"families": ["Lato:300,400,700,900"]
			},
			custom: {
				"families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
					"Font Awesome 5 Brands", "simple-line-icons"
				],
				urls: ['<?= base_url('
					assets / css / fonts.min.css ') ?>'
				]
			},
			active: function () {
				sessionStorage.fonts = true;
			}
		});

	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/atlantis.min.css') ?>">
	<link href='https://use.fontawesome.com/releases/v5.8.2/css/all.css' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="<?= base_url('assets/css/notif.css') ?>">

</head>

<body class="login">
	<div class="wrapper wrapper-login">
    	<?php $this->load->view('layouts/2/sweetalert'); ?>
		<div class="container container-login animated fadeIn">
			<form action="<?= base_url('login/validasi'); ?>" method="post">
				<h3 class="text-center">Sign In</h3>
				<div class="login-form">
					<div class="form-group form-floating-label">
						<input id="username" name="username" type="text" class="form-control input-border-bottom"
							required>
						<label for="username" class="placeholder">Username</label>
					</div>
					<div class="form-group form-floating-label">
						<input id="password" name="password" type="password" class="form-control input-border-bottom"
							required>
						<label for="password" class="placeholder">Password</label>
						<div class="show-password">
							<i class="icon-eye"></i>
						</div>
					</div>
					<div class="row form-sub m-0">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="rememberme">
							<label class="custom-control-label" for="rememberme">Remember Me</label>
						</div>
						<!-- <a href="#" class="link float-right">Forget Password ?</a> -->
					</div>
					<div class="form-action mb-3">
						<button type="submit" class="btn btn-primary btn-rounded btn-login">Sign In</button>
					</div>
					<!-- <div class="login-account">
                        <span class="msg">Don't have an account yet ?</span>
                        <a href="#" id="show-signup" class="link">Sign Up</a>
                    </div> -->
				</div>
			</form>
		</div>

		<!--   Core JS Files   -->
		<script src="<?= base_url('assets/js/core/jquery.3.2.1.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/core/popper.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/core/bootstrap.min.js') ?>"></script>

		<!-- jQuery UI -->
		<script src="<?= base_url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') ?>"></script>

		<!-- jQuery Scrollbar -->
		<script src="<?= base_url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') ?>"></script>


		<!-- Chart JS -->
		<script src="<?= base_url('assets/js/plugin/chart.js/chart.min.js') ?>"></script>

		<!-- jQuery Sparkline -->
		<script src="<?= base_url('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') ?>"></script>

		<!-- Chart Circle -->
		<script src="<?= base_url('assets/js/plugin/chart-circle/circles.min.js') ?>"></script>

		<!-- Datatables -->
		<script src="<?= base_url('assets/js/plugin/datatables/datatables.min.js') ?>"></script>

		<!-- Bootstrap Notify -->
		<script src="<?= base_url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') ?>"></script>

		<!-- jQuery Vector Maps -->
		<script src="<?= base_url('assets/js/plugin/jqvmap/jquery.vmap.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') ?>"></script>

		<!-- Sweet Alert -->
		<script src="<?= base_url('assets/js/plugin/sweetalert/sweetalert.min.js') ?>"></script>

		<!-- Atlantis JS -->
		<script src="<?= base_url('assets/js/atlantis.min.js') ?>"></script>
		<script src="<?= base_url('assets/js/demo.js') ?>"></script>

		<!-- Costume.js -->
		<script src="<?= base_url('assets/js/notif.js') ?>"></script>
</body>

</html>
