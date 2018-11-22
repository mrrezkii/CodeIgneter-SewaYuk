<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Sewa Yuk</title>
	<title>
		<?= $title ?>
	</title>
	<link rel="icon" href="<?=base_url()?>assets/global/image/logo.png" type="image/png" width="40px" height="auto">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/css/font-home.css">
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/custom/barang.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/fonts/icofont/icofont.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/custom/home.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/custom/mediaquery_home.css" />
</head>
<body>

<nav class="navbar navbar-expand-custom navbar-light fixed-top bg-white shadow">
	<div class="col-lg-1 col-md-11 col-sm-11 col-9">
		<center>
			<a href="index.php"><img class="img-fluid navbar-brand icon-nav" src="<?=base_url()?>assets/global/image/logo.png" alt="Logo Sewa Yuk" width="60px"></a>
			<a href="index.php"><img class="img-fluid navbar-brand icon-nav-sm ml-auto mr-auto" src="<?=base_url()?>assets/global/image/Logo with name.png" alt="Logo Sewa Yuk" width="225px"></a>
		</center>
	</div>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="index.html">Beranda</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="index.html">Kategori</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="index.html">Sewa Teratas</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="index.html">Baru Disewa</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="index.html">Mengapa SewaYuk</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="index.html">Tentang	</a>
			</li>
		</ul>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a href="#index.php">
					<li class="icofont-cart color-blue" style="font-size: 25px;margin-top: 8px;">
					</li>
				</a>
			</li>
			<li class="nav-item dropdown">
        		<a class="nav-link dropdown-toggle font-opensans-bold " href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img class="img-fluid" src="<?=base_url()?>assets/global/image/profil/CTO.jpg" alt="Rounded account" width="22" style="border-radius: 50%">
					Muhammad Rezki Ananda
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown02">
					<a class="dropdown-item" href="#">Profil</a>
					<a class="dropdown-item" href="#">Transaksi</a>
				  	<div class="dropdown-divider"></div>
				  	<a class="dropdown-item" href="#">Logout</a>
				</div>
     		</li>
			<li class="nav-item dropdown">
        		<a class="nav-link dropdown-toggle font-opensans-bold " href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<img class="img-fluid" src="<?=base_url()?>assets/global/image/rounded account.png" alt="Rounded account">
					Login
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
				 <form class="px-4 py-3">
					<div class="form-group">
					  <label for="exampleDropdownFormEmail1">Email address</label>
					  <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
					</div>
					<div class="form-group">
					  <label for="exampleDropdownFormPassword1">Password</label>
					  <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
					</div>
					<div class="form-check">
					  <input type="checkbox" class="form-check-input" id="dropdownCheck">
					  <label class="form-check-label" for="dropdownCheck">
						Remember me
					  </label>
					</div>
					<button type="submit" class="btn btn-primary">Sign in</button>
				  </form>
				  <div class="dropdown-divider"></div>
				  <a class="dropdown-item" href="#">New around here? Sign up</a>
				  <a class="dropdown-item" href="#">Forgot password?</a>
				</div>
     		</li>
		</ul>
	</div>
</nav>

<section id="listbarang" class="listbarang-bg" style="padding-top:100px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12">
				<div class="input-group">
			<form>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check" checked> <span class="label-text">All</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Kostum</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Kamera</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Kostum</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Kamera</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="checkbox" name="check"> <span class="label-text">Kostum</span>
					</label>
				</div>
			</form>
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="form-group has-search">
							<span class="icofont-search form-control-feedback"></span>
							<input type="text" class="form-control" placeholder="Search">
						</div>
					</div>

						<?php foreach($ListBarang as $List): ?>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="card">
					  <center>
						  <img class="img-fluid card-img-top w-75" src="<?= base_url('assets/user/foto/barang/'.$List->nama_jenis."/".$List->foto_barang) ?>" alt="700d">
					  </center>
					  <div class="card-body">
						<p class="card-text h5-baru color-black font-opensans-regular text-center"><?= $List->nama_barang ?></p>
						<p class="card-text h5-baru-harga color-orange font-opensans-regular text-center">Rp<?= number_format($List->harga_barang,2,',','.') ?>/ 24 jam</p>
						<p class="p-kota-baru font-opensans-light text-center"><i class="icofont-location-pin"><?= $List->kota ?></i></p>
						<a href="#">
							<button type="button" class="btn btn-baru font-opensans-bold">Lihat</button>
						</a>
					  </div>	
					</div>
					</div>
					<?php endforeach ?>


			
				</div>
			</div>
		</div>
	</div>
</section>
<footer id="footer" class="footer-bg">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 grid-footer">

		<footer class="footer-distributed">
			<div class="footer-right">
				<a href="#"><i class="icofont-instagram"></i></a>
				<a href="#"><i class="icofont-whatsapp"></i></a>
				<a href="#"><i class="icofont-google-plus"></i></a>
			</div>
			<div class="footer-left">
				<p class="footer-links">
					<a class="link-1" href="#">Home</a>
					<a href="#">Blog</a>
					<a href="#">Pricing</a>
					<a href="#">About</a>
					<a href="#">Faq</a>
					<a href="#">Contact</a>
				</p>
				<p>SewaYuk &copy; 2018</p>
			</div>

		</footer>
			</div>
		</div>
	</div>
</footer>
</body>
</html>
