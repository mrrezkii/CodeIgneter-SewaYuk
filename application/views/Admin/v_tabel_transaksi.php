
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

            <!-- <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Grafik Jenis Data Transaksi</h2>
                    <?= $Jumlah_Kategori ?>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="DataBarang"></canvas>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Grafik Status Transaksi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="Verifikasi"></canvas>
                  </div>
                </div>
              </div>
        </div> -->

         <div class="clearfix"></div>   

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Transaksi SewaYuk</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                        <table style="margin-top:10px;" id="tabel-responsive"
                             class="table table-bordered dt-responsive nowrap"
                             width="100%">
                      <thead>
                        <tr>
                          <th>Nama Barang</th>
                          <th>Nama Penyewa</th>
                          <th>Pemilik</th>
                          <th>Tanggal Sewa</th>
                          <th>Tanggal Kembali</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php  
                        foreach ($Data_Transaksi as $data) { 
                      ?>                  
                          <tr>
                            <td><?= $data->nama_barang ?></td>
                            <td><?= $data->nama_user ?></td>
                            <td><?= $data->nama_user ?></td>
                            <td><?= $data->tanggal_sewa ?></td>
                            <td><?= $data->waktu_kembali ?></td>
                            <td><?= $data->status_transaksi ?></td>
                            <td>
                                <a data-toggle="modal" data-target="#edit" href="#"  onclick="edit('<?=$data->id_user?>')" ><i class="fa fa-pencil"></i></a>
                                &nbsp;&nbsp;<a data-toggle="modal" data-target="#konfirmasi" href="#"><i class="fa fa-trash"></i></a>
                            </td>
                          </tr>
                      <?php } ?>
                        
                        
                      </tbody>
                    </table>

                    


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
                    
                     data : ['10','4','3','2','5','1','9'],
                    backgroundColor: [
                                    'rgb(66, 134, 244)',
                                    'rgb(255, 158, 33)',
                                    'rgb(0, 175, 38)',
                                    'rgb(175, 0, 0)',
                                    'rgb(145, 0, 175)',
                                    'rgb(214, 0, 103)',
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