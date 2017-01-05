<?php
      mysql_connect("127.0.0.1","root",""); // 127.0.0.1 adalah localhost
      mysql_select_db("dbarang");
      $q=mysql_query("SELECT * FROM tbarang WHERE Id_barang >'".$_REQUEST['Id_barang']."'");
      while($e=mysql_fetch_assoc($q))
             $output[]=$e;
             print(json_encode($output));
             mysql_close();
?>