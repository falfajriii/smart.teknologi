<?php 
include "koneksi.php";
if(isset($_POST['submit-2']))

date_default_timezone_set('Asia/Jakarta');

$id_proyek = $_POST['id_proyek'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$layanan = $_POST['layanan'];
$deskripsi = $_POST['deskripsi'];
$tanggal = date("Y-m-d");

$query = mysqli_query ($koneksi, "INSERT INTO team (id_proyek, nama, email, layanan, deskripsi, tanggal) 
	VALUES (id_proyek,'$nama','$email','$layanan','$deskripsi', '$tanggal')");
if($query)
{
?>

<script language="javascript">
	alert("Data berhasil dikirim ke Team!");
	document.location.href="dashboard.php";
</script>
<?php
}

?>