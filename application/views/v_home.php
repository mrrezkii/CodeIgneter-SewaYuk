<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Sewa Yuk</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/css/font-open-sans.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/hamburgers/hamburgers.min.css" />
	<title>
		<?= $title ?>
	</title>
	<link rel="icon" href="<?=base_url()?>assets/global/image/logo.png" type="image/png" width="40px" height="auto">
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/custom/home.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/custom/mediaquery_home.css" />
	
	<!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
	 crossorigin="" />

	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
	 crossorigin=""></script> -->
</head>

<body>

	<?php if($this->session->userdata('login')!=TRUE): ?>
	<nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top ">
		<ul class="nav ml-auto">
			<li class="nav-item">
				<button class="hamburger hamburger--spring" id="navigation-button" type="button">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</li>
		</ul>
	</nav>

	<div class="navigation">
		<div class="bgblue">
		</div>
		<div class="nav-bar">
			<img class="navbar-brand" src="<?= base_url() ?>assets/global/image/logo-asli2.png" width=200px alt="Icon">
			<ul class="nav flex-column">
				<li class="nav-item">
					<a class="nav-link active" href="#">Museum</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Promo</a>
				</li>
				<li class="nav-item">
					<div id="accordion">

						<a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							Cek Pesanan <i style="font-size: 12px" class="fa fa-chevron-down"></i>
						</a>
						<div id="collapseOne" class="ml-4 collapse" aria-labelledby="headingOne" data-parent="#accordion">
							<ul class="nav flex-column">
								<li class="nav-item">
                                    <a class="nav-link active" href="#">Transaksi</a>
								</li>
								<li class="nav-item">
                                    <a class="nav-link" href="#">Keranjang</a>
								</li>
							</ul>
						</div>
					</div>
					<div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('user/login')?>">Masuk Akun <i class="fa fa-chevron-circle-right"></i></a>
				</li>
			</ul>
			<div class="container footer-nav">
				<p>let's explore the museum of Indonesia together!</p>
				<h1></h1>
			</div>
		</div>
	</div>

	<?php else:?>
	<nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top ">
		<ul class="nav ml-auto">
			<li class="nav-item">

				<button class="hamburger hamburger--spring" id="navigation-button" type="button">
                    <!-- <span id="notification-number" class="badge badge-pill badge-danger"
                          style="position: absolute; z-index: 99 ; right: 0;top: 0">0</span> -->
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</li>
		</ul>
	</nav>
	<div class="navigation">
		<div class="bgblue">
		</div>
		<div class="nav-bar">
			<img class="navbar-brand" src="<?= base_url() ?>assets/global/image/logo-asli2.png" width=200px alt="Icon">
			<br><br>
			<div class="profil-user" style="text-align:center;">
				<li class="nav-item">
					<?php if($this->session->userdata('foto_profil')!=NULL)  :?>
                        <img src="<?= base_url("assets/user/foto/profil/" . $this->session->userdata('foto_profil')) ?>"
                             alt="..."
                             style="border-radius:100%;" width="22%">
					<?php else: ?>
					<img src="<?= base_url() ?>assets/admin/images/user.png" alt="..." style="border-radius:100%;" width="22%">
					<?php endif?>

				<li class="nav-item" style="margin-top:10px;">
					<h5>
						<?= $this->session->userdata('nama_user') ?>
					</h5>
					<?php if($this->session->userdata('status')=='Admin'): ?>
					<a style="font-size:16px;" href="<?=base_url('admin')?>">Halaman Admin <i style="font-size: 12px" class="fa fa-chevron-right"></i></a>
					<?php endif ?>
				</li>
				</li>

				<hr>
			</div>


			<ul class="nav flex-column">

				<li class="nav-item">
					<div id="accordion">

						<a class="nav-link" href="#" data-toggle="collapse" data-target="#home" aria-expanded="true" aria-controls="collapseOne">
							Home <i style="font-size: 12px" class="fa fa-chevron-down"></i>
						</a>
						<div id="home" class="ml-4 collapse" aria-labelledby="headingOne" data-parent="#accordion">
							<ul class="nav flex-column">
								<li class="nav-item">
									<a class="nav-link active" href="#kategori">Kategori Sewa</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Tujuan</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Menu Utama</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="#">Contact</a>
								</li>
							</ul>
						</div>
					</div>
					<div>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('user/profil/' . $this->session->userdata('id_user'))?>">Profil</a>
				</li>

				<li class="nav-item">
					<div id="accordion">

						<a class="nav-link" href="#" data-toggle="collapse" data-target="#pesanan" aria-expanded="true" aria-controls="collapseOne">
                            <div class="badge badge-pill badge-danger" style=" color:white;">0</div>
							Cek Pesanan <i style="font-size: 12px" class="fa fa-chevron-down"></i>
						</a>
						<div id="pesanan" class="ml-4 collapse" aria-labelledby="headingOne" data-parent="#accordion">
							<ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" href="<?= base_url() ?>transaksi/status">Transaksi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Keranjang &nbsp
                                        <div class="badge badge-pill badge-danger" style=" color:white;">0</div>
                                    </a>
                                </li>
							</ul>
						</div>
					</div>
					<div>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?=base_url('user/logout')?>">Log Out</a>
				</li>
			</ul>
			<div class="container footer-nav">
				<p>let's explore the museum of Indonesia together!</p>
				<h1></h1>
			</div>
		</div>
	</div>

	<?php endif?>

	<section id="intro" class="intro-bg" style="padding-top: 10px;padding-bottom: 10px;">
		<div class="container-fluid">
			<div class="center-intro">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="center-intro-tagline">
							<h2 class="color-white font-opensans-bold text-uppercase">Sewa Yuk</h2>
							<h3 class="color-white font-opensans-regular">Sewa Barang Mudah, Praktis dan Asyik</h3>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="center-intro-vector">
							<img class="img-fluid" src="<?=base_url()?>assets/global/image/home.png" alt="">
						</div>
					</div>
					<div>
					</div>
				</div>
	</section>
	<section id="kategori" class="category-bg" style="padding-top: 10px;padding-bottom: 10px;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h5 class="text-left color-blue font-opensans-bold">Kategori</h5>
				</div>
				<div class="content-category">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<a href="#">
								<p class="p-semua text-right color-orange font-opensans-bold">Lihat Semua</p>
							</a>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 border-line center-content">
							<center>
								<img class="img-fluid" src="<?=base_url()?>assets/global/image/kategori/kamera.png" alt="kamera">
							</center>
							<h5 class="h5-kategori color-black font-opensans-bold text-center">Sewa Kamera</h5>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 border-line">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 center-content border-line-bottom">
									<img class="img-fluid" src="<?=base_url()?>assets/global/image/kategori/tenda.png" alt="tenda">
									<h6 class="h5-kategori color-black font-opensans-bold text-center">Sewa Kamera</h5>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 center-content">
									<img class="img-fluid float-left" src="<?=base_url()?>assets/global/image/kategori/peralatan dapur.png" alt="dapur">
									<h5 class="h5-kategori color-black font-opensans-bold text-center">Sewa Alat Dapur</h5>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 border-line center-content">		
							<center>
								<img class="img-fluid" src="<?=base_url()?>assets/global/image/kategori/baju.png" alt="baju">
							</center>
							<h5 class="h5-kategori color-black font-opensans-bold text-center">Sewa Baju</h5>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 border-line">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 center-content border-line-bottom">
									<img class="img-fluid float-left" src="<?=base_url()?>assets/global/image/kategori/speaker.png" alt="speaker">
									<h5 class="h5-kategori color-black font-opensans-bold text-center">Sewa Speaker</h5>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 center-content">
									<img class="img-fluid float-left" src="<?=base_url()?>assets/global/image/kategori/sepeda.png" alt="sepeda">
									<h5 class="h5-kategori color-black font-opensans-bold text-center">Sewa Sepeda</h5>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="hotsale" class="hotsale-bg" style="padding-top: 10px;padding-bottom: 10px;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h5 class="text-left color-white font-opensans-bold float-left">Hot Sale</h5>&nbsp;&nbsp;&nbsp;
					<img src="<?=base_url()?>assets/global/image/fire.png" alt="hot">
				</div>
				<div class="col-md-10 offset-md-1">
					<div class="box-hotsale col-lg-12 col-md-12 col-sm-12">
					<!-- Set up your HTML -->
						<div class="owl-carousel pl-2 pr-2">
							<div class="content-hotsale">
								<center>
									<img class="img-fluid" src="<?=base_url()?>assets/global/image/barang sewa/kamera700d.jpg" alt="700d">
								</center>
								<h5 class="h5-hotsale color-black font-opensans-regular">Kamera Canon 700D</h5>
								<h5 class="h5-hotsale-harga color-orange font-opensans-regular">Rp. 100.000 / 24 jam</h5>
								<a href="#">
									<button type="button" class="btn btn-hotsale font-opensans-bold">Lihat</button>
								</a>
							</div>
							<div class="content-hotsale">
								<center>
									<img class="img-fluid" src="<?=base_url()?>assets/global/image/barang sewa/kamera700d.jpg" alt="700d">
								</center>
								<h5 class="h5-hotsale color-black font-opensans-regular">Kamera Canon 700D</h5>
								<h5 class="h5-hotsale-harga color-orange font-opensans-regular">Rp. 100.000 / 24 jam</h5>
								<a href="#">
									<button type="button" class="btn btn-hotsale font-opensans-bold">Lihat</button>
								</a>
							</div>
							<div class="content-hotsale">
								<center>
									<img class="img-fluid" src="<?=base_url()?>assets/global/image/barang sewa/kamera700d.jpg" alt="700d">
								</center>
								<h5 class="h5-hotsale color-black font-opensans-regular">Kamera Canon 700D</h5>
								<h5 class="h5-hotsale-harga color-orange font-opensans-regular">Rp. 100.000 / 24 jam</h5>
								<a href="#">
									<button type="button" class="btn btn-hotsale font-opensans-bold">Lihat</button>
								</a>
							</div>
							<div class="content-hotsale">
								<center>
									<img class="img-fluid" src="<?=base_url()?>assets/global/image/barang sewa/kamera700d.jpg" alt="700d">
								</center>
								<h5 class="h5-hotsale color-black font-opensans-regular">Kamera Canon 700D</h5>
								<h5 class="h5-hotsale-harga color-orange font-opensans-regular">Rp. 100.000 / 24 jam</h5>
								<a href="#">
									<button type="button" class="btn btn-hotsale font-opensans-bold">Lihat</button>
								</a>
							</div>
							<div class="content-hotsale">
								<center>
									<img class="img-fluid" src="<?=base_url()?>assets/global/image/barang sewa/kamera700d.jpg" alt="700d">
								</center>
								<h5 class="h5-hotsale color-black font-opensans-regular">Kamera Canon 700D</h5>
								<h5 class="h5-hotsale-harga color-orange font-opensans-regular">Rp. 100.000 / 24 jam</h5>
								<a href="#">
									<button type="button" class="btn btn-hotsale font-opensans-bold">Lihat</button>
								</a>
							</div>
							<div class="content-hotsale">
								<center>
									<img class="img-fluid" src="<?=base_url()?>assets/global/image/barang sewa/kamera700d.jpg" alt="700d">
								</center>
								<h5 class="h5-hotsale color-black font-opensans-regular">Kamera Canon 700D</h5>
								<h5 class="h5-hotsale-harga color-orange font-opensans-regular">Rp. 100.000 / 24 jam</h5>
								<a href="#">
									<button type="button" class="btn btn-hotsale font-opensans-bold">Lihat</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="recent" class="recent-bg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h5 class="text-left color-blue font-opensans-bold">Baru Disewa</h5>
				</div>
				<div class="col-md-12">
					<a href="#">
						<p class="p-semua text-right color-orange font-opensans-bold">Lihat Semua</p>
					</a>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="box-recent">
						<div class="row">
							<div class="col-md-12">
								<center>
									<img class="img-fluid" src="<?=base_url()?>assets/global/image/barang sewa/kamera700d.jpg" alt="700d" width="150px">
								</center>
							</div>
							<div class="col-md-12">
								<hr>
								<h5 class="h5-recent color-black font-opensans-bold text-center">Kamera Canon 700D</h5>
							</div>
							<div class="col-md-12">
								<h5 class="h5-recent color-orange font-opensans-regular text-center">Rp. 100.000 / 24 jam</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="box-recent">
						<div class="row">
							<div class="col-md-12">
								<center>
									<img class="img-fluid" src="<?=base_url()?>assets/global/image/barang sewa/kamera700d.jpg" alt="700d" width="150px">
								</center>
							</div>
							<div class="col-md-12">
								<hr>
								<h5 class="h5-recent color-black font-opensans-bold text-center">Kamera Canon 700D</h5>
							</div>
							<div class="col-md-12">
								<h5 class="h5-recent color-orange font-opensans-regular text-center">Rp. 100.000 / 24 jam</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="box-recent">
						<div class="row">
							<div class="col-md-12">
								<center>
									<img class="img-fluid" src="<?=base_url()?>assets/global/image/barang sewa/kamera700d.jpg" alt="700d" width="150px">
								</center>
							</div>
							<div class="col-md-12">
								<hr>
								<h5 class="h5-recent color-black font-opensans-bold text-center">Kamera Canon 700D</h5>
							</div>
							<div class="col-md-12">
								<h5 class="h5-recent color-orange font-opensans-regular text-center">Rp. 100.000 / 24 jam</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="box-recent">
						<div class="row">
							<div class="col-md-12">
								<center>
									<img class="img-fluid" src="<?=base_url()?>assets/global/image/barang sewa/kamera700d.jpg" alt="700d" width="150px">
								</center>
							</div>
							<div class="col-md-12">
								<hr>
								<h5 class="h5-recent color-black font-opensans-bold text-center">Kamera Canon 700D</h5>
							</div>
							<div class="col-md-12">
								<h5 class="h5-recent color-orange font-opensans-regular text-center">Rp. 100.000 / 24 jam</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="box-recent">
						<div class="row">
							<div class="col-md-12">
								<center>
									<img class="img-fluid" src="<?=base_url()?>assets/global/image/barang sewa/kamera700d.jpg" alt="700d" width="150px">
								</center>
							</div>
							<div class="col-md-12">
								<hr>
								<h5 class="h5-recent color-black font-opensans-bold text-center">Kamera Canon 700D</h5>
							</div>
							<div class="col-md-12">
								<h5 class="h5-recent color-orange font-opensans-regular text-center">Rp. 100.000 / 24 jam</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="box-recent">
						<div class="row">
							<div class="col-md-12">
								<center>
									<img class="img-fluid" src="<?=base_url()?>assets/global/image/barang sewa/kamera700d.jpg" alt="700d" width="150px">
								</center>
							</div>
							<div class="col-md-12">
								<hr>
								<h5 class="h5-recent color-black font-opensans-bold text-center">Kamera Canon 700D</h5>
							</div>
							<div class="col-md-12">
								<h5 class="h5-recent color-orange font-opensans-regular text-center">Rp. 100.000 / 24 jam</h5>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="box-recent">
						<div class="row">
							<div class="col-md-12">
								<center>
									<img class="img-fluid" src="<?=base_url()?>assets/global/image/barang sewa/kamera700d.jpg" alt="700d" width="150px">
								</center>
							</div>
							<div class="col-md-12">
								<hr>
								<h5 class="h5-recent color-black font-opensans-bold text-center">Kamera Canon 700D</h5>
							</div>
							<div class="col-md-12">
								<h5 class="h5-recent color-orange font-opensans-regular text-center">Rp. 100.000 / 24 jam</h5>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="box-recent">
						<div class="row">
							<div class="col-md-12">
								<center>
									<img class="img-fluid" src="<?=base_url()?>assets/global/image/barang sewa/kamera700d.jpg" alt="700d" width="150px">
								</center>
							</div>
							<div class="col-md-12">
								<hr>
								<h5 class="h5-recent color-black font-opensans-bold text-center">Kamera Canon 700D</h5>
							</div>
							<div class="col-md-12">
								<h5 class="h5-recent color-orange font-opensans-regular text-center">Rp. 100.000 / 24 jam</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="wrapper tujuan" id="tujuan">
		<div>
			<h1>Mengapa Harus SewaYuk ?</h1>
			<section class="columns">
				<div class="column" data-aos-delay="500" data-aos="fade-right" data-aos-duration="1000"><img class="img-center" src="<?=base_url()?>assets/global/image/goods.png"
					 width="100" height="100" alt="">
					<h4><strong>Berbagai Barang Terlengkap</strong></h4>
					<p>Jelajahi Berbagai Macam Jenis Barang Yang Di Tawarkan Oleh Kami. Mulai dari mobil, motor, kamera, perlengkapan
						camping,
						kaset DVD, dan masih banyak lagi barang menarik lainnya.</p>
				</div>
				<div class="column" data-aos-delay="1500" data-aos="fade-right" data-aos-duration="1000"><img class="img-center"
					 src="<?=base_url()?>assets/global/image/shield.png" width="100" height="100" alt="hutan-hijau">
					<h4><strong>Transaksi Paling Aman</strong></h4>
					<p>Semua transaksi di SewaYuk terjamin keamanannya baik dari sisi penyewa maupun pengguna semua mitra / pemilik
						toko
						rental wajib terverifikasi sebelum melakukan transaksi.</p>
				</div>
				<div class="column" data-aos-delay="2500" data-aos="fade-right" data-aos-duration="1200"><img class="img-center"
					 src="<?=base_url()?>assets/global/image/pay-per-click.png" width="100" height="100" alt="hutan-hijau">
					<h4><strong>Harga Yang Terjangkau</strong></h4>
					<p>Dapatkan berbagai jenis barang yang disewakan dengan harga yang terjangkau dan tidak akan menguras isi dompet
						anda,
						gunakan Kategori Sewa untuk menyesuaikan sesuai dengan modal anda.</p>
				</div>
			</section>
		</div>
	</div>

	<div class="about">
		<h4>Poeple Behind SewaYuk!</h4>
		<hr width="30%" style="background-color:#3F51B5; height:2px;">

		<div class="row" style="text-align:center;">
			<div class="col-md-3">
				<img src="<?=base_url()?>assets/global/image/profil/CEO.jpg">
				<p>
					<h2>CEO</h2>
				</p>
				<p>
					<h5>&nbsp;Kurniadi Ahmad Wijaya</h5>
				</p>
			</div>
			<div class="col-md-3">
				<img src="<?=base_url()?>assets/global/image/profil/CTO.jpg">
				<p>
					<h2>CTO</h2>
				</p>
				<p>
					<h5>&nbsp;Muhammad Rezki Ananda</h5>
				</p>
			</div>
			<div class="col-md-3">
				<img src="<?=base_url()?>assets/global/image/profil/COO.jpg">
				<p>
					<h2>COO</h2>
				</p>
				<p>
					<h5>&nbsp;Naufal Atha Haidarbahy</h5>
				</p>
			</div>
			<div class="col-md-3">
				<img class="img-responsive" src="<?=base_url()?>assets/global/image/profil/CMO.jpeg">
				<p>
					<h2>CMO</h2>
				</p>
				<p>
					<h5>&nbsp;Almira Rahma Sabita</h5>
				</p>
			</div>
		</div>
	</div>

	<section id="kontak" class="kontak-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-xl-12">
					<div class="padding-content-kontak">
						<h1 class="h1-pengguna font-nexa-bold color-white"><img src="<?=base_url()?>assets/global/image/logo.png" width="70"
							 height="70" alt=""> SewaYuk</h1>
						<hr style="background-color:grey; height:2px;">
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xl-6 col-sm-12">
					<div class="padding-content-kontak inputContent">

						<div id="mapid"></div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-xl-6 col-sm-12">
					<div class="padding-content-kontak infoContent">
						<div class="row">
							<div class="col-3">
								<img class="img-fluid float-right" src="assets/global/image/roundedlokasi.png">
							</div>
							<div class="col-9">
								<h2 class="h2-kontak font-nexa-bold text-white">SMK Telkom Malang</h2>
								<p class="p-kontak font-nexa-light text-white">Jl. Danau Ranau, Sawojajar, Kedungkandang, Kota Malang, Jawa
									Timur 65139</p>
							</div>
							<div class="col-3">
								<img class="img-fluid float-right" src="assets/global/image/roundedtelp.png">
							</div>
							<div class="col-9">
								<h2 class="h2-kontak font-nexa-bold text-white">Nomer Telepon</h2>
								<p class="p-kontak font-nexa-light text-white">+6281235960100<br>WA: 0812 400 3838 (WA Only)</p>
							</div>
							<div class="col-3">
								<img class="img-fluid float-right" src="assets/global/image/roundedemail.png">
							</div>
							<div class="col-9">
								<h2 class="h2-kontak font-nexa-bold text-white">E-mail</h2>
								<p class="p-kontak font-nexa-light text-white">support@sewayuk.com</p>
							</div>
						</div>

						<br>
						<div class="row">
							<div class="col-md-9 offset-md-1">
								<h2 class="h2-kontak font-nexa-bold text-white">Media Sosial</h2>
							</div>
							<div class="col-md-9 offset-md-1">
								<div class="spacingMediaSosialKontak">
									<a href="https://www.facebook.com/SentraVidyaUtama/">
										<img class="img-fluid hover-scale" src="assets/global/image/squarefacebook.png">
									</a>
									<a href="http://www.linkedin.com/company/pt-sentra-vidya-utama">
										<img class="img-fluid hover-scale" src="assets/global/image/squarelinkedin.png">
									</a>
									<a href="https://plus.google.com/+SentraVidyaUtamaSurabaya/">
										<img class="img-fluid hover-scale" src="assets/global/image/squareyoutube.png">
									</a>
									<a href="https://www.youtube.com/channel/UCDcvqZbhsdaDCnmUURz54uw">
										<img class="img-fluid hover-scale" src="assets/global/image/squaregoogle.png">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</html>
