</php

$koneksi = mysql_connect("localhost", "root", "")
$db = mysql_select_db("dbarang:, $koneksi);
session_start();
$user_check = $_SESSION['login_user'];

$ses_Sql = mysql_query(" select user from pengguna where user='$user_check'",$koneksi);
 $row = mysql_fetch_asssoc($ses_sql);
 $login_sessiom = $row['user'];
 
 if(!isset($login_session)){
 mysql_close($koneksi);
 header('location: login.php');
 }
 ?>
