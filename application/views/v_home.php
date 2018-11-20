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
<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white shadow">
	<div class="col-lg-1 col-md-6 col-sm-6">
		<a href="index.php"><img class="img-fluid navbar-brand icon-nav" src="<?=base_url()?>assets/global/image/logo.png" alt="Logo Sewa Yuk" width="60px"></a>
		<a href="index.php"><img class="img-fluid navbar-brand icon-nav-sm" src="<?=base_url()?>assets/global/image/Logo with tagline.png" alt="Logo Sewa Yuk"></a>
		
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
<section id="beranda" class="beranda-bg hidden-sm">
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
			<div class="col-md-12 col-sm-12">
				<p class="p-intro-sm font-opensans-bold color-white text-center">Sewa Barang Idaman Anda di SEWAYUK</p>
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
</section>
<section id="kategori" class="kategori-bg" style="padding-top: 90px;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<p class="p-judul text-center font-bebas-neue color-blue2">Kategori</p>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 grid-kategori">
				<div class="item">
					<a href="#">
						<img class="img-fluid kategori-1" src="<?=base_url()?>assets/global/image/kategori/kamera.jpg" alt="kamera" width="341" draggable="false">
						<p class="color-white2 font-sunshine">Kamera</p>
						<div class="item-overlay top"></div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 grid-kategori">
				<div class="item">
					<a href="#">
						<img class="img-fluid kategori-1" src="<?=base_url()?>assets/global/image/kategori/kostum.jpg" alt="Kostum" width="341" draggable="false">
						<p class="color-white2 font-sunshine">Kostum</p>
						<div class="item-overlay top"></div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 grid-kategori">
				<div class="item">
					<a href="#">
						<img class="img-fluid kategori-1" src="<?=base_url()?>assets/global/image/kategori/tenda.jpg" alt="Tenda" width="341" draggable="false">
						<p class="color-white2 font-sunshine">Tenda</p>
						<div class="item-overlay top"></div>
					</a>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-6 grid-kategori">
				<div class="item">
					<a href="#">
						<img class="img-fluid kategori-1" src="<?=base_url()?>assets/global/image/kategori/trail.jpg" alt="Sepeda Motor" width="341" draggable="false">
						<p class="color-white2 font-sunshine">Sepeda Motor"</p>
						<div class="item-overlay top"></div>
					</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 grid-kategori">
				<div class="item">
					<a href="#">
						<img class="img-fluid kategori-2" src="<?=base_url()?>assets/global/image/kategori/catering.jpg" alt="Alat Catering" width="100%" draggable="false">
						<p class="color-white2 font-sunshine">Alat Catering</p>
						<div class="item-overlay top"></div>
					</a>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 grid-kategori">
				<div class="item">
					<a href="#">
						<img class="img-fluid kategori-2" src="<?=base_url()?>assets/global/image/kategori/mic.jpg" alt="Microphone" width="100%" draggable="false">
						<p class="color-white2 font-sunshine">Microphone</p>
						<div class="item-overlay top"></div>
					</a>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="show-more-kategori text-center">
					<button class="btn btn-show-more font-opensans-bold color-white2">Lihat Semua</button>
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
				<p class="p-judul text-center font-bebas-neue color-white">Top Sewa</p>
			</div>
					<div class="owl-carousel">

					<?php foreach($ListPromosi as $promosi){ ?>
						<div class="content-top">
							<center>
								<img class="img-fluid" src="<?= base_url("assets/user/foto/barang/".$List->foto_barang)?>" alt="700d">
							</center>
							<h5 class="h5-top color-black font-opensans-regular"><?= $promosi->nama_barang?></h5>
							<h5 class="h5-top-harga color-orange font-opensans-regular">Rp<?= number_format($promosi->harga_barang,2,',','.') ?> / 24 jam</h5>
							<p class="p-kota-top font-opensans-light"><i class="icofont-location-pin"><?= $promosi->kota?></i></p>
							<a href="#">
								<a href="<?=base_url('Home/Detail/'.$List->id_barang)?>" class="btn btn-top font-opensans-bold">Lihat Detail</a>
							</a>
						</div>
					<?php } ?>
					</div>

						<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="show-more-kategori text-center">
					<button class="btn btn-show-more font-opensans-bold color-white2">Lihat Semua</button>
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
				<p class="p-judul text-center font-bebas-neue color-blue2">Baru Baru Ini Di Sewa</p>
			</div>

			<?php foreach($ListBarang as $List){ ?>
			<div class="col-lg-4 col-md-4 col-sm-12">
			  <div class="card" style="width: 18rem;">
				  <center>
					  <img class="img-fluid card-img-top w-75" src="<?= base_url("assets/user/foto/barang/".$List->foto_barang)?>" alt="700d">
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
					<button class="btn btn-show-more font-opensans-bold color-white2">Lihat Semua</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="mengapa" class="mengapa-bg" style="padding-top: 90px;" >
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<p class="p-judul text-center font-bebas-neue color-blue2">Mengapa Harus Memilih SewaYuk ?</p>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 grid-mengapa">
				<img class="img-fluid" src="<?=base_url()?>assets/global/image/mengapa/barang.png" alt="Barang">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 grid-mengapa">
				<div class="teks-mengapa">
					<h1 class="judul-mengapa color-black2 text-left font-opensans-bold">Berbagai Barang Terlengkap</h1>
					<p class="desk-mengapa color-black2 text-left font-opensans-light">Jelajahi Berbagai Macam Jenis Barang Yang Di Tawarkan Oleh Kami. Mulai dari mobil, motor, kamera, perlengkapan camping, kaset DVD, dan masih banyak lagi barang menarik lainnya.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 grid-mengapa">
				<div class="teks-mengapa">
					<h1 class="judul-mengapa color-black2 text-right font-opensans-bold">Transaksi Paling Aman</h1>
					<p class="desk-mengapa color-black2 text-left font-opensans-light">Semua transaksi di SewaYuk terjamin keamanannya baik dari sisi penyewa maupun pengguna semua mitra / pemilik toko rental wajib terverifikasi sebelum melakukan transaksi.</p>
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
					<h1 class="judul-mengapa color-black2 text-left font-opensans-bold">Harga Yang Terjangkau</h1>
					<p class="desk-mengapa color-black2 text-left font-opensans-light">Dapatkan berbagai jenis barang yang disewakan dengan harga yang terjangkau dan tidak akan menguras isi dompet anda, gunakan Kategori Sewa untuk menyesuaikan sesuai dengan modal anda.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="dibalik" class="dibalik-bg" style="padding-top: 90px;">
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
</footer>
</body>
<script type="text/javascript" src="<?=base_url()?>assets/global/js/jquery/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/global/js/bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/global/js/owl-carousel/owl.carousel.min.js"></script>
	<script>
	$('.owl-carousel').owlCarousel({
		loop:true,
		navigation:false,
		nav:false,
		margin:30,
		responsiveClass:true,
		autoplay:true,
		autoplayTimeout:2000,
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
	<script>
		$(function() {
		  $('a[href*=#]').on('click', function(e) {
			e.preventDefault();
			$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
		  });
		});
	</script>
</html>