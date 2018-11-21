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
	<link rel="stylesheet" type="text/css" media="screen" href="<?=base_url()?>assets/global/css/custom/transaksi.css" />
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/global/fonts/icofont/icofont.min.css" />
</head>
<body>
<section id="status" class="status-bg">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div id="aktif">
					<div class="card spacingCardDetailFitur">
						<div class="card-header" id="fiturSatu">
						  <h5 class="mb-0">
							<i class="icofont-verification-check"></i>
							<button class="btn collapsed font-opensans-bold color-blue" data-toggle="collapse" data-target="#collapseFiturSatu" aria-expanded="false" aria-controls="collapseFiturSatu">
							  Aktif
							</button>
							<button class="btn collapsed float-right color-blue2" data-toggle="collapse" data-target="#collapseFiturSatu" aria-expanded="false" aria-controls="collapseFiturSatu">
							  <i class="icofont-rounded-down"></i>
							</button>
						  </h5>
						</div>
						<div id="collapseFiturSatu" class="collapse" aria-labelledby="fiturSatu" data-parent="#aktif">
						  <div class="card-body">
							Sudah Aktif
						  </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div id="tidakaktif">
					<div class="card spacingCardDetailFitur">
						<div class="card-header" id="fiturSatu">
						  <h5 class="mb-0">
							<i class="icofont-close"></i>
							<button class="btn collapsed font-opensans-bold color-blue" data-toggle="collapse" data-target="#collapseFiturSatu" aria-expanded="false" aria-controls="collapseFiturSatu">
							  Belum Aktif
							</button>
							<button class="btn collapsed float-right color-blue2" data-toggle="collapse" data-target="#collapseFiturSatu" aria-expanded="false" aria-controls="collapseFiturSatu">
							  <i class="icofont-rounded-down"></i>
							</button>
						  </h5>
						</div>
						<div id="collapseFiturSatu" class="collapse" aria-labelledby="fiturSatu" data-parent="#tidakaktif">
						  <div class="card-body">
							Belum Aktif
						  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</body>
	<script type="text/javascript" src="<?=base_url()?>assets/global/js/jquery/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/global/js/bootstrap/bootstrap.min.js"></script>
</html>