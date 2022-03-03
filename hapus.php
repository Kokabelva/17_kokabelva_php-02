<?php
   include './koneksi.php';

   $id = $_GET['id_buku'];

   $sql = "DELETE FROM buku WHERE id=$id";

   if($conn->query($sql) === true){
       echo "data berhasil dihapus<br>";
       echo "<a href= 'tampil.php'>kembali</a><br>";
   } else {
       echo "error" . $sql . "<br>" . $conn->error;
   }

   $conn->close();
?>