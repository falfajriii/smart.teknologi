<?php 
include "koneksi.php";
if(isset($_POST['submit-3']))

$id_proyek = $_POST['id_status'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$layanan = $_POST['layanan'];
$deskripsi = $_POST['deskripsi'];
$tanggal = date('Y-m-d');

$query = mysqli_query ($koneksi, "INSERT INTO status (id_status, nama, email, layanan, deskripsi, tanggal) 
	VALUES (id_status,'$nama','$email','$layanan','$deskripsi','$tanggal')");
if($query)
{
?>

<script language="javascript">
	alert("Proyek Anda Telah Selesai! :)");
	document.location.href="dashboard-team.php";
</script>
<?php
}

?>