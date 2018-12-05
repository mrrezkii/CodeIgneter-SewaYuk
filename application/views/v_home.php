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
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/custom/home.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/custom/mediaquery_home.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/fonts/icofont/icofont.min.css" />
</head>
<body>
<div id="home"></div>
<?php if($this->session->userdata('login')==TRUE): ?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white shadow">
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
		<div  id="Sidenav"></div>
		<ul class="navbar-nav mr-auto collapse-md">
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="#home">Beranda</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="#kategori_barang">Kategori</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="#teratas">Sewa Teratas</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="#sewa_baru">Baru Disewa</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="#tentang">Tentang</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="#kontak">Kontak Kami</a>
			</li>
		</ul>

		<ul class="navbar-nav ml-auto collapse-md">
			<li class="nav-item dropdown">
        		<a class="nav-link dropdown-toggle font-opensans-bold " href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<?=$this->session->userdata('nama_user')?> &nbsp;	
				<?php if($this->session->userdata('foto_profil') != NULL ) : ?>
				<img class="img-fluid" src="<?=base_url("assets/user/foto/profil/".$this->session->userdata('foto_profil'))?>" alt="" width="40" style="border-radius: 50%">
				<?php else: ?>	
				<img class="img-fluid" src="<?= base_url() ?>assets/admin/images/user.png" alt="" width="22" style="border-radius: 50%">
				<?php endif ?>	
				
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown02"> 	 	
					<a class="dropdown-item" href="<?=base_url("user/profil/".$this->session->userdata('id_user'))?>">Profil</a>
					<?php if($this->session->userdata('status')== "Admin"): ?>
					<a class="dropdown-item" href="<?=base_url()?>Admin">Laman Admin</a>
					<?php endif ?>
					<a class="dropdown-item" href="<?=base_url()?>transaksi">Transaksi</a>
				  	<div class="dropdown-divider"></div>
				  	<a class="dropdown-item" href="<?=base_url()?>user/logout">Logout</a>
				</div>
     		</li>
		</ul>
		
		<ul class="navbar-nav mr-auto collapse-sm">
			<li class="nav-item dropdown">
        		<a class="nav-link dropdown-toggle font-opensans-bold " href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<?php if($this->session->userdata('foto_profil') != NULL ) : ?>
				<center><img class="img-fluid" src="<?=base_url("assets/user/foto/profil/".$this->session->userdata('foto_profil'))?>" alt="" width="40" style="border-radius: 50%"></center>
				<center><?=$this->session->userdata('nama_user')?> &nbsp;</center>	
				<?php else: ?>	
				<center><img class="img-fluid" src="<?= base_url() ?>assets/admin/images/user.png" alt="" width="22" style="border-radius: 50%"></center>
				<?php endif ?>	
				
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown02"> 	 	
					<a class="dropdown-item" href="<?=base_url("user/profil/".$this->session->userdata('id_user'))?>"><p class="text-center">Profil</p></a>
					<?php if($this->session->userdata('status')== "Admin"): ?>
					<a class="dropdown-item" href="<?=base_url()?>Admin">Laman Admin</a>
					<?php endif ?>
					<a class="dropdown-item" href="<?=base_url()?>transaksi">Transaksi</a>
				  	<div class="dropdown-divider"></div>
				  	<a class="dropdown-item" href="<?=base_url()?>user/logout">Logout</a>
				</div>
     		</li>
		</ul>
		
		<hr class="hr-collapse collapse-sm">
		
		<ul class="navbar-nav ml-auto collapse-sm">
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="#home">Beranda</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="#kategori_barang">Kategori</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent"  href="#teratas">Sewa Teratas</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="#sewa_baru">Baru Disewa</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="#tentang">Tentang</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="#kontak">Kontak Kami</a>
			</li>
		</ul>
		
	</div>
</nav>

