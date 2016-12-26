<?php
  include 'config.php';
  $data = mysql_query("select * from tbarang");
?>
<html>
<head>
  <title>Aplikasi CRUD PHP</title>
      <link href="style.css" type="text/css" rel="stylesheet" />
 </head>
 <body>
      <h1>REKAP DATA BARANG<h1>
    <table border="1" width="90%" style="border=collapse:collapse;" align="center">
        <tr class="tableheader">
        
             <th rowspan="1">No</th>
                 <th>Id_barang</th>
                 <th>Nama_barang</th>
                 <th>Stock</th>
                 <th>Harga</th>
              </tr>
              <?php
                    //include file koneksi ke database
                    include('koneksi.php');
                    
                    $query = mysql_query("SELECT * FROM tbarang ORDER BY tbarang.id_barang") or die(mysql_error());
                    if (isset($_POST['cari'])) {
                                    $search = $_POST['search'];
                                    $kategori = $_POST['kategori'];
                                    
                                    $sql = "SELECT * FROM tbarang WHERE $kategori LIKE '%$search%'";
                                    $result = mysql_query($sql) or die('Error, list obat failed. ' . mysql_error());
                                    
                                    if (mysql_num_rows($result) == 0) {
                                        echo '<p></p><p>Pencarian Tidak Ditemukan</p>';
                                        } else {
                                            echo '<p></p>';
                                            $no = 1;
                                            while ($row = mysql_fetch_array($result)) {
                                            extract($row);
                                              echo '<tr>';
                                            echo '<td>'.$no.'</td>';
                                            echo '<td> '.$Id_barang.'</td>';
                                            echo '<td> '.$nama_barang.'</td>';
                                            echo '<td> '.$satuan.'</td>';
                                            echo '<td> '.$harga.'</td>';
                                            
                                            echo '</tr>';
                                            $no++;
                                            }
                                            
                                         }
                                        }
           //cek, apakah hasil query mendapatkan hasil atau tidak (data kosong atau tidak)
           else if(mysql_num_rows($query) == 0){ //ini artinya jika data hasil query di atas kosong
           
           //jika data kosong, maka akan menampilkan row kosong
           echo '<tr><td colspan="6">Tidak ada data !</td></tr>';
           
        } else { // else ini artinya jika data hasil query ada ( data diu database tidak kosong)
        
        //jika data tidak kosong, maka akan melakukan perulangan while
        $no = 1;      //membuat variabel $no untuk membuat nomor urut
        while($data = mysql_fetch_assoc($query)) { // perulangan while dg membuat variabel $data yang akan mengambil data di database
        
        //menampilkan row dengan data di database
        echo "<tr>
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
        ?>
        
        </table>
        <br />
        <button style="margin-left:5%" onClick="print_d()">Print Document</button>
        <script>
      function print_d(){
        window.open("print.php","_blank");
       }
       </script>
       </body>
       </html>
        
                 
                                    
                                    