</body>
<script type="text/javascript" src="<?=base_url()?>assets/global/js/jquery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/global/js/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/global/js/owl-carousel/owl.carousel.min.js"></script>

<script>
	$(document).ready(function () {
		$("#navigation-button").click(function () {
			$("#notification-number").toggleClass("notification-hide");
			$(".nav-bar").toggleClass("nav-bar-hide");
			$(".bgblue").toggleClass("bgblue-show");
			$(".hamburger").toggleClass("is-active");
		});
	});
</script>
<script>
	function onMapClick(e) {
		// alert("" + e.latlng);
	}



	var data = [{
		container: 'mapid',
		map: L.map('mapid').setView([-7.9768887, 112.6582897], 16),
		markers: [

			{
				coordinate: [-7.9767042, 112.6583408],
				label: 'SMK Telkom Malang',
				popup: 'SMK Telkom Malang'
			}
		]
	}];

	const accessToken =
		'pk.eyJ1Ijoic2hpbnlxIiwiYSI6ImNqbWQ2cXlhMTAwZWEzcW1sbjY1YXJqd3QifQ.Ngekb1otgAVz9IFOPBlnSA';




	data.forEach(item => {

		if (item.markers !== undefined) {

			item.markers.forEach(element => {
				marker = L.marker(element.coordinate).addTo(item.map);
				marker.bindPopup(element.popup).openPopup();
			});

		}

		item.map.on('click', onMapClick);

		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=' + accessToken, {
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			maxZoom: 20,
			id: 'mapbox.streets',
			accessToken: accessToken
		}).addTo(item.map);
	});

</script>
<script>
$('.owl-carousel').owlCarousel({
    loop:true,
	navigation:false,
	nav:false,
    margin:25,
    responsiveClass:true,
	autoplay:true,
    autoplayTimeout:1500,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:true
        },
        1000:{
            items:5,
            nav:true,
            loop:true
        }
    }
})
    $('.owl-next', element).toggleClass('disabled', current === carousel.maximum());
    $('.owl-prev', element).toggleClass('disabled', current === carousel.minimum());
</script>


</html>