<?php else: ?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white shadow">
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
		<ul class="navbar-nav mr-auto collapse-md">
		<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="#home">Beranda</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="#kategori_barang">Kategori</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="#teratas">Sewa Teratas</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="#sewa_baru">Baru Disewa</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="#tentang">Tentang</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="#kontak">Kontak Kami</a>
			</li>
		</ul>

		<ul class="navbar-nav ml-auto collapse-md">
			<li class="nav-item">
        		<a class="nav-link font-opensans-bold " href="<?=base_url()?>user/login" aria-haspopup="true" aria-expanded="false">
					<img class="img-fluid profil-md" src="<?=base_url()?>assets/global/image/rounded account.png" alt="Rounded account">
					Login
				</a>
		
     		</li>
		</ul>
		
		
		
		<ul class="navbar-nav mr-auto collapse-sm">
			<li class="nav-item">
        		<a class="nav-link font-opensans-bold" href="<?=base_url()?>user/login" aria-haspopup="true" aria-expanded="false">
					<center><img class="img-fluid profil-sm" src="<?=base_url()?>assets/global/image/rounded account-sm.png" alt="Rounded account"></center>
					<br>
					<p class="text-center">Login</p>
				</a>
		
     		</li>
		</ul>
		
		<hr class="hr-collapse collapse-sm">
		
		<ul class="navbar-nav ml-auto collapse-sm">
		<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="#home">Beranda</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="#kategori_barang">Kategori</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent"  href="#teratas">Sewa Teratas</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="#sewa_baru">Baru Disewa</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="#tentang">Tentang</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="#kontak">Kontak Kami</a>
			</li>
		</ul>

		
	</div>
</nav>
<?php endif ?>

<section class="beranda-bg hidden-sm">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 co-md-6 col-sm-12">
				<div class="intro-kiri">
					<img class="img-fluid" src="<?=base_url()?>assets/global/image/Logo with tagline.png" alt="tagline">
					<hr class="text-left hr-blue" width="76px" size="200">
					<p class="p-intro-kiri font-opensans-regular color-black2">Membantu Anda dalam hal sewa menyewa barang. Selain bisa transaksi, dengan aplikasi ini Anda bisa menemukan tempat penyewaan di sekitar Anda.</p>
				</div>
			</div>
			<div class="col-lg-6 co-md-6 col-sm-12">
				<div class="intro-kanan">
					<p class="p-intro-kanan font-opensans-bold color-white2">Sewa Barang Idaman Anda di SEWAYUK</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="beranda-sm" class="beranda-bg-sm hidden-md">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 co-md-6 col-sm-12">
				<div class="intro-kanan">
					<p class="p-intro-kanan font-opensans-bold color-white2 text-center">Sewa Barang Idaman Anda di SEWAYUK</p>
					<div class="arrow bounce">
					<center>
						<a href="#kategori">
							<i class="icofont-rounded-down color-white"></i>
						</a>
					</center>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section  class="kategori-bg" style="padding-top: 90px;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<p class="p-judul text-center font-bebas-neue color-blue2" id="kategori_barang">Kategori</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 grid-kategori">
				<div class="item">
					<a href="#">
						<img class="img-fluid kategori-1" src="<?=base_url()?>assets/global/image/kategori/kamera.jpg" alt="kamera" width="341" draggable="false">
						<p class="color-white2 font-opensans-regular">Kamera</p>
						<div class="item-overlay top"></div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 grid-kategori">
				<div class="item">
					<a href="#">
						<img class="img-fluid kategori-1" src="<?=base_url()?>assets/global/image/kategori/kostum.jpg" alt="Kostum" width="341" draggable="false">
						<p class="color-white2 font-opensans-regular">Kostum</p>
						<div class="item-overlay top"></div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 grid-kategori">
				<div class="item">
					<a href="#">
						<img class="img-fluid kategori-1" src="<?=base_url()?>assets/global/image/kategori/tenda.jpg" alt="Tenda" width="341" draggable="false">
						<p class="color-white2 font-opensans-regular">Tenda</p>
						<div class="item-overlay top"></div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 grid-kategori">
				<div class="item">
					<a href="#">
						<img class="img-fluid kategori-1" src="<?=base_url()?>assets/global/image/kategori/trail.jpg" alt="Sepeda Motor" width="341" draggable="false">
						<p class="color-white2 font-opensans-regular">Kendaraan</p>
						<div class="item-overlay top"></div>
					</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 grid-kategori">
				<div class="item">
					<a href="#">
						<img class="img-fluid kategori-2" src="<?=base_url()?>assets/global/image/kategori/catering.jpg" alt="Alat Catering" width="100%" draggable="false">
						<img class="img-fluid kategori-2-sm" src="<?=base_url()?>assets/global/image/kategori/catering-sm.jpg" alt="Alat Catering" width="100%" draggable="false">
						<p class="color-white2 font-opensans-regular">Alat Catering</p>
						<div class="item-overlay top"></div>
					</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 grid-kategori">
				<div class="item">
					<a href="#">
						<img class="img-fluid kategori-2" src="<?=base_url()?>assets/global/image/kategori/mic.jpg" alt="Microphone" width="100%" draggable="false">
						<img class="img-fluid kategori-2-sm" src="<?=base_url()?>assets/global/image/kategori/mic-sm.jpg" alt="Microphone" width="100%" draggable="false">
						<p class="color-white2 font-opensans-regular">Peralatan Panggung</p>
						<div class="item-overlay top"></div>
					</a>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="show-more-kategori text-center">
					<a class="btn btn-show-more font-opensans-bold color-white2">Lihat Semua</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="top" class="top-bg" style="padding-top: 90px;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 grid-top">
				<div class="box-top shadow-lg">
				<div class="col-lg-12 col-md-12 col-sm-12">
				<p class="p-judul text-center font-bebas-neue color-white" id="teratas">SEWA TERATAS</p>
			</div>
					<div class="owl-carousel containerpromo">

					<?php foreach($ListPromosi as $promosi){ ?>
						<div class="content-top">
							<center>
								<img class="img-fluid" src="<?= base_url('assets/user/foto/barang/'.$promosi->nama_jenis."/".$promosi->foto_barang) ?>" alt="">
							</center>
							<h5 class="h5-top color-black font-opensans-regular"><?= $promosi->nama_barang?></h5>
							<h5 class="h5-top-harga color-orange font-opensans-regular">Rp<?= number_format($promosi->harga_barang,2,',','.') ?> / 24 jam</h5>
							<p class="p-kota-top font-opensans-light"><i class="icofont-location-pin"><?= $promosi->kota?></i></p>
							<a href="#">
								<a href="<?=base_url('Home/Detail/'.$promosi->id_barang)?>" class="btn btn-top font-opensans-bold">Lihat Detail</a>
							</a>
						</div>
					<?php } ?>
					</div>

						<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="show-more-kategori text-center">
					<a class="btn btn-show-more font-opensans-bold color-white2" href="<?=base_url()?>Home/Barang">Lihat Semua</a>
				</div>
			</div>

				</div>
			</div>
		</div>
	</div>
