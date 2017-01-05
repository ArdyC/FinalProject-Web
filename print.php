<?php
 include 'config.php';
 $data = mysql_query("select * from barang");
?>
<html>
<head>
 <title>Print Document</title>
    <link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <h1><center>LAPORAN DATA BARANG</center></h1>
 <table cellpadding="5" cellspacing="0" border="1" width="90%"align="center" class="table table-bordered"> 
     <tr class="tableheader">
		<tr bgcolor="#CCCCCC">
           <th rowspan="1">No</th>
            <th><center>Id barang</center></th>
            <th><center>Nama barang</center></th>
            <th><center>Satuan</center></th>
            <th><center>harga</center></th>
            
    </tr>
        <?php
		//iclude file koneksi ke database
		include('koneksi.php');
		
		$query = mysql_query("SELECT * FROM tbarang ORDER BY tbarang.id_barang") or die(mysql_error());
		if (isset($_POST['cari'])) {
				   $search = $_POST['search'];
				   $kategori = $_POST['kategori'];
				   
				   $sql = "SELECT * FROM tbarang WHERE $kategori LIKE '%$search%'";
				   $result = mysql_query($sql) or die('Error, list obat failed. ' . mysql_error());
					
				   if (mysql_num_rows($result) == 0) {
					echo '<p></p><p>Pencarian tidak ditemukan</p>';
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
		//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
		 else if(mysql_num_rows($query) == 0){	//ini artinya jika data hasil query di atas kosong
			
			//jika data kosong, maka akan menampilkan row kosong
			echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
			
		}else{	//else ini artinya jika data hasil query ada (data diu database tidak kosong)
			
			//jika data tidak kosong, maka akan melakukan perulangan while
			$no = 1;	//membuat variabel $no untuk membuat nomor urut
			while($data = mysql_fetch_assoc($query)){	//perulangan while dg membuat variabel $data yang akan mengambil data di database
				
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
    <script>
  window.load = print_d();
  function print_d(){
   window.print();
  }
 </script>
</body>
</html>  