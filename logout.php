<?php
     session_start();
     $_SESSION["akun_id_akun"];
     $_SESSION["akun_username"];

     unset($_SESSION["akun_id_akun"]);
     unset($_SESSION["akun_username"]);

     session_unset();
     session_destroy();

     header("location:login.php");
?>