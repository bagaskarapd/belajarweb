<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($conn, "select * from tb_login where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
	header("location:halaman.php");
}else{
	echo "ERROR";	
}
?>