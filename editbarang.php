<?php
//mulai proses edit data barang

//cek dahulu, jika tombol simpan di klik
if(isset($_POST['simpan'])){

      //include atau memasukkan file koneksi ke database
      include('koneksi.php');
      
      //jika tombol tambah benar di klik maka lanjut prosesnya
      $id_barang  = $_POST['Id_barang']; //membuat variabel $id_barang dan datanya dari inputan Id_barang
      $nama_barang = $_POST['nama_barang']; //membuat variabel $nama dan datanya dari inputan Nama Lengkap
      $satuan   = $_POST['satuan']; //membuat variabel $kelas dan datanya dari inputan dropdown Kelas
      $harga    = $_POST['harga']; //membuat variabel $harga dan datanya dari inputan dropdown harga
      $update   = mysql_query("UPDATE tbarang SET Id_barang='$id_barang', nama_barang='$nama_barang', satuan='$satuan', harga='$harga' WHERE Id_barang='$id_barang'") or die(mysql_error());
      
      //jika query update sukses
      if($update){
      
            echo 'Data berhasil diedit! ';    /Pesan jika proses tambah sukses
            echo '<a href="beranda.php">Kembali</a>';   //membuat Link untuk kembali ke halaman tambah
            
            } else {
            
            echo 'Gagal edit data! ';     //Pesan jika proses tambah gagal
            echo '<a href="beranda.php">Kembali</a>';   //membuak Link untuk kembali ke halaman tambah
            }
        } else {  //jika tidak terdeteksi tombol simpan di klik
        
            //redirect atau dikembalikan ke halaman edit
            echo '<script>window.history.back()</script>';
            
     }
     ?>
    </div>
    </body>
    <script src="lib/js/jquery.min.js"></script>
    <!== Latest compiled and minified JavaScript -->
    <script src="lib/js/bootstrap.min.js"></script>
    <html>
          <head><title>paragraf</title></head>
          <body background="ccc"<
    </html>
