<php
     include('session.php');
     ?>
  <!DOCTYPE html>
<html lang="en">
  
  
<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title></title>
  
  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Custom Fonts -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
  <!-- Theme CSS -->
  <link href="css/graysclae.min.css" rel="stylesheet">
      <link href="respon.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  </head>
  
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    
        <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
         <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                  Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                  <i class="fa fa-play-circle"></i> <span class="light">HOME</span>
                </a>
           </div>
           
           <!-- Collect the nav links, forms, and other content for toggling -->
           <div class="collapse navbar=collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav"> 
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li>
                      <a class="page-scroll" href="ind.php">Tambah Data</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="laporan.php">Rekap Data</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="logout.php">Logout</a>
                  </li>
             </ul>
           </div>
           <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
    
    <!-- Intro Header -->
    <header class="intro">
       <div class="intro-body">
         <div class="container">
           <div class="row">
             <div class="col-md-8 col-md-offset-2">
               <h1 class="brand-heading">Daftar Barang</h1>
               
           <form method="post" action="" class="form-inline">
                            <div class="form-group">
           <select name="kategori" class="form-control">
             
             <option value="Id_barang">Id Barang</option>
             <option value="nama_barang">Nama Barang</option>
                              </select>
                              <input type="text" name="search" class="form-control"/>
                              <input type="submit" name="cari" value="cari" class="btn btn-succes">
             </div>
               </form><br>
               <table cellpadding="5" cellspacing="0" border="1" class="table table-bordered">
                 <tr bgcolor="Black">
                   <th><center>No.<th>
                   <th><center>Id Barang<th>
                    <th><center>Nama Barang<th>
                     <th><center>Satuan<th>
                       <th><center>Harga<th>
                 <th><center>Delete<th>
                   <th><center>Edit<th>
                     
                     <tr>
                  
                       <?php
                       //include file koneksi ke database
                       include('koneksi.php');
                       
                       $query = mysql_query("SELECT * FROM tbarang ORDER BY tbarang.id_barang") or die(mysql_error());
                       if (isset($_POST['cari'])) 
                       {
                            $search = $_POST['search'];
                         $kategori = $_POST['kategori'];
                         
                         $sql = "SELECT * FROM tbarang WHERE $kategori LIKE '%$search%'";
                         $result = mysql_query($sql) or die('error, list obat failed. ' . mysql_error());
                         
                         if (mysql_num_rows($result) == 0)
                         {
                           echo '<p></p><p>Pencarian Tidak Ditemukan</p>';
                         } else
                         {
                           echo '<p></p>';
                            $no = 1;
                           while ($row = mysql_fetch_array($result))
                           {
                             extract($row);
                             echo '<tr>';
                             echo '<td>'.$no.'</td>';
                             echo '<td>'.$Id_barang.'</td>';
                             echo '<td>'.$nama_barang.'</td>';
                             echo '<td>'.$satuan.'</td>';
                             echo '<td>'.$harga.'</td>';
                             
                             echo '</tr>';
                             $no++;
                           }
                         }
                       }
                       
   //cek, apakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
                       else if(mysql_num_rows($query) == 0)
                       {
                         //ini artinya jika data hasil query di atas kosong
                         //jika data kosong, maka akan menampilkan row kosong
                         
                         echo '<tr>'<td colspan="6">Tidak Ada Data!</td></tr>';
                         
                         }else{
                         //else ini artinya jika data hasil query ada (data diu database tidak kosong)
                         //jika data tidak kosong, amak akan melakukan perulangan while
                         
                         $no = 1; //membuat variabel $no untuk membuat nomor urut
                         while($data = mysql-fetch_assoc($query))
                         {
                            //perulangan while dengan membuat variabel $data yang akan mengambil data di database
                            //menampilakn row dengan data di database
                            echo "<tr>
                                      <td><center>$no</td>
                                      <td><center>$data[Id_barang]</td>
                                      <td><center>$data[nama_barang]</td>
                                      <td><center>$data[satuan]</td>
                                      <td><center>$data[harga]</td>
                                      <td><center><a href='deletebarang.php?Id_barang=$data[Id_barang]'>Delete</a></td>
                                      <td><center><a href='formeditbarang.php?Id_barang=$data[id_barang]'>Edit</a></td>
                                      </center>
                                </tr>";
                                
                                $no++;
                          }
                    }
                    ?>
             </table>
             
                    </div>
                   </div>
                  </div>
                 </div>
                </header>
          <!-- Map Section -->
          <div id="map"></div>
          
          <!-- Footer -->
          <footer>
              <div class="container text-center">
             
              </div>
            </footer>
            
            <!-- jQuery -->
            <script src="vendor/jquery/jquery.js"></script>
            
            <!-- Bootstrap Core JavaScript -->
            <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
            
            <!-- Theme JavaScript -->
            <script src="js/grayscale.min.js"></script>
            
       </body>
       <script src="lib/js/jquery.min.js"></script>
       <!-- Latest compiled and minified JavaScript -->
       <script src="lib/js/bootstrap.min.js"></script>
       </html>
            
            
                    
          
                                      
                            
                           
                       
                         
          
                           
                       
                     
                           
                              
               
      
                  
                  
  
