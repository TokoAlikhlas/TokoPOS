 <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                  <div class="col-lg-12 main-chart">
				  	<form action="fungsi/view/view.php" method="post">
						<table border="0">
							<tr>
								<td width="125"><b>Dari Tanggal</b></td>
								<td colspan="2" width="190">: <input type="date" name="tanggal_awal" size="16" />                
								</td>
								<td width="125"><b>Sampai Tanggal</b></td>
								<td colspan="2" width="190">: <input type="date" name="tanggal_akhir" size="16" />
								</td>
								<td colspan="2" width="190"><input type="submit" value="Pencarian Data" name="pencarian"/></td>
								<td colspan="2" width="70"><input type="reset" value="Reset" /></td>
							</tr>
						</table>
					</form>
						<!-- view barang -->	
						<div class="modal-view">
							<table class="table table-bordered" id="example1">
								<thead>
									<tr>
										<td> No</td>
										<td> ID Barang</td>
										<td> Nama Barang</td>
										<td style="width:10%;"> Jumlah</td>
										<td style="width:20%;"> Total</td>
										<td> Kasir</td>
										<td> Tanggal Input</td>
									</tr>
								</thead>
								<tbody>
									<?php $no=1; $hasil = $lihat -> laporan();?>
									<?php foreach($hasil as $isi){;?>
									<tr>
										<td><?php echo $no;?></td>
										<td><?php echo $isi['id_barang'];?></td>
										<td><?php echo $isi['nama_barang'];?></td>
										<td><?php echo $isi['jumlah'];?> </td>
										<td>Rp.<?php echo number_format($isi['total']);?>,-</td>
										<td><?php echo $isi['nm_member'];?></td>
										<td><?php echo $isi['tanggal_input'];?></td>
									</tr>
									<?php $no++; }?>
								</tbody>
							</table>
							<h3>
								<?php $hasil = $lihat -> jumlah_nota(); ?>
								Pemasukan Sampai Saat Ini : Rp.<?php echo number_format($hasil['bayar']);?>,-
							</h3>
							<div class="clearfix" style="padding-top:27%;"></div>
						</div>
					</div>
				  </div>
              </div>
          </section>
      </section>
	

