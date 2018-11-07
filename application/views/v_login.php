<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		<?=$title?>
	</title>
	<link rel="icon" href="<?=base_url()?>assets/global/image/logo.png" type="image/png" width="40px" height="auto">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/main.css" />
</head>

<body>
	<div class="limiter">
		<div class="container-login">
			<div class="wrap-login">
				<div class="login-pic js-tilt" data-tilt>
					<img src="<?=base_url()?>assets/global/image/user.png" alt="IMG">
				</div>

				<form class="login-form" action="<?=base_url('user/proses_login')?>" method="post">

				<span class="login-form-title">
					<img src="<?=base_url()?>assets/global/image/logo-kata.png" width=120px alt="Logo">
				</span>

				<?php if($this->session->flashdata('pesan_gagal')==TRUE) {?>
				<div class="alert alert-warning fade show" role="alert" >
					<?= $this->session->flashdata('pesan_gagal'); ?>
				</div>

				<?php } else if($this->session->flashdata('pesan_sukses')==TRUE) {?>
				<div class="alert alert-success fade show" role="alert" >
					<?= $this->session->flashdata('pesan_sukses'); ?>
				</div>
				<?php } ?>

					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login-form-btn">
						<input class="login-form-btn" type="submit" name="submit" id="submit" value="Login" class="btn">
					</div>
					<div class="text-center p-t-136">
						<a class="txt2"  href="<?=base_url('user/register')?>">
							<font size="3px">Belum Punya Akun ?</font>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>