</section>
<section id="baru" class="baru-bg" style="padding-top: 90px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<p class="p-judul text-center font-bebas-neue color-blue2" id="sewa_baru">Baru Baru Ini Di Sewa</p>
			</div>

			<?php foreach($ListBarang as $List){ ?>
			<div class="col-lg-4 col-md-4 col-sm-12">
			  <div class="card">
				  <center>
					  <img class="img-fluid card-img-top w-75" src="<?= base_url('assets/user/foto/barang/'.$List->nama_jenis."/".$List->foto_barang) ?>" alt="">
				  </center>
				  <div class="card-body">
					<p class="card-text h5-baru color-black font-opensans-regular text-center"><?= $List->nama_barang ?></p>
					<p class="card-text h5-baru-harga color-orange font-opensans-regular text-center">Rp<?= number_format($List->harga_barang,2,',','.') ?> / 24 jam</p>
					<p class="p-kota-baru font-opensans-light text-center"><i class="icofont-location-pin"><?= $List->kota ?></i></p>
					<a href="#">
			           <a class="btn btn-baru font-opensans-bold" href="<?=base_url('Home/Detail/'.$List->id_barang)?>" >Lihat Detail</a>
					</a>
				  </div>
				</div>
			</div>
			<?php } ?>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="show-more-kategori text-center">	
					<a class="btn btn-show-more font-opensans-bold color-white2" href="<?=base_url()?>Home/Barang"><font color="white">Lihat Semua</font></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="mengapa-bg-parallax hidden-sm" style="padding-top: 70px; margin-top: 90px;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12" >
				<p id="tentang"  class="p-judul text-center font-bebas-neue color-white" style="font-size:50px ; padding-bottom: 70px;">Mengapa Harus Memilih SewaYuk ?</p>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="mengapa-bg-parallax">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 grid-mengapa">
						<img  class="img-fluid" src="<?=base_url()?>assets/global/image/mengapa/barang.png" alt="Barang">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 grid-mengapa">
						<div class="teks-mengapa">
							<h1 class="judul-mengapa color-white2 text-left font-opensans-bold">Berbagai Barang Terlengkap</h1>
							<p class="desk-mengapa color-white2 text-left font-opensans-light">Jelajahi Berbagai Macam Jenis Barang Yang Di Tawarkan Oleh Kami. Mulai dari mobil, motor, kamera, perlengkapan camping, kaset DVD, dan masih banyak lagi barang menarik lainnya.</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 grid-mengapa">
						<div class="teks-mengapa">
							<h1 class="judul-mengapa color-white2 text-right font-opensans-bold">Transaksi Paling Aman</h1>
							<p class="desk-mengapa color-white2 text-left font-opensans-light">Semua transaksi di SewaYuk terjamin keamanannya baik dari sisi penyewa maupun pengguna semua mitra / pemilik toko rental wajib terverifikasi sebelum melakukan transaksi.</p>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 grid-mengapa">
						<img class="img-fluid" src="<?=base_url()?>assets/global/image/mengapa/transaksi.png" alt="Transaksi">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 grid-mengapa">
						<img class="img-fluid" src="<?=base_url()?>assets/global/image/mengapa/murah.png" alt="Murah">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 grid-mengapa">
						<div class="teks-mengapa">
							<h1 class="judul-mengapa color-white2 text-left font-opensans-bold">Harga Yang Terjangkau</h1>
							<p class="desk-mengapa color-white2 text-left font-opensans-light">Dapatkan berbagai jenis barang yang disewakan dengan harga yang terjangkau dan tidak akan menguras isi dompet Anda, gunakan Kategori Sewa untuk menyesuaikan sesuai dengan modal Anda.</p>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</section>
