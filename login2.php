<?php
session_start ();
include ("koneksi.php");
$user = $_POST['user'];
$pass = $_POST['pass'];
$query = mysql_query("select * from pengguna where username = '$user' and password = '$pass'");
$data = mysql_fetch_row($query);
if($data > 0 )
{
	echo "<script>window.location='menu.php?mode=utama';</script>";
	$_SESSION['user']= $user;
	$_SESSION['status']= "login";
}else{
	echo "<script>alert ('username atau password salah!!');window.location='login.php?mode=masuk';</script>";
}
?>