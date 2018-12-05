<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
		<?=$title?>
	</title>
    <link rel="icon" href="<?=base_url()?>assets/global/image/logo.png" type="image/png" width="40px" height="auto">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/css/font-home.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/fonts.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/custom/detail.css" />
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/fonts/icofont/icofont.min.css" />
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/custom/home.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/custom/mediaquery_detailbarang.css" />
	<!--    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"-->
	<!--          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="-->
	<!--          crossorigin=""/>-->
</head>

<body style="background: #eee">
<div class="alert alert-primary" style="background-color:#3D80C1; border-radius:10px; border:2px white solid;">
					<h5 style="color:white;" class="text-center">
						<?php echo $this->session->flashdata('pesan')?>
					</h5>	
				</div>
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
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="index.html">Beranda</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="index.html">Barang Sewa</a>
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
				<a data-scroll class="nav-link font-opensans-bold" href="index.html">Tentang</a>
			</li>
		</ul>

		<ul class="navbar-nav ml-auto">
			<!-- <li class="nav-item">
				<a href="#index.php">
					<li class="icofont-cart color-blue" style="font-size: 25px;margin-top: 8px;">
					</li>
				</a>
			</li>  -->
			<li class="nav-item dropdown">
        		<a class="nav-link dropdown-toggle font-opensans-bold " href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<?=$this->session->userdata('nama_user')?> &nbsp;	
				<?php if($this->session->userdata('foto_profil') != NULL ) : ?>
				<img class="img-fluid" src="<?=base_url("assets/user/foto/profil/".$this->session->userdata('foto_profil'))?>" alt="Rounded account" width="40" style="border-radius: 50%">
				<?php else: ?>	
				<img class="img-fluid" src="<?= base_url() ?>assets/admin/images/user.png" alt="Rounded account" width="22" style="border-radius: 50%">
				<?php endif ?>	
				
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown02"> 	 	
					<a class="dropdown-item" href="<?=base_url("assets/user/foto/profil/".$this->session->userdata('foto'))?>">Profil</a>
					<?php if($this->session->userdata('status')== "Admin"): ?>
					<a class="dropdown-item" href="<?=base_url()?>Admin">Laman Admin</a>
					<?php endif ?>
					<a class="dropdown-item" href="<?=base_url()?>transaksi">Transaksi</a>
				  	<div class="dropdown-divider"></div>
				  	<a class="dropdown-item" href="<?=base_url()?>user/logout">Logout</a>
				</div>
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
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="index.html">Beranda</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="index.html">Barang Sewa</a>
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
				<a data-scroll class="nav-link font-opensans-bold" href="index.html">Tentang</a>
			</li>
		</ul>

		<ul class="navbar-nav ml-auto">
			<!-- <li class="nav-item">
				<a href="#index.php">
					<li class="icofont-cart color-blue" style="font-size: 25px;margin-top: 8px;">
					</li>
				</a>
			</li> -->
			
			<li class="nav-item dropdown">
        		<a class="nav-link dropdown-toggle font-opensans-bold " href="<?=base_url()?>user/login" aria-haspopup="true" aria-expanded="false">
					<img class="img-fluid" src="<?=base_url()?>assets/global/image/rounded account.png" alt="Rounded account">
					Login
				</a>
		
     		</li>
		</ul>
	</div>
</nav>
<?php endif ?>

	<div class="main-detail" style="padding-bottom 65px">
		<br><br>
		<?php foreach($DetailBarang as $detail): ?>

		 <form action="<?=base_url('transaksi/sewa_barang')?>" method="post">
		<input type="hidden" name="id_barang" id="id_barang" value=" <?= $detail->id_barang ?>">
		
		<div id="main-content" class="container" style="">
			<div class="main-container">
				<div class="header">

					<!-- <p>Rating : <span class="bintang">
							<?= $detail->rating ?></span>
						<div style="margin-top:5px; margin-left:0px; padding:0;" id="rateYo"></div>
					</p> -->

					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6">
							<h1 id="nama-museum"><b>
                                    <?= $detail->nama_barang ?></b>
							</h1>
							<img class="img-fluid img-detailfoto" src="<?= base_url('assets/user/foto/barang/'.$detail->nama_jenis."/".$detail->foto_barang) ?>" alt="" style="background: url('<?= base_url('assets/user/foto/barang/'.$detail->nama_jenis."/".$detail->foto_barang) ?>');background-size: cover; background-repeat: no-repeat; min-height: 400px; width: 100%; background-position: center; max-height: 401px;box-shadow: 0 0 4px rgba(33,33,33,0.60);"> 
								
							
						</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="padding-content-detailbarang">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<h6><i class="icofont-phone" aria-hidden="true"></i> Telepon :</h6>
									<p class="text-infor">
										<?= $detail->telepon ?>
									</p>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12">
									<h6><i class="icofont-email" aria-hidden="true"></i> Email :</h6>
									<p class="text-infor">
										<?= $detail->email ?>
									</p>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12">
									<h6><i class="icofont-globe" aria-hidden="true"></i> Daerah :</h6>
									<p class="text-infor">
										<?= $detail->kota ?> , <?= $detail->provinsi ?>
										</p>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12">
									<h6><i class="icofont-address-book"</" aria-hidden="true"></i> Alamat :</h6>
                                    <p class="text-infor">
										<?= $detail->alamat ?> 
									</p>
								</div>
							</div>
						</div>
						
					</div>
					</div>
				</div>
				<div class="main">
                    <br>
					<h4>Deskripsi Barang :</h4>
					<p>
						<?= $detail->deskripsi_barang ?>
					</p>
					<!-- <section class="Gallery">
						<h4>Galeri Museum</h4>

						<div class="galeri-owl owl-carousel owl-theme" style="z-index: 20">

							<?php foreach($getGaleriMuseum as $galeri): ?>
							<div class="item"><img src="<?=base_url('assets/global/image/galeri_museum/'.$galeri->foto)?>"></div>
							<?php endforeach ?>

						</div>
					</section> -->
					<section class="location-detail">
						<h4>Lokasi Penyewa</h4>
						<p>
							<span class="icofont-marke"></span>
							<span id="lokasi-museum"></span>
						</p>
						<div id="map" style="width: 100%; height: 600px">
						</div>
					</section>
				</div>
			</div>
		</div>


	</div>
	<div class="footer-book">
		<div class="row no-gutters">
			<div class="col-md-9 col-6">
				<div class="sub-main">
					<h5><b>Rp
							<?= number_format($detail->harga_barang,2,',','.') ?></b><span style="font-size: 13px">/24 Jam</span></h5>
				</div>
			</div>
			<div class="col-md-3 col-6">
			&nbsp; &nbsp; <input type="submit" name="tambah" value="Pesan Barang" class="btn btn-primary">
			</div>
		</div>
	</div>

