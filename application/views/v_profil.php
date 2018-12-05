<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="icon" href="<?= base_url() ?>assets/image/icon.png" type="image/png" width="40px" height="auto">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/animate.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/fonts.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/font-awesome.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url() ?>assets/global/css/custom/profile.css"/>
</head>
<body>
<?php foreach($data_user as $user): ?>
                
<div class="container container-profile">

    <span style="color: white">
        <a href="<?= base_url() ?>">
        <font color="white"><i class="icofont-arrow-left"></i> <b>Kembali</b></font>
        </a>
    </span>

      <div class="image-profile">
        <?php if ($user->foto_profil != NULL): ?>
            <img class="rounded-circle"
                 src="<?= base_url("assets/user/foto/profil/".$user->foto_profil) ?>" alt="profil">
        <?php else: ?>
            <img src="<?= base_url() ?>assets/admin/images/user.png" alt="..." style="border-radius:100%;">
        <?php endif ?>
    </div>
    
    <div class="card-profile">
    

        <div class="row">
            <div class="col-12">
                <p class="nama-profil"><b><?= $user->nama_user ?></b></p>
                <hr class="hr-profile">
            </div>
            
            <div class="col-12">
                <center><a href="<?= base_url("user/edit_profil/".$user->id_user) ?>"><button class="btn btn-primary"><b>Edit Data</b></button></a></center>
            </div>
            
            <div class="col-12">
             <?php if($this->session->flashdata('pesan_sukses')==TRUE){?>
                <br>
        <div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><?= $this->session->flashdata('pesan_sukses') ?> </strong>
</div>
              <?php } else if($this->session->flashdata('pesan_gagal')==TRUE){?>
                <br>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong><?= $this->session->flashdata('pesan_gagal'); ?></strong>
                  </div>
                <?php }?>
                </div>

            <div class="col-md-6">
                <div class="content-profile">
                    <h4>Email :</h4>
                    <p class="background"><?= $user->email ?></p>
                </div>
                <div class="content-profile">
                    <h4>Telepon :</h4>
                    <p><?= $user->telepon ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-profile">
                    <h4>Password :</h4>
                    <p><?= $user->password ?></p>
                </div>
                <div class="content-profile">
                    <h4>Tanggal Lahir : </h4>
                    <p><?= $user->tanggal_lahir ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-profile">
                    <h4>Jenis Kelamin :</h4>
                    <p><?= $user->jenis_kelamin ?></p>
                </div>
                <div class="content-profile">
                    <h4>NIK :</h4>
                    <p><?= $user->NIK ?></p>
                </div>
            </div>
             <div class="col-md-6">
                <div class="content-profile">
                    <h4>Alamat :</h4>
                    <p><?= $user->alamat ?></p>
                </div>
                <div class="content-profile">
                    <br>
                    <h4>Kartu Tanda Pengenal:</h4>            
                    <?php if( $user->foto_identitas == null): ?>
						<font color="red"><b><i class="icofont-close"></i> Belum Diupload </b></font>
						<?php elseif( $user->verifikasi == 0): ?>
						<font color="#ffa42d"><b>Belum Di Verifikasi</font>
						<?php else: ?>
						<font color="#108410"><b><i class="icofont-check"></i> Sudah Di Upload Dan Di Verifikasi</font>
						<?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach ?>
<script type="text/javascript" src="<?=base_url()?>assets/global/js/jquery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/global/js/bootstrap/bootstrap.min.js"></script>
</body>
</html>