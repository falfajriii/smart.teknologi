<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $id = $_POST['id_pesan'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $layanan = $_POST['layanan'];
    $deskripsi = $_POST['deskripsi'];
    // query update data
    $query = "UPDATE pemesanan SET nama = '$nama', email = '$email', layanan = '$layanan', deskripsi = '$deskripsi' WHERE id_pesan = $id";
    if(mysqli_query($koneksi, $query)){
        header("Location: dashboard.php");
    }else{
        echo "Edit Data Gagal";
    }
    
}

$id = $_GET['id']; // id berasal dari url
$query = "SELECT * FROM pemesanan WHERE id_pesan = $id";
$data = mysqli_query($koneksi, $query);
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>CRUD PHP Sederhana</title>
    <link href="css/bs.css" rel="stylesheet" type="text/css" media="all"/>
    <script type="text/javascript" src="js/bjs.js"></script>
</head>
<body>
<div style="background-image: url(images/g1.jpg); background-position: center; background-size: cover; height: 100vh;">
  <div class="container">
  <div class="row" style="padding-left: 250px; padding-top: 100px;">
    <div class="col-8 shadow lg mb-5 rounded" style="background:  rgba(76, 175, 80, 0.4);">
    <br><h3 style="text-align: center;">Kirim Project ke Team</h3><br>
    <?php while($row = mysqli_fetch_assoc($data)){ ?>
    <form action="proses_kirimteam.php" method="POST">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">ID_Klien:</span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="id_pesan" value="<?php echo $row['id_pesan']; ?>">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Nama : </span>
          </div>
          <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nama" value="<?php echo $row['nama']; ?>">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Email : </span>
          </div>
          <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email" value="<?php echo $row['email']; ?>">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01">Options</label>
          </div>
          <select class="custom-select" id="layanan" name="layanan" value="<?php echo $row['layanan']; ?>">
            <option selected="Pilih Layanan"><?php echo $row['layanan']; ?></option>
            <option value="Service Hardware">Service Hardware</option>
            <option value="Desain Gambar">Desain Gambar</option>
            <option value="Instalasi Jaringan">Instalasi Jaringan</option>
            <option value="Pasang CCTV">Pasang CCTV</option>
            <option value="Mesin Absensi">Mesin Absensi</option>
            <option value="Mesin Doorlock">Mesin Doorlock</option>
            <option value="Rakit Komputer">Rakit Komputer</option>
            <option value="Website">Website</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Deskripsi : </span>
          </div>
          <textarea type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="deskripsi"><?php echo $row['deskripsi']; ?></textarea>
        </div>        
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="submit" class="btn btn-primary" name="submit" value="Kirim Team">
        <a href="dashboard.php"><input type="button" class="btn btn-light" value="Kembali" style="float: right;"></a>
        <br><br>
    </form>
    <?php
    } // end while
    mysqli_close($koneksi); // menutup koneksi ke database
    ?>
       </div>
  </div>
</div>
</div>
</body>
</html>

 