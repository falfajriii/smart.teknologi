<?php
	include "koneksi.php";
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
    /*ob_start();
    session_start();
    if(isset($_SESSION['akun_username'])) header("location:dashboard.php");
    include "koneksi.php";

    /*PROSES LOGIN
    if(isset($_POST['submit_login'])) {
    	$username = $_POST['username'];
    	$password = $_POST['password'];
    	$sql_login = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$username' AND password = '$password'");

    	if(mysqli_num_rows($sql_login)>0) {
    		$row_akun = mysqli_fetch_array($sql_login);
    		$_SESSION['akun_id_akun'] = $row_akun['id_akun'];
    		$_SESSION['akun_username'] = $row_akun['username'];
    		header("location: dashboard.php");
    	}else {
    		header("location: login.php?login-gagal");
    	}
    }*/
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Login-DB</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Shine Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/login.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i" rel="stylesheet">
	<!-- //online-fonts -->
</head>

<body>
	<div class="wrapper" style="background-image: url(images/g7.jpg); width: 100%; height: 105vh; background-size: cover; background-position: center;">
	<!--header-->
	<div class="header-w3l">
		<h1>ST-Komputer Indonesia</h1>
	</div>
	<!--//header-->
	<div class="main-content-agile">
		<div class="sub-main-w3">
			<h2>Login Here</h2>
			<form action="cek_login.php" method="POST">
				<div class="pom-agile">
					<span class="fa fa-user" aria-hidden="true"></span>
					<input type="username" placeholder="username" name="username" class="user" required="">
				</div>
				<div class="pom-agile">
					<span class="fa fa-key" aria-hidden="true"></span>
					<input type="password" placeholder="Password" name="password" class="pass"  required="">
				</div><br>
				<?php if(isset($_GET['login-gagal'])) {?>
				<div class="sub-w3l">
					<div class="sub-agile">
						<p>Maaf, Username / Password yang ada masukan salah!</p>
					</div>
					<div class="clear"></div>
				</div>
				<?php }?>
				<div class="right-w3l">
					<input type="submit" name="submit_login" value="Login">
				</div>
			</form>
		</div>
	</div>
	<!--//main-->
	</div>
</body>
</html>

<?php
     mysqli_close($koneksi);
     ob_end_flush();
?>