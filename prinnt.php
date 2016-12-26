<?php 
include 'config.php';
$data = mysql_query("select * from tbarang");
?>
<html>
<head>
  <title>Print Document</title>
    <link href="style.css" type="text/css rel="styleshet" />
</head>
<body>
    <h1?<center?LAPORAN DATA BARANG</center></h1>
  <table> cellpadding="5" cellspacing="0" border="1" width="90%" align="center"
   class="table table-bordered">
   <tr> class="tableheader">
    <tr bgcolor="#CCCCCC">
      <th rowspen="1">No</th>
      <th><center>Id barang</center></th>
      <th><center>Nama Barang</center></th>
      <th><center>Satuan</center></th>
      <th><center>Harga</center></th>
     </tr>
      <?php
      include('koneksi.php');
      $query =mysql("SELECT * form tbarang ORDER BY tbarang.id_barang") or die (mysql_error());
      if (isset ($_POST['cari'])){
              $search =$_POST['search'];
              $kategori = $_POST['kategori'];
              
              $sql ="SELECT * form tbarang where $kategori LIKE '%$search%'";
              $result = mysql_query($sql) or die('Error, list obat failed. ' .mysql_error());
              if (mysql_num_roes($result) == 0) {
              echo = '<p></p><p> pencararian tidak ditemukan </p>';
              }else {
              echo '<p></p>';
              $no = 1;
              while ($row = mysql_fetch_array($result)) {
              extract($row);
                echo'<tr>';
               echo'<td>.$no.'</td>';
               echo '<td>'.$Id_barang.'</td>';
               echo '<td>'.$nama_bbarang'</td>';
               echo '<td>'.$satuan.'</td>';
               echo '<td>'.$harga.'</td>';
               
               echo '</tr>';
               $no++
               }
               }
               }
               
               else if (mysql_num_rows($query) == 0) {
               echo '<tr><td colspen="6"> tidak ada data!></td></tr>';
               }else{
               $no =1;
               while($data = mysql_fetch_assoc($query)){
                    echo"<tr>
                        <td><center>$no</td>
                        <td><center>$data[Id_barang]</td>
                        <td><center>$data[nama_barang]</td>
                        <td><center>$data[satuan]</td>
                        <td><center>$data[harga]</td>
                        </center>
                        </tr>";
                        $no++;
                        }
                        }
             </table>
             <script>
             windows.load = print_d();
             function print_d(){
             window.print();
             }
             (/script>
             </body>
             </html>
