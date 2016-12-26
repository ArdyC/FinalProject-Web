<!DOCTYPE html>
<html>
<head>
  <title> DATA BARANG </title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="lib/css/bootstrap.min.css">
  
  <!-- Optionel theme -->
  <link rel="stylesheet" href="lib/css/bootstrap-theme.min.css">
  </head>
  <body>
        <div class="container">
        <h2>APLIKASI DATA BARANG</h2>
        
        <p><a href="beranda.php">Beranda</a>
        
        <h3>Tambah Data BARANG</h3>
        
        <from action="tambah-proses.php" method="post" class="from-horizontal">
          <div class="form-group">
              <table cellpadding="3" cellspacing="0" class="table">
                  <tr>
                          <td>Id barang</td>
                          <td>:</td>
                          <td><input type="text" name="Id_barang" class="form-control" required></td>
                  </tr>
                  <tr>
                          <td>Nama barang</td>
                          <td>:</td>
                          <td><input type="text" name="nama_barang" size="30" class="form-control" required></td>
                  </tr>
                  <tr>
                          <td>satuan</td>
                          <td>:</td>
                          <td><input type="text" name="satuan" size="30" class="form-control" required></td>
                  </tr>
                  <tr>
                          <td>harga</td>
                          <td>:</td>
                          <td><input type="text" name="harga" size="30" class="form-control" required></td>
                  </tr>
                  <tr>
                          <td colspan="3"><hr>
                          <input type="submit" name="tambah" value="Simpan" class="btn btn-success"></td>
                  </tr>
             </table>
          </div>
        </form>
        </div>
</body>
<script src="lib/js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="lib/js/bootstrap.min.js"></script>
</html>
                          
        
