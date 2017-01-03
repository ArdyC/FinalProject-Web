<?php

if(isset($_POST['tambah'])){
	
	include('koneksi.php');

	$id_barang		= $_POST['Id_barang'];	
  $nama_barang	= $_POST['nama_barang'];	
	$satuan		    = $_POST['satuan'];	
	$harga	      = $_POST['harga'];	
	$input = mysql_query("INSERT INTO tbarang VALUES('$id_barang','$nama_barang', '$satuan', '$harga')") or die(mysql_error());
	
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		
		echo '<a href="index.php">Kembali</a>';	
		
	}else{
		
		echo 'Gagal menambahkan data! ';	
		echo '<a href="beranda.php">Kembali</a>';	
		
	}

}else{	

	echo '<script>window.history.back()</script>';

}
?>
</div>
</body>
<script src="lib/js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="lib/js/bootstrap.min.js"></script>
<html>
    <head><title>paragraf</title></head>
    <body background="ccc"<
</html>
