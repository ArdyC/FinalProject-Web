<!DOCTYPE html>
<?php 
include "koneksi.php";
$Id_barang=$_GET['Id_barang'];
$query=mysql_query("select * from tbarang where Id_barang='$Id_barang'");
?>
<html>
<head>
<form action="editbarang.php" method="post">
    <title>DATA BARANG</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="lib/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="lib/css/bootstrap-theme.min.css">
</head>
<body>
<?php
while($row=mysql_fetch_array($query)){
?>
<input type="Hidden" name="no" value="<?php echo $no;?>"/>

	<div class="container">
	<h2>APLIKASI DATA BARANG</h2>
	
	<p><a href="beranda.php">Beranda</a>
	
	<h3>Edit Data BARANG</h3>
	
	<form action="editbarang.php" method="post" class="form-horizontal">
	  <div class="form-group">
		<table cellpadding="3" cellspacing="0" class="table">
			<tr>
				<td>Id barang</td>
				<td>:</td>
				<td><input type="text" name="Id_barang" class="form-control" required value="<?php echo $row['Id_barang'];?>" ></td>
			</tr>
			<tr>
				<td>Nama barang</td>
				<td>:</td>
				<td><input type="text" name="nama_barang" size="30" class="form-control" required value="<?php echo $row['nama_barang'];?>"></td>
			</tr>
			<tr>
				<td>satuan</td>
				<td>:</td>
				<td><input type="text" name="satuan" size="30" class="form-control" required value="<?php echo $row['satuan'];?>" ></td>
			</tr>
			<tr>
                <td>harga</td>
				<td>:</td>
				<td><input type="text" name="harga" size="30" class="form-control" required value="<?php echo $row['harga'];?>" ></td>
            </tr>   
			<tr>
				<td colspan="3"><hr>
				<input type="submit" name="simpan"  value="simpan" class="btn btn-success"></td>
			</tr>
		</table>
	  </div>
	</form>
	</div>
</body>
<?php } ?>
<script src="lib/js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="lib/js/bootstrap.min.js"></script>  
</html>
