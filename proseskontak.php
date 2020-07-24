<?php
include "koneksi.php";

if (isset($_POST['submit']))

$nama = $_POST['nama'];
$email = $_POST['email'];
$layanan = $_POST['layanan'];
$deskripsi = $_POST['deskripsi'];
$tanggal = date("Y-m-d");


$query = mysqli_query ($koneksi, "INSERT INTO pemesanan (id_pesan, nama, email, layanan, deskripsi, tanggal) 
	VALUES (id_pesan,'$nama','$email','$layanan','$deskripsi','$tanggal')");

if($query)
{
?>

<script language="javascript">
	alert("Terima Kasih atas Pesan nya! :)");
	document.location.href="contact.php";
</script>
<?php
}

?>