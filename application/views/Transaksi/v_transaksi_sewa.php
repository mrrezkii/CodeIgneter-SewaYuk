
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
                    <h2>Data Pengguna SewaYuk</h2>
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
                          <th>No.</th>
                          <th>Foto Barang</th>
                          <th>Nama Barang</th>
                          <th>Jenis Barang</th>
                          <th>Harga</th>
                          <th>Pemesan</th>
                          <th>Tanggal Sewa</th>
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
                            <td><?= $data->nama_user ?></td>
                            <td><?= date("d-m-Y", strtotime($data->tanggal_sewa ));?></td>
                            <td>
                            <?php if($data->status_transaksi == "Pending"): ?>
                            <a class="btn btn-primary" data-toggle="modal" data-target="#konfirmasi" href="#"  onclick="edit('<?=$data->id_transaksi?>')" >Konfirmasi</a>
                            <a class="btn btn-danger" data-toggle="modal" data-target="#edit" href="#"  onclick="edit('<?=$data->id_transaksi?>')"  >Tolak</a>
                            <?php elseif($data->status_transaksi == "Disetujui"): ?>  
                            <font color="green"><strong>Anda Sudah Menyutujui Penyewaan</strong></font>
                            <?php else: ?>      
                            <font color="green"><strong>Anda Menolak Penyewaan</strong></font>
                            <?php endif ?>
                        
                        </td>
                          </tr>
                      <?php } ?>
                        
                        
                      </tbody>
                    </table>

                    


                    <!-- Modal Konfirmasi Sewa-->
                    <div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                            <h2>Konfirmasi Sewa Barang</h2>
                        </div>
                        <div class="modal-body">
                            <h4>Anda Yakin Ingin Mengkonfirmasi Sewa ?</h4>
                        </div>
                        <form action="<?=base_url('transaksi/konfirmasi_transaksi')?>" method="post" class="form-horizontal form-label-left">
                                    
                                    <input type="hidden" id="id_transaksi" name="id_transaksi" required="required" class="form-control col-md-7 col-xs-12">
            
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <input type="submit" value="Konfirmasi" class="btn btn-primary">
                                    </div>
                                    </div>
                                    </form>
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
        
<script type="text/javascript">
function edit(a){
$.ajax({
  type:"post",
url:"<?=base_url()?>transaksi/konfirmasi_sewa/"+a,dataType:"json",
success:function(data){
  $("#id_transaksi").val(data.id_transaksi);
}
});
}
</script>