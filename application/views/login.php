<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?= base_url("assets"); ?>images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?= base_url("assets"); ?>/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/ba567eae7a.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url("assets"); ?>/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url("assets"); ?>/css/main.css">
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<?= form_open('validLogin/login'); ?>
					<span class="login100-form-title">
						Admin Login
					</span>
					<?php echo validation_errors(); 
  						if ($this->session->flashdata('msg_error')) {
  							echo '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
  							echo $this->session->flashdata('msg_error');
  							echo '</div>';
  						}
  					?>
					<div class="wrap-input100 validate-input" data-validate = "Valid Username is required">
						<input class="input100" type="text" name="username" placeholder="Username" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">Login</button>
					</div>
				<?= form_close(); ?>
			</div>
		</div>
	</div>

		
	<script src="<?= base_url("assets"); ?>/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url("assets"); ?>/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url("assets"); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url("assets"); ?>/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
		})
	</script>
	<!-- <script src="js/main.js"></script> -->

</body>
</html>