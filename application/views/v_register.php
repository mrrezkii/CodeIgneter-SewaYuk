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
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/fonts/icofont/icofont.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/main.css" />
</head>

<body>
	<div class="limiter">
		<div class="container-register">
			<div class="wrap-register">
				<form class="register-form" action="<?=base_url('user/register_akun')?>" method="post">
					<span class="register-form-title">
					<img src="<?= base_url() ?>assets/global/image/logo-kata.png" width=130px alt="logo">
					</span>
                    <div class="wrap-input100 validate-input" data-validate="Entry your name">
						<input class="input100" type="text" name="nama_user" placeholder="Nama Lengkap">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="icofont-id-card" aria-hidden="true"></i>
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="icofont-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
					<select  class="input100" name="jenis_kelamin" style="border:none;">
								<option value="Laki-Laki">Laki-Laki</option>
								<option value="Perempuan">Perempuan</option>
				   </select>
				   <span class="focus-input100"></span>
				   <span class="symbol-input100">
							<i class="icofont-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
					<select  class="input100" name="provinsi" style="border:none;">
								<option>Provinsi</option>
								<?php foreach($get_provinsi as $provinsi): ?>
									<option value="<?=$provinsi->nama?>"><?=$provinsi->nama?></option>
								<?php endforeach?>
				   </select>
				   <span class="focus-input100"></span>
				   <span class="symbol-input100">
							<i class="icofont-globe" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
					<select  id="kota" class="input100" name="kota" style="border:none;">
					<option>kota</option>
					<?php foreach($get_kota as $kota): ?>
									<option value="<?=$kota->nama?>"><?= $kota->nama ?></option>
					<?php endforeach?>
				   </select>
				   <span class="focus-input100"></span>
				   <span class="symbol-input100">
							<i class="icofont-home" aria-hidden="true"></i>
						</span>
					</div>

					 <div class="wrap-input100 validate-input" data-validate="Telephone is required">
						<input class="input100" type="text" name="telepon" placeholder="Telepon">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="icofont-phone" aria-hidden="true"></i>
						</span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate="Date is required">
						<input class="input100" type="date" name="tanggal_lahir">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="icofont-calendar" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="icofont-lock" aria-hidden="true"></i>
						</span>
                    </div>

					<div class="container-login-form-btn">
						<input class="login-form-btn" type="submit" name="submit" id="submit" value="Daftar" class="btn">
					</div>

					<div class="text-center p-t-136">
                        <a class="txt2" href="<?=base_url('user/login')?>">
                        <i class="icofont-long-arrow-left m-l-5" aria-hidden="true"></i>
						Back to login 
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>

