
<div class="" role="main">
          <div class="">
            <div class="page-title">
              <!-- <div class="title_left">
                <h3>Users</h3>
              </div> -->

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>

         <div class="clearfix"></div>   

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tabel Barang Sewa</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                       
              <?php if($this->session->flashdata('pesan_sukses')==TRUE){?>
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <?= $this->session->flashdata('pesan_sukses'); ?>
                  </div>
              <?php } else if($this->session->flashdata('pesan_error')==TRUE){?>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <?= $this->session->flashdata('pesan_error'); ?>
                  </div>
                <?php }?>
                  <a class="btn btn-primary" data-toggle="modal" data-target="#tambah" href="#" >+ Tambah Data Barang</a>
                  <br><br>   
                  <table style="margin-top:10px;" id="tabel-responsive"
                             class="table table-bordered dt-responsive nowrap"
                             width="100%">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Foto Barang</th>
                          <th>Nama Barang</th>
                          <th>Jenis Barang</th>
                          <th>Harga</th>
                          <th>Status Barang</th>
                          <th>Aksi</th>
                          
                        </tr>
                      </thead>

                      <tbody>
                      <?php  
                        $no=1; foreach ($DataTransaksi as $data) { 
                      ?>                  
                          <tr>
                          <td><?= $no++ ?></td>
                          
                            <td><img src="<?= base_url("assets/user/foto/barang/".$data->nama_jenis."/".$data->foto_barang)?>" class="img-responsive"></td>
                            <td><?= $data->nama_barang ?></td>
                            <td><?= $data->nama_jenis ?></td>
                            <td>Rp<?= number_format($data->harga_barang,2,',','.') ?></td>
                            <?php if($data->status_barang == FALSE): ?>
                            <td><font color="red"><strong>Belum Dikonfirmasi</strong></font></td>
                            <?php else: ?>
                            <td><font color="green"><strong>Sudah Dikonfirmasi</strong></font></td>
                            <?php endif ?>
                            <td>
                                <a data-toggle="modal" data-target="#edit" href="#"  onclick="edit('<?=$data->id_user?>')" ><i class="fa fa-pencil"></i></a>
                                &nbsp;&nbsp;<a data-toggle="modal" data-target="#konfirmasi" href="#"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                      <?php } ?>
                        
                        
                      </tbody>
                    </table>

                    <!-- Tambah Data Barang -->
                    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <h2>Tambah Data Museum</h2>
                        </div>
                        <div class="modal-body">                      
                    <br />

                    <form action="<?=base_url('transaksi/tambah_barang')?>" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data">
                                    
                        <input type="hidden" id="id_barang" name="id_barang" required="required" class="form-control col-md-7 col-xs-12">
                      
                          
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Barang :
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                        <input type="text" id="nama_barang" name="nama_barang" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi Barang : 
                        </label>
                        <div class="col-md-8 col-sm-3 col-xs-12">
                          <input type="text" id="deskripsi_barang" name="deskripsi_barang" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Deskripsi : 
                        </label>
                        <div class="col-md-8 col-sm-3 col-xs-12">
                        <select  id="id_jenis" class="form-control col-md-7 col-xs-12" name="id_jenis">
                        <option>Jenis Barang</option>
				              	<?php foreach($DataKategori as $kategori): ?>
							      		<option value="<?=$kategori->id_jenis?>"><?=$kategori->nama_jenis?></option>
				              	<?php endforeach?>
                      </select>
                        </div>
                    </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Harga Barang : </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                        <input type="text" id="harga_barang" name="harga_barang" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Foto Barang :
                        </label>
                        <div class="col-md-8 col-sm-6 col-xs-12">
                        <input name="foto_barang" type="file" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                   
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <input type="submit" name="tambah" value="Simpan" class="btn btn-primary">
                        </div>
                        </div>
                        </form>
                    </div>
                    </div>        



                    <!-- Modal Konfirmasi Hapus-->
                    <div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <h2>Konfirmasi Hapus Data</h2>
                        </div>
                        <div class="modal-body">
                            <h4>Anda Yakin Ingin Menghapus User ?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a class="btn btn-primary" href="<?php echo base_url("admin/hapus_user/");echo $data->id_user?>">Hapus Data</a>
                        </div>
                        </div>
                    </div>
                    </div>
                
                    <!-- Modal Edit Data-->
                    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <h2>Edit Data Pengguna</h2>
                        </div>
                        <div class="modal-body">                      
                    <br />

                    <form action="<?=base_url('admin/update_user')?>" method="post" class="form-horizontal form-label-left">
                                    
                        <input type="hidden" id="id_user" name="id_user" required="required" class="form-control col-md-7 col-xs-12">
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nama_user" name="nama_user" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Telepon : 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="telepon" name="telepon" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Username : </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"><span class="required">*</span> Role : </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select id="status" name="status" class="form-control" required>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                        </div>
                      </div>  
                   
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <input type="submit" name="edit" value="Simpan" class="btn btn-primary">
                        </div>
                        </div>
                        </form>
                     </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script src="<?= base_url() ?>assets/admin/vendors/chartjs/Chart.js"></script>
         <script src="<?= base_url() ?>assets/admin/vendors/chartjs/PieceLabel.min.js"></script>
         <script>
    var ctx = document.getElementById( "DataBarang" );
    var JenisKelamin = new Chart( ctx, {
        type: 'doughnut',
        data: {
             labels : ['Barang Terverifikasi','Barang Belum Terverifikasi', 'Barang Di Promosikan'],  
            datasets: [
                {
                    
                     data : [<?php echo json_encode($DataVerif);?>,
                             <?php echo json_encode($DataNonVerif);?>,
                             <?php echo json_encode($DataPromosi);?>
                            ],
                    backgroundColor: [
                                    'rgb(66, 134, 244)',
                                    'rgb(255, 158, 33)',
                                    'rgb(0, 175, 38)'        
                                     ],
                    
                    borderWidth: 2
                            
                },
               
                        ],
          
        },
        options: {
            legend: {
            display: true
            },
            responsive: true,
             tooltips: {
             enabled: false
             },
            hover: {
                mode: 'nearest',
                intersect: true
            },

            pieceLabel: {
                render: 'percentage',
                fontColor: 'white',
                precision: 2
              }

        }


    } );
         </script>
               <script>
    var ctx = document.getElementById( "Verifikasi" );
    var JenisKelamin = new Chart( ctx, {
        type: 'doughnut',
        data: {
             labels : ['Peralatan Kemah','Kendaraan','Peralatan Audio','Kostum','Catering','Kamera'],  
            datasets: [
                {
                    
                     data : ['4','4','3','2','2','4',],
                    backgroundColor: [
                                    'rgb(66, 134, 244)',
                                    'rgb(255, 158, 33)',
                                    'rgb(0, 175, 38)',
                                    'rgb(175, 0, 0)',
                                    'rgb(145, 0, 175)',
                                    'rgb(214, 0, 103)'      
                                     ],
                    
                    borderWidth: 2
                            
                },
               
                        ],
          
        },
        options: {
            legend: {
            display: true
            },
            responsive: true,
             tooltips: {
             enabled: false
             },
            hover: {
                mode: 'nearest',
                intersect: true
            },

            pieceLabel: {
                render: 'percentage',
                fontColor: 'white',
                precision: 2
              }

        }


    } );
         </script>
<script type="text/javascript">
	function edit(a){
		$.ajax({
			type:"post",
		url:"<?=base_url()?>admin/edit_user/"+a,dataType:"json",
		success:function(data){
      $("#id_user").val(data.id_user);
			$("#nama_user").val(data.nama_user);
			$("#email").val(data.email);
      $("#telepon").val(data.telepon);
      $("#status").val(data.status);
		}
		});
	}
</script>