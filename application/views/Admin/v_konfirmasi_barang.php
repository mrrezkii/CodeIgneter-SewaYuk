
<div class="" role="main">
          <div class="">
            <div class="page-title">
              <!-- <div class="title_left">
                <h3>Users</h3>
              </div> -->


            
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

                      <?php if($this->session->flashdata('pesan_sukses')==TRUE){?>
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <?= $this->session->flashdata('pesan_sukses'); ?>
                  </div>
              <?php } else if($this->session->flashdata('pesan_gagal')==TRUE){?>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <?= $this->session->flashdata('pesan_gagal'); ?>
                  </div>
                <?php }?>

                        <table style="margin-top:10px;" id="tabel-responsive"
                             class="table table-bordered dt-responsive nowrap"
                             width="100%">
                      <thead>
                        <tr>
                          <th>Foto Barang</th>
                          <th>Nama Barang</th>
                          <th>Jenis Barang</th>
                          <th>Harga</th>
                          <th>Pemilik</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>

                      <tbody>
                      <?php  
                        foreach ($Data_Verifikasi as $data) { 
                      ?>                  
                          <tr>
                          <td><img src="<?= base_url("assets/user/foto/barang/".$data->nama_jenis."/".$data->foto_barang)?>" class="img-responsive"></td>
                            <td><?= $data->nama_barang ?></td>
                            <td><?= $data->nama_jenis ?></td>
                            <td>Rp<?= number_format($data->harga_barang,2,',','.') ?></td>
                            <td><?= $data->nama_user ?></td>
                            <td>
                                <a class="btn btn-success" data-toggle="modal" data-target="#edit" href="#"  onclick="edit('<?=$data->id_barang?>')" >Konfirmasi</a>
                              <!-- <a data-toggle="modal" class="btn btn-danger" data-target="#konfirmasi" href="#">Hapus</a> -->
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
                            <h2>Verifikasi Data Barang ?</h2>
                        </div>
                       

                    <form action="<?=base_url('admin/verifikasi_barang')?>" method="post" class="form-horizontal form-label-left">
                                    
                        <input type="hidden" id="id_barang" name="id_barang" required="required" class="form-control col-md-7 col-xs-12">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <input type="submit" name="edit" value="Ya" class="btn btn-primary">
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

<script type="text/javascript">
function edit(a){
$.ajax({
  type:"post",
url:"<?=base_url()?>admin/data_barang/"+a,dataType:"json",
success:function(data){
  $("#id_barang").val(data.id_barang);
}
});
}
</script>
