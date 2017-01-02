<?php ob_start();
 include "koneksi.php";
 mysql_query("delete from tbarang where Id_barang='$_GET[Id_barang]'");
 header('location:index.php');

?>