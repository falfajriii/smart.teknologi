<?php
  include "koneksi.php";
  include "delete-pesan.php";
?>

<?php 
    if(isset($_POST['submit-cari'])) {
        $_SESSION['session_pencarian'] = $_POST['keyword'];
        $keyword = $_SESSION['session_pencarian'];
    }else {
        $keyword = ['session_pencarian'];
    }
    $query = mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE nama LIKE '%$keyword%' ORDER BY pemesanan.nama ASC");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>DB-ST Komputer Indonesia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link href="css/bs.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>

<div class="wrap">
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a class="active" href="dashboard-team.php">Dashboard</a>
  <a href="status-team.php">Status</a>
  <a href="logout.php">Logout</a>
</div>

<div id="main" >
  <span style="font-size:30px; cursor:pointer; color: black;" onclick="openNav()">&#9776;</span>
</div>

<div id="main2" class="table-responsive-xl">
	<span onclick="openNav()"></span>
<h2 style="padding-bottom:25px;">Project :</h2>

<form action="cari-team.php" class="form-inline" style="float: right;" method="POST">
  <div class="form-group mx-sm-3 mb-2">
    <input type="text" class="form-control" name="keyword" placeholder="Searching">
  </div>
  <button type="submit" name="submit-cari" class="btn btn-primary mb-2">Cari</button>
</form>

<table id="mytable" class="table" >
  <thead class="thead-dark">
    <tr>
      <th>No</th>
      <th>Id.Klien</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Project</th>
      <th>Deskripsi</th>
      <th style="width: 110px; text-align: center;">Tanggal</th>
      <th style="text-align: center; width: 100px;">Konfirmasi</th>
    </tr>
  </thead>
  <tbody>
    <?php $x=1; ?>
    <?php if(mysqli_num_rows($query)) {?>
    <?php while($row = mysqli_fetch_array($query)) {?>
    <tr>
      <td style="text-align: center;"><?php echo $x; ?></td>
      <td style="text-align: center;"><?php echo $row['id_pesan']?></td>
      <td><?php echo $row['nama'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['layanan'] ?></td>
      <td><?php echo $row['deskripsi'] ?></td>
      <td><?php echo $row['tanggal'] ?></td>
      <td style="text-align: center;">
          <a href="kirimstatus.php?id=<?php echo $row['id_proyek']; ?>"><button name="submit" type="submit" style="background-color: #ffff4c; border-radius: 10px; padding:5px 25px;"><i class="fa fa-check-square-o" aria-hidden="true"></i></button></a>
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
<script type="text/javascript" src="js/bjs.js"></script>
</body>
</html>