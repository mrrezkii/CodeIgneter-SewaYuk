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
<div class="modal fade" id="pesan_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	<?php  $this->session->flashdata('pesan_barang') ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
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
		<div  id="Sidenav"></div>
		<ul class="navbar-nav mr-auto collapse-md">
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="<?=base_url()?>home/#home">Beranda</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="<?=base_url()?>home/#kategori_barang">Kategori</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="home/#teratas">Sewa Teratas</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="home/#sewa_baru">Baru Disewa</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="home/#tentang">Tentang</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="home/#kontak">Kontak Kami</a>
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
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="<?=base_url()?>home/#home">Beranda</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="<?=base_url()?>home/#kategori_barang">Kategori</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent"  href="<?=base_url()?>home/#teratas">Sewa Teratas</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="<?=base_url()?>home/#sewa_baru">Baru Disewa</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="<?=base_url()?>home/#tentang">Tentang</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="<?=base_url()?>home/#kontak">Kontak Kami</a>
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
				<a data-scroll class="nav-link font-opensans-bold" href="<?=base_url()?>home/#home">Beranda</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="<?=base_url()?>home/#kategori_barang">Kategori</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="home/#teratas">Sewa Teratas</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="home/#sewa_baru">Baru Disewa</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="home/#tentang">Tentang</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" href="home/#kontak">Kontak Kami</a>
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
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="<?=base_url()?>home/#home">Beranda</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="<?=base_url()?>home/#kategori_barang">Kategori</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent"  href="<?=base_url()?>home/#teratas">Sewa Teratas</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="<?=base_url()?>home/#sewa_baru">Baru Disewa</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="<?=base_url()?>home/#tentang">Tentang</a>
			</li>
			<li class="nav-item">
				<a data-scroll class="nav-link font-opensans-bold" data-toggle="collapse" data-target="#navbarSupportedContent" href="<?=base_url()?>home/#kontak">Kontak Kami</a>
			</li>
		</ul>
		

		
	</div>
</nav>
<?php endif ?>

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
							<a class="btn btn-baru font-opensans-bold" href="<?= base_url('home/Detail/'.$List->id_barang) ?>">Lihat</button>
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
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h4 class="font-opensans-bold color-white2">Sewa Yuk Mudah Praktik dan Asyik</h4>
				<p class="footer-links">
					<a class="link-1" href="#">Home</a>
					<a href="#">Blog</a>
					<a href="#">About</a>
					<a href="#">Faq</a>
					<a href="#">Contact</a>
				</p>	
				<br><br>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="footer-right2">
					<p class="font-opensans-regular color-white2" style="font-size: 20px;"><i class="icofont-email pr-3"></i>support@sewa-yuk.com</p>
					<p class="font-opensans-regular color-white2" style="font-size: 20px;"><i class="icofont-globe pr-3"></i>www.sewa-yuk.com</p>
					<p class="font-opensans-regular color-white2" style="font-size: 20px;"><i class="icofont-ui-call pr-3"></i>+6281252678281</p>
					</div>
				</div>
			</div>
			<hr style="background-color: white">
			<div class="footer-left">
				<p>SewaYuk &copy; 2018. All Right Reserved</p>
			</div>
			<div class="footer-right">
				<a href="https://www.instagram.com/sewayukofficial/"><i class="icofont-instagram"></i></a>
				<a href="https://api.whatsapp.com/send?phone=628124047478"><i class="icofont-whatsapp"></i></a>
				<a href="https://goo.gl/maps/Mq7Bdi8JxRv"><i class="icofont-google-map"></i></a>
			</div>

		</footer>
			</div>
		</div>
	</div>
	<div id="kontak"></div>
</footer>
<script>
	<script type="text/javascript" src="<?=base_url()?>assets/global/js/jquery/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/global/js/bootstrap/bootstrap.min.js"></script>
<?php
        if($this->session->flashdata('pesan_barang') != ''){
    ?>

<script>
	$(document).ready(function () {
		$("#pesan_barang").modal();
	});

</script>

<?php
        }
    ?>
</script>
</body>
</html>
