<?php
include "koneksi.php";
session_start();
$error='';
if (isset($_POST['submit']))
{
      if (empty($_POST['user']) || empty($_POST['password']))
      {
            $error = "Username or Password is invalid";
      }
      else
      {
            $user=$_POST['user'];
            $password=$_POST['password'];
            // untuk melindungi MySql injection
            $user = stripslashes($user);
            $password = stripslashes($password);
            $user = mysql_real_escape_string($koneksi,$user);
            $password = mysqli_real_escape_string($koneksi,$password);
            
            $query = mysqli_query($koneksi,"select * from pengguna where password='$password' AND user='$user'");
            $rows = mysqli_num_rows($query);
            if ($rows == 1)
            {
                  $_SESSION['login_user']=$user;
                  header("location: beranda.php");
            }
            else
            {
                  $error = "Username or Password is invalid";
            }
            mysqli_close($koneksi);
      }
}
?>
            
