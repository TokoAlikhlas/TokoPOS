
<?php 
	require '../../config.php';
	if(!empty($_GET['kategori'])){
		$nama= $_POST['kategori'];
		$tgl= date("j F Y, G:i");
		$data[] = $nama;
		$data[] = $tgl;
		$sql = 'INSERT INTO kategori (nama_kategori,tgl_input) VALUES(?,?)';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../index2.php?page=kategori&&success=tambah-data"</script>';
	}
	if(!empty($_GET['barang'])){
		$id = $_POST['id'];
		$kategori = $_POST['kategori'];
		$nama = $_POST['nama'];
		$merk = $_POST['merk'];
		$beli = $_POST['beli'];
		$jual = $_POST['jual'];
		$satuan = $_POST['satuan'];
		$stok = $_POST['stok'];
		$tgl = $_POST['tgl'];
		
		$data[] = $id;
		$data[] = $kategori;
		$data[] = $nama;
		$data[] = $merk;
		$data[] = $beli;
		$data[] = $jual;
		$data[] = $satuan;
		$data[] = $stok;
		$data[] = $tgl;
		$sql = 'INSERT INTO barang (id_barang,id_kategori,nama_barang,merk,harga_beli,harga_jual,satuan_barang,stok,tgl_input) 
			    VALUES (?,?,?,?,?,?,?,?,?) ';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../index2.php?page=barang&success=tambah-data"</script>';
	}
	if(!empty($_GET['profil'])){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$tlp = $_POST['tlp'];
		$emai = $_POST['email'];
		$nik = $_POST['nik'];
		
		
		$data[] = $id;
		$data[] = $nama;
		$data[] = $alamat;
		$data[] = $tlp;
		$data[] = $emai;
		$data[] = $nik;
		
		$sql = 'INSERT INTO member (id_member,nm_member,alamat_member,telepon,email,NIK) 
			    VALUES (?,?,?,?,?,?) ';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../index2.php?page=user&success=tambah-data"</script>';
	}

	if(!empty($_GET['user'])){
		$id = $_POST['id'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$idmember = $_POST['idmember'];		
		
		$data[] = $id;
		$data[] = $user;
		$data[] = $pass;
		$data[] = $idmember;
				
		$sql = 'INSERT INTO login (id_login,user,pass,id_member) 
			    VALUES (?,?,?,?) ';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../index2.php?page=user&success=tambah-data"</script>';
	}

	if(!empty($_GET['useradmin'])){
		$id = $_POST['id'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
				
		$data[] = $id;
		$data[] = $user;
		$data[] = $pass;
						
		$sql = 'INSERT INTO loginadmin (id_loginadmin,user,pass) 
			    VALUES (?,?,?) ';
		$row = $config -> prepare($sql);
		$row -> execute($data);
		echo '<script>window.location="../../login.php?page=useradmin&success=tambah-data"</script>';
	}

	if(!empty($_GET['jual'])){
		$id = $_POST['id'];
		$kasir = $_POST['kasir'];
		$jumlah = '0';
		$total = '0';
		$tgl = $_POST['tgl'];
		
		$data1[] = $id;
		$data1[] = $kasir;
		$data1[] = $jumlah;
		$data1[] = $total;
		$data1[] = $tgl;
		
		$sql1 = 'INSERT INTO penjualan (id_barang,id_member,jumlah,total,tanggal_input) VALUES (?,?,?,?,?)';
		$row1 = $config -> prepare($sql1);
		$row1 -> execute($data1);
		echo '<script>window.location="../../index.php?page=jual&success=tambah-data"</script>';
	}
	if(!empty($_GET['laporan'])){	
		$sql1 = '
			INSERT INTO laporan (id_barang,id_member,jumlah,total,tanggal_input)
			SELECT id_barang,id_member,jumlah,total,tanggal_input FROM penjualan
		';
		// $sql1 = 'INSERT INTO penjualan (id_barang,id_member,jumlah,total,tanggal_input) VALUES (?,?,?,?,?)';
		$row1 = $config -> prepare($sql1);
		$row1 -> execute($data1);
		echo '<script>window.location="../../index.php?page=jual&success=tambah-data"</script>';
	}
?>

