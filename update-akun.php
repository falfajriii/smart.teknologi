<?php
session_start();
$_SESSION["id_akun"] = "1";
include "koneksi.php";

if (count($_POST) > 0) {
    $result = mysqli_query($koneksi, "SELECT * FROM akun WHERE id_akun ='" . $_SESSION["id_akun"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["password"]) {
        mysqli_query($koneksi, "UPDATE akun SET password='" . $_POST["newPassword"] . "' WHERE id_akun='" . $_SESSION["id_akun"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>
<html>
<head>
<title>Change Password</title>
<link href="css/bs.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/bjs.js"></script>
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
	currentPassword.focus();
	document.getElementById("currentPassword").innerHTML = "required";
	output = false;
}
else if(!newPassword.value) {
	newPassword.focus();
	document.getElementById("newPassword").innerHTML = "required";
	output = false;
}
else if(!confirmPassword.value) {
	confirmPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "required";
	output = false;
}
if(newPassword.value != confirmPassword.value) {
	newPassword.value="";
	confirmPassword.value="";
	newPassword.focus();
	document.getElementById("confirmPassword").innerHTML = "not same";
	output = false;
} 	
return output;
}
</script>
</head>
<body style="background-image: url(images/g6.jpg); background-position: center; background-size: cover; height: 100vh;">
    <form name="frmChange" method="post" action=""
        onSubmit="return validatePassword()">
        <div class="container">
        <div class="row" style="padding-left: 350px; padding-top: 100px;">
            <div class="col-6 shadow lg mb-5 rounded" style="background: rgba(76, 175, 80, 0.3);">
            <br><h3 style="text-align: center;">Ganti Password</h3> <br>
            <div class="message" style="font-size: 12px; text-align: center;"><?php if(isset($message)) { echo $message; } ?></div>
            <form>
              <div class="form-group">
                <label for="formGroupExampleInput">Password Lama :</label>
                <input type="password" class="form-control" name="currentPassword" id="currentPassword" placeholder="Current Password">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Password Baru :</label>
                <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="New Password">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Konfirmasi Password :</label>
                <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm Password">
              </div>
            </form>
                <input type="submit" name="submit" class="btn btn-primary" value="Edit" style="padding: 5px 25px;">
                <a href="dashboard.php"><input type="button" class="btn btn-light" value="Kembali" style="float: right;"></a>
                <br> <br>
            </div>
        </div>
        </div>
    </form>
</body>
</html>