<?php

$koneksi = mysql_connect("localhost", "root", "");

$db = mysql_select_db("dbarang", $koneksi);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("select user from pengguna where user='$user_check'", $koneksi);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['user'];

if(!isset($login_session)){
mysql_close($koneksi); 
header('Location: login.php'); 
}
?>