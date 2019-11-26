<?php 
	require 'config.php';
	include $view;
	$lihat = new view($config);
	$toko = $lihat -> toko();
	$hsl = $lihat -> penjualan();
?>
<html>
	<head>
		<TITLE>PRINT OUT</TITLE>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
	</head>
	<body>
		<script>window.print();</script>
		<div class="row h-100" style="text-align:center">
			<div class="col-sm-12 my-auto">
				<div class="card card-block w-25">
					<p><?php echo $toko['nama_toko'];?></p>
					<p><?php echo $toko['alamat_toko'];?></p>
					<p>==========================================</p>
					<p>Tanggal : <?php  echo date("j F Y, G:i");?></p>
					<p>Kasir : <?php  echo $_GET['nm_member'];?></p>
					<table class="table table-bordered" style="width:20%;font-size:13px;" align="center">
						<tr>
							<td>No.</td>
							<td>Barang</td>
							<td>Jumlah</td>
							<td>Total</td>
						</tr>
						<?php $no=1; foreach($hsl as $isi){?>
						<tr>
							<td><?php echo $no;?></td>
							<td><?php echo $isi['nama_barang'];?></td>
							<td><?php echo $isi['jumlah'];?></td>
							<td><?php echo $isi['total'];?></td>
						</tr>
						<?php $no++; }?>
					</table>
					<?php $hasil = $lihat -> jumlah(); ?>
					Total : Rp.<?php echo number_format($hasil['bayar']);?>,-
					<br/>
					Bayar : Rp.<?php echo number_format($_GET['bayar']);?>,-
					<br/>
					Kembali : Rp.<?php echo number_format($_GET['kembali']);?>,-
					<p>==========================================</p>
					<p>Terima Kasih Atas Kunjungan Anda!</p>
					<p>Semoga Hari Anda Diberkahi.</p>
				</div>
			</div>
		</div>
	</body>
</html>
