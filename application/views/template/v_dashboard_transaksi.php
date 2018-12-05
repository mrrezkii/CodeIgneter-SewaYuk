<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?=base_url()?>assets/global/image/logo.png" type="image/png" width="40px" height="auto">

  <title>Dashboard Transaksi</title>

  <!-- CSS -->
  <link href="<?= base_url() ?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/admin/build/css/custom.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">

</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="<?= base_url() ?>transaksi" class="site_title"></i><span>SewaYuk</span></a>
          </div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <?php if($this->session->userdata('foto')!=NULL)  :?>
              <img src="<?= base_url(" assets/user/foto/profil/".$this->session->userdata('foto') )?>"
              class="img-circle profile_img">

              <?php else: ?>
              <img src="<?= base_url() ?>assets/admin/images/user.png" alt="..." class="img-circle profile_img">

              <?php endif?>
            </div>
            <div class="profile_info">
              <span>Selamat Datang ,</span>
              <h2>
                <?=$this->session->userdata('nama_user')?>
              </h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br> <br>
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">

                <li><a><i class="fa fa-dollar"></i> Data Transaksi <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                  <li><a href="<?= base_url() ?>transaksi/transaksi_barang">Tabel Status Transaksi</a></li>
                    <li><a href="<?= base_url() ?>transaksi/tabel_barang">Tabel Barang</a></li>
                 
                  </ul>
                </li>

                 <li><a><i class="fa fa-dropbox"></i> Data Barang <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?= base_url() ?>transaksi/transaksi_sewa">Tabel Status Sewa</a></li>
                  
                  </ul>
                </li>

              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li>

                <a href="javascript:" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

                  <?php if($this->session->userdata('foto')!=NULL)  :?>
                  <img src="<?= base_url(" assets/user/foto/profil/".$this->session->userdata('foto') )?>">
                  <?php else: ?>
                  <img src="<?= base_url() ?>assets/admin/images/user.png" alt="...">
                  <?php endif?>

                  <?=$this->session->userdata('nama_user')?> &nbsp;<span class=" fa fa-angle-down"></span>

                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="<?=base_url('user/logout')?>"><i class="fa fa-sign-out pull-left"></i>&nbsp;
                      Log Out</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <?php $this->load->view($konten); ?>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          SewaYuk @ 2018
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- Javascript -->
  <script src="<?= base_url() ?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>assets/admin/build/js/custom.js"></script>
</body>

</html>