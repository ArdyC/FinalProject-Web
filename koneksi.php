<?php
$host = "localhost";      //nama host
$user = "root";           //username phpMyAdmin
$pass = "";               //password phpMyAdmin
$name = "dbarang";        ..nama database

$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi Ke Database Gagal!");
mysql)select_db($name, $koneksi) or die("Tidak Ada Database Yang Terpilih!");
$koneksi = mysqli_connect("localhost","root","","dbarang");

?>
