<?php
   include "koneksi.php";

   if(isset($_GET['delete-pesan'])) {
      $id = $_GET['delete-pesan'];
      mysqli_query($koneksi, "DELETE FROM pemesanan WHERE id_pesan = '$id'");
      header("location: dashboard.php?berhasil delete pesanan");
   }

?>