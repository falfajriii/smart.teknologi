<?php

$koneksi;

$server = "localhost";
$user = "root";
$pass = "";
$namedb="st_kom";

$koneksi = mysqli_connect($server,$user,$pass); mysqli_select_db( $koneksi, $namedb);
	if(!$koneksi) {
	       die("Koneksi Gagal".mysqli_connect_error());
	  }
?>