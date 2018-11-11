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
				<font color="white"><i class="fa fa-arrow-left"></i><b> Kembali</b></font>
			</a>
		</span>

		<div class="image-profile">
			<?php if ($user->foto_profil != NULL)  : ?>
			<img class="rounded-circle" src="<?= base_url("assets/user/foto/profil/".$user->foto_profil) ?>"
			alt="profil">
			<?php else: ?>
			<img src="<?= base_url() ?>assets/admin/images/user.png" alt="..." style="border-radius:100%;">
			<?php endif ?>
		</div>

		<form action="<?=base_url('user/update_profil')?>" method="post" enctype="multipart/form-data">

			<div class="card-profile">
				<div class="row">

				<input type="hidden" id="id_user" value="<?= $user->id_user ?>" name="id_user" required="required">
				<input type="hidden" id="email" value="<?= $user->email ?>" name="email" required="required">
				<input type="hidden" id="verifikasi" value="<?= $user->verifikasi ?>" name="verifikasi" required="required">

					<div class="col-12">
						<center>
							<input type="file" name="foto_profil" ?>
						</center>
					</div>

					<br><br>

					<div class="col-md-6">
						<div class="content-profile">
							<h4>Nama :</h4>
							<input type="text" name="nama_user" value="<?=$user->nama_user ?>">
						</div>

						<div class="content-profile">
							<h4>Telepon :</h4>
							<input type="text" name="telepon" value="<?=$user->telepon ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="content-profile">
							<h4>Password :</h4>
							<input type="text" name="password" value="<?=$user->password ?>">
						</div>
						<div class="content-profile">
							<h4>Tanggal Lahir : </h4>
							<input type="date" name="tanggal_lahir" value="<?=$user->tanggal_lahir ?>">
						</div>
					</div>

					<div class="col-md-6">
						<div class="content-profile">
							<h4>Jenis Kelamin :</h4>
							<?php if($user->jenis_kelamin=="Laki-Laki"): ?>
							<select name="jenis_kelamin">
								<option value="<?=$user->jenis_kelamin ?>">
									 <?=$user->jenis_kelamin ?>
								</option>
								<option value="Perempuan">Perempuan</option>
							</select>
							<?php else: ?>
							<select name="jenis_kelamin">
								<option value="<?=$user->jenis_kelamin ?>">
									 <?=$user->jenis_kelamin ?>
								</option>
								<option value="Laki-Laki"> Laki-Laki</option>
							</select>
							<?php endif ?>
						</div>

						<div class="content-profile">
							<h4>NIK :</h4>
							<?php if($user->NIK == NULL): ?>
							<font color="red"><b><i class="fa fa-close"></i> NIK Belum Di Isi</b></font>
							<input type="text" name="NIK" value="<?= $user->NIK?>">
							<?php elseif( $user->verifikasi == FALSE): ?>
							<font color="#ffa42d"><b>Belum Di Verifikasi</b></font>
							<input  type="text" type="text" name="NIK" value="<?= $user->NIK?>">
							<?php else: ?>
							<font color="#108410"><b>Sudah Di Verifikasi</b></font>
							<input  type="hidden" type="text" name="NIK" value="<?= $user->NIK?>">
							<p><?= $user->NIK ?></P>
							<?php endif ?>
						</div>

					</div>

					<div class="col-md-6">
						<div class="content-profile">
							<h4>Alamat :</h4>
							<input type="text" name="alamat" value="<?= $user->alamat?>">
						</div>

						<div class="content-profile">
							<br>
							<h4>Kartu Tanda Pengenal:</h4>
							<?php if( $user->foto_identitas == null): ?>
							<font color="red"><b><i class="fa fa-close"></i> Belum Diupload Atau Diverifikasi</b></font>
							<input type="file" name="foto_identitas">
							<?php elseif( $user->verifikasi == 0): ?>
							<font color="#ffa42d"><b>Belum Di Verifikasi</font>
							<div style="visibility:hidden"><input type="file" name="foto_identitas"></div>
							<?php else: ?>
							<font color="#108410"><b><i class="fa fa-check"></i> Sudah Di Upload Dan Di Verifikasi</font>
							<div style="visibility:hidden"><input type="file" name="foto_identitas"></div>
							<?php endif ?>
						</div>
					</div>

				</div>

				<div style="text-align:right; width:100%; padding-right:20px;">
					<input type="submit" name="edit" value="Ubah Data Diri" class="btn btn-primary">
				</div>
		</form>
	</div>
	</div>
	<?php endforeach ?>
</body>

</html>