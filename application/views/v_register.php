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
    <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/main.css" />
</head>

<body>
	<div class="limiter">
		<div class="container-register">
			<div class="wrap-register">
				<form class="register-form" action="<?=base_url('index.php/user/register_akun')?>" method="post">
					<span class="register-form-title">
					<img src="<?= base_url() ?>assets/global/image/logo-kata.png" width=130px alt="logo">
					</span>
                    <div class="wrap-input100 validate-input" data-validate="Entry your name">
						<input class="input100" type="text" name="nama_user" placeholder="Nama Lengkap">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					 <div class="wrap-input100 validate-input" data-validate="Telephone is required">
						<input class="input100" type="text" name="telepon" placeholder="Telepon">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Date is required">
						<input class="input100" type="date" name="tanggal_lahir">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar" aria-hidden="true"></i>
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
						<input class="login-form-btn" type="submit" name="submit" id="submit" value="Daftar" class="btn">
					</div>
					<div class="text-center p-t-136">
                        <a class="txt2" href="<?=base_url('index.php/user/login')?>">
                        <i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
						Back to login 
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

</body>
</html>

