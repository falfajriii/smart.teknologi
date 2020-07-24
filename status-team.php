<?php
  include "koneksi.php";
  include "delete-pesan.php";
  $query  = mysqli_query($koneksi, "SELECT * FROM status ORDER BY status.id_status ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>DB-ST Komputer Indonesia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link href="css/bs.css" rel="stylesheet" type="text/css" media="all"/>
  <script type="text/javascript" src="js/bjs.js"></script>
</head>
<body>

<div class="wrap">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="dashboard-team.php">Dashboard</a>
  <a class="active" href="status-team.php">Status</a>
  <a href="logout.php">Logout</a>
</div>

<div id="main">
  <span style="font-size:30px; cursor:pointer; color: black;" onclick="openNav()">&#9776;</span>
  <p style="padding-top: 10px; float: right; padding-right: 15px;">Team-ST</p>
  <img src="images/team.png" alt="Avatar" style="width:70px; margin: 0; float: right; padding-right: 20px;">
</div>

<div id="main2">
  <span onclick="openNav()"></span>
<h2 style="padding-bottom:25px;">Status Project :</h2>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th style="text-align: center;">No</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Project</th>
      <th>Deskripsi</th>
      <th style="width: 110px; text-align: center;">tanggal</th>
      <th style="text-align: center; ">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php $x=1; ?>
    <?php if(mysqli_num_rows($query)) {?>
    <?php while($row = mysqli_fetch_array($query)) {?>
    <tr>
      <td style="text-align: center;"><?php echo $x; ?></td>
      <td><?php echo $row['nama'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['layanan'] ?></td>
      <td><?php echo $row['deskripsi'] ?></td>
      <td><?php echo $row['tanggal'] ?></td>
      <td style="text-align: center;">
          <a href=""><button type="submit" style="background-color: #329932; border-radius: 10px; color: white;">DONE</i></button></a>
      </td>
    </tr>
    <?php $x++; ?>
    <?php } ?>
    <?php } ?>
  </tbody>
</table>
</div>
 </div>



<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("main2").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.getElementById("main2").style.marginLeft= "0";
}
</script>
</body>
</html>

<?php

     mysqli_close($koneksi);
     ob_end_flush();

?>