<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
		<?= $title ?>
	</title>
	<link rel="icon" href="<?= base_url() ?>assets/image/icon.png" type="image/png" width="40px" height="auto">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/animate.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/fonts.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/custom/profile.css" />
</head>

<body>
	<?php foreach($data_user as $user): ?>
	<div class="container container-profile">
		<span style="color: white">
			<a href="<?= base_url("user/profil/". $user->id_user) ?>">
				<font color="white"><i class="fa fa-arrow-left"></i> <b>Kembali</b></font>
			</a>
		</span>

		<div class="image-profile">
			<?php if ($user->foto_profil != NULL)  : ?>
			<img class="rounded-circle" src="<?= base_url("assets/user/foto/profil/" .$user->foto_profil) ?>"
			alt="profil">
			<?php else: ?>
			<img src="<?= base_url() ?>assets/admin/images/user.png" alt="..." style="border-radius:100%;">
			<?php endif ?>
		</div>

		<div class="card-profile">
			<div class="row">
				<div class="col-12">			
				<center>
					<input type="file" name="foto_profil" ?>
				</center>
				</div>

				<br><br>

				<div class="col-md-6">
					<div class="content-profile">
						<h4>Nama :</h4>
						<input type="text" name="nama_user" value="&nbsp;<?= $user->nama_user ?>">
					</div>

					<div class="content-profile">
						<h4>Telepon :</h4>
						<input type="text" name="email" value="&nbsp;<?= $user->telepon ?>">
					</div>
				</div>
				<div class="col-md-6">
				<div class="content-profile">
						<h4>Telepon :</h4>
						<input type="text" name="email" value="&nbsp;<?= $user->telepon ?>">
					</div>
					<div class="content-profile">
						<h4>Tanggal Lahir : </h4>
						<input type="date" name="email" value="<?= $user->tanggal_lahir ?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="content-profile">
						<h4>Jenis Kelamin :</h4>
					
							<?php if($user->jenis_kelamin=="Laki-Laki"): ?>
							<select name="example">
								<option value="<?= $user->jenis_kelamin ?>"><?= $this->session->userdata('jenis_kelamin') ?></option>
								<option value="Perempuan">Perempuan</option>
							</select>
							<?php else: ?>
							<select name="example">
								<option value="<?= $user->jenis_kelamin ?>"><?= $this->session->userdata('jenis_kelamin') ?></option>
								<option value="Laki-Laki">Laki-Laki</option>
							</select>
							<?php endif ?>
					
					</div>
					<div class="content-profile">
						<h4>NIK :</h4>
						<p>
							<?= $user->NIK ?>
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="content-profile">
						<h4>Alamat :</h4>
						<p>
							<?=$user->alamat ?>
						</p>
					</div>
					<div class="content-profile">
						<br>
						<h4>Kartu Tanda Pengenal:</h4>
						<?php if( $user->foto_identitas == null): ?>
						<font color="red"><b><i class="fa fa-close"></i> Belum Diupload Atau Diverifikasi</b></font>
						<?php else: ?>
						<font color="#108410"><b><i class="fa fa-check"></i> Sudah Di Upload</font>
						<?php endif ?>
					</div>
				</div>

				<div class="col-12" style="text-align:right; padding-right:35px;">
					<button class="btn btn-primary"><b>Ubah Data Diri</b></button></center>
				</div>

			</div>
		</div>
	</div>
	<?php endforeach ?>
</body>

</html>