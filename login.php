<?php 
session_start();

include 'config.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$result = mysqli_query($connect, "SELECT * FROM user where username='$username' and password='$password'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	//menyimpan session user, nama, status dan id login
	$_SESSION['username'] = $username;
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['status'] = "login";
	$_SESSION['id_user'] = $data['id_user'];
	header("location:main.php");
} else {
	echo "<script>alert('Username/password salah!');history.go(-1);</script>";
}
?>