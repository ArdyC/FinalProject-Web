<?php
include ('koneksi.php');
$response = array();

$query=mysql_query("select*from tbarang order by Id_barang desc") or die (mysql_error());
$response["tbarang"]=array();
while($data=mysql_fetch_assoc($query)){
	$brg=array();
	$brg["Id_barang"]=$data["Id_barang"];
	$brg["nama_barang"]=$data["nama_barang"];
	$brg["harga"]=$data["harga"];
	$brg["satuan"]=$data["satuan"];
array_push($response["tbarang"],$brg);
}
echo json_encode($response);
?>