<div id="pesan" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background:transparent;">
	<div class="container ticketcontainer">
                        <div class="row">
                            <div class="col-md-8 ">
                                <div class="container">
                                    <h5 class="title"><i class="fa fa-ticket" aria-hidden="true"></i> Pesan Barang
                                     sekarang juga !</h5>
                                </div>
                            </div>

                            <div class="col-md-6 contenttransaksi">
                                <div class="container">
                                    <form class="form1">
                                        <label class="inp">
                                            <input type="text" id="inp" value="<?= $this->session->userdata('nama_user') ?>" disabled>
                                            <span class="label">Nama Pemesan</span>
                                            <span class="border"></span>
                                        </label>
                                        <label class="inp">
                                            <input type="text" nama="nama_museum" id="tujuan" value="<?= $detail->nama_museum ?>" disabled>
                                            <span class="label">Tujuan Museum</span>
                                            <span class="border"></span>
                                        </label>
                                       

                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 contenttransaksi2">
                                <div class="container">
                                    <form class="form1">
                                        <label class="inp">
                                            <input nama="tanggal_pesan" type="date" id="date" value="<?= date("Y-m-d") ?>">
                                            <span class="label">Tanggal Pemesanan</span>
                                            <span class="border"></span>
                                        </label>


                                         <label class="inp">
                                            <input nama="harga_tiket" type="text" id="hargatiket" value="Rp<?= number_format($detail->harga_tiket,2,',','.') ?>" disabled/>
                                            <span class="label">Harga Tiket</span>
                                            <span class="border"></span>
                                        </label>
                                    </form>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="container">
                                    <button id="but-pesan" class="btn btn-primary btntransaksi">Pesan Tiket</button>
                                </div>
                            </div>
                        </div>
					</div>
			</form>
    </div>
  </div>
</div>
</body>

<script type="text/javascript" src="<?=base_url()?>assets/global/js/jquery/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/global/js/bootstrap/bootstrap.min.js"></script>
<script src='https://api.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.js'></script>
<script>
    $("#but-pesan").click(function () {
        $("#pesan").modal('hide');
        $("#notification-number").html(1).css("display", "block");
        $("#notif-dalam").html(1);
        $("#notif-dalam-1").html(1);
    });
	$("#main-bg").css("opacity", "0");
	$("#main-content").css("opacity", "0");

    $(".top-nav").addClass("animated fadeInDown");
	setTimeout(function () {
		$("#main-bg").addClass("animated fadeIn").css("opacity", "1")
	}, 700);
	setTimeout(function () {
		$("#main-content").addClass("animated fadeInUp").css("opacity", "1")
	}, 900);
	var namaMuseum = $("#nama-museum").text();
	var tengah;
	$.ajax({
		url: 'https://api.mapbox.com/geocoding/v5/mapbox.places/' + namaMuseum +
			'.json?access_token=pk.eyJ1IjoiYnVrYW5hdmF0YXIiLCJhIjoiY2puNzB5OG9wMDVrdzNycGJobWd2N2R1eSJ9.TMl0SshQNLbz9tw0-OHITQ&country=id',
		method: 'GET',
		success: function (data) {
			console.log(data);
			console.log(data.place_name);
			$("#lokasi-museum").html(data.features[0].place_name);
			tengah = data.features[0].center;
			mapboxgl.accessToken =
				'pk.eyJ1IjoiYnVrYW5hdmF0YXIiLCJhIjoiY2puNzB5OG9wMDVrdzNycGJobWd2N2R1eSJ9.TMl0SshQNLbz9tw0-OHITQ';
			var map = new mapboxgl.Map({
				container: 'map',
				style: 'mapbox://styles/mapbox/streets-v10',
				zoom: 16,
				center: tengah
			});
			map.on("load", function () {
				map.loadImage("https://i.imgur.com/MK4NUzI.png", function (error, image) {
					if (error) throw error;
					map.addImage("custom-marker", image);
					map.addLayer({
						id: "markers",
						type: "symbol",
						source: {
							type: "geojson",
							data: {
								type: "FeatureCollection",
								features: [{
									"type": "Feature",
									"geometry": {
										"type": "Point",
										"coordinates": tengah
									}
								}]
							}
						},
						layout: {
							"icon-image": "custom-marker",
						}
					});
				});
			});
		}
	});
</script>

<?php endforeach ?>

</html>