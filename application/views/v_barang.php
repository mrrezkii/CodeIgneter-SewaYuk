<?php foreach($ListBarang as $barang){ ?>
						<div class="content-top">
							<center>
								<img class="img-fluid" src="<?= base_url("assets/user/foto/barang/".$barang->foto_barang)?>" alt="700d">
							</center>
							<h5 class="h5-top color-black font-opensans-regular"><?= $barang->nama_barang?></h5>
							<h5 class="h5-top-harga color-orange font-opensans-regular">Rp<?= number_format($barang->harga_barang,2,',','.') ?> / 24 jam</h5>
							<p class="p-kota-top font-opensans-light"><i class="icofont-location-pin"><?= $barang->kota?></i></p>
							<a href="#">
								<a href="<?=base_url('Home/Detail/'.$barang->id_barang)?>" class="btn btn-top font-opensans-bold">Lihat Detail</a>
							</a>
						</div>
					<?php } ?>