<section id="mengapa" class="mengapa-bg-parallax hidden-md" style="padding-top: 70px; margin-top: 90px;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12" >
				<p class="p-judul text-center font-bebas-neue color-white" style="font-size:50px ; padding-bottom: 70px;">Mengapa Harus Memilih SewaYuk ?</p>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<img class="img-fluid" src="<?=base_url()?>assets/global/image/mengapa/barang.png" alt="Barang">
					</div>
					<div class="col-md-12 col-sm-12">
						<div class="teks-mengapa-sm">
							<h5 class="judul-mengapa-sm color-white2 text-center font-opensans-bold">Berbagai Barang Terlengkap</h5>
							<p class="desk-mengapa-sm color-white2 text-center font-opensans-light">Jelajahi Berbagai Macam Jenis Barang Yang Di Tawarkan Oleh Kami. Mulai dari mobil, motor, kamera, perlengkapan camping, kaset DVD, dan masih banyak lagi barang menarik lainnya.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<img class="img-fluid" src="<?=base_url()?>assets/global/image/mengapa/transaksi.png" alt="Transaksi">
					</div>
					<div class="col-md-12 col-sm-12">
						<div class="teks-mengapa-sm">
							<h5 class="judul-mengapa-sm color-white2 text-center font-opensans-bold">Transaksi Paling Aman</h5>
							<p class="desk-mengapa-sm color-white2 text-center font-opensans-light">Semua transaksi di SewaYuk terjamin keamanannya baik dari sisi penyewa maupun pengguna semua mitra / pemilik toko rental wajib terverifikasi sebelum melakukan transaksi.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<img class="img-fluid" src="<?=base_url()?>assets/global/image/mengapa/murah.png" alt="Murah">
					</div>
					<div class="col-md-12 col-sm-12">
						<div class="teks-mengapa-sm">
							<h5 class="judul-mengapa-sm color-white2 text-center font-opensans-bold">Harga Yang Terjangkau</h5>
							<p class="desk-mengapa-sm color-white2 text-center font-opensans-light">Dapatkan berbagai jenis barang yang disewakan dengan harga yang terjangkau dan tidak akan menguras isi dompet Anda, gunakan Kategori Sewa untuk menyesuaikan sesuai dengan modal Anda.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="dibalik" class="dibalik-bg" style="padding-top: 90px; padding-bottom: 90px;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<p class="p-judul text-center font-bebas-neue color-blue2">Orang Di Balik Sewa Yuk</p>
			</div>
            <div class="col-lg-3 col-md-3 col-sm-12">
				<div class="team-member">
					<div class="team-img">
						<center>
							<img src="<?=base_url()?>assets/global/image/profil/CEO.jpg" alt="team member" class="img-fluid">
						</center>
					</div>
					<div class="team-hover">
						<div class="desk">
							<h4 class="font-opensans-regular">Caption</h4>
							<p class="font-opensans-light">" Kemenangan Sejati Ialah Bangkit Dari Kekalahan "</p>
						</div>
						<div class="s-link">
							<a href="#"><i class="icofont-facebook"></i></a>
							<a href="#"><i class="icofont-instagram"></i></a>
							<a href="#"><i class="icofont-whatsapp"></i></a>
						</div>
					</div>
				</div>
				<div class="team-title text-center">
					<h5> Kurniadi Ahmad Wijaya</h5>
					<span>CEO</span>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12">
				<div class="team-member">
					<div class="team-img">
						<center>
							<img src="<?=base_url()?>assets/global/image/profil/CTO.jpg" alt="team member" class="img-fluid">
						</center>
					</div>
					<div class="team-hover">
						<div class="desk">
							<h4 class="font-opensans-regular">Caption</h4>
							<p class="font-opensans-light">" Kemenangan Sejati Ialah Bangkit Dari Kekalahan "</p>
						</div>
						<div class="s-link">
							<a href="#"><i class="icofont-facebook"></i></a>
							<a href="#"><i class="icofont-instagram"></i></a>
							<a href="#"><i class="icofont-whatsapp"></i></a>
						</div>
					</div>
				</div>
				<div class="team-title text-center">
					<h5> Muhammad Rezki Ananda</h5>
					<span>CTO</span>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12">
				<div class="team-member">
					<div class="team-img">
						<center>
							<img src="<?=base_url()?>assets/global/image/profil/COO.jpg" alt="team member" class="img-fluid">
						</center>
					</div>
					<div class="team-hover">
						<div class="desk">
							<h4 class="font-opensans-regular">Caption</h4>
							<p class="font-opensans-light">" Kemenangan Sejati Ialah Bangkit Dari Kekalahan "</p>
						</div>
						<div class="s-link">
							<a href="#"><i class="icofont-facebook"></i></a>
							<a href="#"><i class="icofont-instagram"></i></a>
							<a href="#"><i class="icofont-whatsapp"></i></a>
						</div>
					</div>
				</div>
				<div class="team-title text-center">
					<h5>Naufal Atha Haidarbahy</h5>
					<span>COO</span>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12">
				<div class="team-member">
					<div class="team-img">
						<center>
							<img src="<?=base_url()?>assets/global/image/profil/CMO.jpeg" alt="team member" class="img-fluid">
						</center>
					</div>
					<div class="team-hover">
						<div class="desk">
							<h4 class="font-opensans-regular">Caption</h4>
							<p class="font-opensans-light">" Kebahagian Tidak Membutuhkan Penilaian Orang Lain "</p>
						</div>
						<div class="s-link">
							<a href="#"><i class="icofont-facebook"></i></a>
							<a href="#"><i class="icofont-instagram"></i></a>
							<a href="#"><i class="icofont-whatsapp"></i></a>
						</div>
					</div>
				</div>
				<div class="team-title text-center">
					<h5>Almira Rahma Sabita</h5>
					<span>CMO</span>
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
	<div id="kontak"></div>
</footer>
</body>

<script type="text/javascript" src="<?=base_url()?>assets/global/js/jquery/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/global/js/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/global/js/owl-carousel/owl.carousel.min.js"></script>
	<script>
	function closeNav() {
    document.getElementById("Sidenav").style.height = "0";
	}

	document.querySelectorAll('a[href^="#"]').forEach(anchor => {
		anchor.addEventListener('click', function (e) {
			e.preventDefault();

			document.querySelector(this.getAttribute('href')).scrollIntoView({
				behavior: 'smooth'
			});
		});
	});

	$('.owl-carousel').owlCarousel({
		loop:true,
		navigation:false,
		nav:false,
		margin:30,
		responsiveClass:true,
		autoplay:true,
		autoplayTimeout:1500,
		autoplayHoverPause:true,
		responsive:{
			0:{
				items:1,
				nav:true,
				loop:true
				
			},
			600:{
				items:3,
				nav:true,
				loop:true
			},
			1000:{
				items:5,
				nav:true,
				loop:true
			}
		}
	})
	</script>
	
</html>