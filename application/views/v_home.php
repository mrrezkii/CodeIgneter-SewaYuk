<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
		<?= $title ?>
	</title>
	<link rel="icon" href="<?=base_url()?>assets/global/image/logo.png" type="image/png" width="40px" height="auto">
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/custom/home.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/bootstrap.css" />
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
	 crossorigin="" />

	<!-- Make sure you put this AFTER Leaflet's CSS -->
	<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
	 crossorigin=""></script>
</head>

<body>

	<style>
		body {
			margin: 0;
		}
	</style>

	<!doctype html>
	<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>Sewa Yuk</title>
		<link rel="stylesheet" type="text/css" href="includes/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="includes/icofont/icofont.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/font-open-sans.css">
		<script type="text/javascript" src="assets/js/jquery-3.3.1.js"></script>
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-white shadow">
			<div class="col-1">
				<a href="index.php"><img class="img-fluid navbar-brand" src="assets/img/logo.png" alt="Logo Sewa Yuk" width="60px"></a>
			</div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			 aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a data-scroll class="nav-link font-opensans-bold" href="index.html">Beranda</a>
					</li>
					<li class="nav-item">
						<a data-scroll class="nav-link font-opensans-bold" href="index.html">Sewa</a>
					</li>
					<li class="nav-item">
						<a data-scroll class="nav-link font-opensans-bold" href="index.html">Sewa</a>
					</li>
					<li class="nav-item">
						<a data-scroll class="nav-link font-opensans-bold" href="index.html">Sewa</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">
							<img class="img-fluid" src="assets/img/rounded account.png" alt="Rounded account">
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link font-opensans-bold" href="#">Login</a>
					</li>
				</ul>
			</div>
		</nav>
		<section id="intro" class="intro-bg">
			<div class="container-fluid">
				<div class="row">


				</div>
		</section>
		<hr>
		<section id="hotsale" class="hotsale-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h5 class="text-left">Hot Sale</h5>
					</div>
					<div class="col-md-3">
						<h5 class="text-center border border-info">Box 1</h5>
					</div>
					<div class="col-md-3">
						<h5 class="text-center border border-info">Box 2</h5>
					</div>
					<div class="col-md-3">
						<h5 class="text-center border border-info">Box 3</h5>
					</div>
					<div class="col-md-3">
						<h5 class="text-center border border-info">Box 4</h5>
					</div>
				</div>
			</div>
		</section>
		<hr>
		<section id="category" class="category-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h5 class="text-left">Category</h5>
					</div>
					<div class="col-md-3 p-0 ">
						<h5 class="text-center border border-info">Box 1</h5>
					</div>
					<div class="col-md-3 p-0">
						<div class="row">
							<div class="col-md-12">
								<h5 class="text-center border border-info">Box 2a</h5>
							</div>
							<div class="col-md-12">
								<h5 class="text-center border border-info">Box 2b</h5>
							</div>
						</div>
					</div>
					<div class="col-md-3 p-0">
						<h5 class="text-center border border-info">Box 3</h5>
					</div>
					<div class="col-md-3 p-0">
						<h5 class="text-center border border-info">Box 4</h5>
					</div>
					<div class="col-md-12">
						<p class="text-right">See more</p>
					</div>
				</div>
			</div>
		</section>
		<hr>
		<section id="recent" class="recent-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h5 class="text-left">Baru baru di sewa</h5>
					</div>
					<div class="col-md-4">
						<h5 class="text-center border border-info">Box 1</h5>
					</div>
					<div class="col-md-4">
						<h5 class="text-center border border-info">Box 2</h5>
					</div>
					<div class="col-md-4">
						<h5 class="text-center border border-info">Box 3</h5>
					</div>
					<div class="col-md-4">
						<h5 class="text-center border border-info">Box 4</h5>
					</div>
					<div class="col-md-4">
						<h5 class="text-center border border-info">Box 5</h5>
					</div>
					<div class="col-md-4">
						<h5 class="text-center border border-info">Box 6</h5>
					</div>
					<div class="col-md-12">
						<p class="text-center">See more</p>
					</div>
				</div>
			</div>
		</section>
		<hr>
		<section id="whyuse" class="whyuse-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<h5 class="text-left">Mengapa memilih sewa yuk ?</h5>
					</div>
					<div class="col-md-4">
						<h5 class="text-center border border-info">Box 1</h5>
					</div>
					<div class="col-md-4">
						<h5 class="text-center border border-info">Box 2</h5>
					</div>
					<div class="col-md-4">
						<h5 class="text-center border border-info">Box 3</h5>
					</div>
				</div>
			</div>
		</section>
		<hr>
		<section id="footer" class="footer-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 offset-md-3">
						<h1 class="pt-5 text-center">Footer</h1>
					</div>
				</div>
			</div>
		</section>
	</body>
	<script type="text/javascript" src="includes/bootstrap/js/bootstrap.min.js"></script>

	</html>


	<div class="wrapper tujuan" id="tujuan">
		<div>
			<h1>Mengapa Harus SewaYuk ?</h1>
			<section class="columns">
				<div class="column" data-aos-delay="500" data-aos="fade-right" data-aos-duration="1000"><img class="img-center" src="<?=base_url()?>assets/global/image/goods.png"
					 width="100" height="100" alt="">
					<h4><strong>Berbagai Barang Terlengkap</strong></h4>
					<p>Jelajahi Berbagai Macam Jenis Barang Yang Di Tawarkan Oleh Kami. Mulai dari mobil, motor, kamera, perlengkapan camping,
						kaset DVD, dan masih banyak lagi barang menarik lainnya.</p>
				</div>
				<div class="column" data-aos-delay="1500" data-aos="fade-right" data-aos-duration="1000"><img class="img-center" src="<?=base_url()?>assets/global/image/shield.png"
					 width="100" height="100" alt="hutan-hijau">
					<h4><strong>Transaksi Paling Aman</strong></h4>
					<p>Semua transaksi di SewaYuk terjamin keamanannya baik dari sisi penyewa maupun pengguna semua mitra / pemilik toko
						rental wajib terverifikasi sebelum melakukan transaksi.</p>
				</div>
				<div class="column" data-aos-delay="2500" data-aos="fade-right" data-aos-duration="1200"><img class="img-center" src="<?=base_url()?>assets/global/image/pay-per-click.png"
					 width="100" height="100" alt="hutan-hijau">
					<h4><strong>Harga Yang Terjangkau</strong></h4>
					<p>Dapatkan berbagai jenis barang yang disewakan dengan harga yang terjangkau dan tidak akan menguras isi dompet anda,
						gunakan fitur untuk menyesuaikan sesuai dengan modal anda.</p>
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
								<p class="p-kontak font-nexa-light text-white">Jl. Danau Ranau, Sawojajar, Kedungkandang, Kota Malang, Jawa Timur
									65139
								</p>
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
	}
	];

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


</html>