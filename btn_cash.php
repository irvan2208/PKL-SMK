<?php
include ("koneksi.php");
$ktp = $_POST['nk'];
$nm = $_POST['nm'];
$al = $_POST['al'];
$nt = $_POST['nt'];
$nh = $_POST['nh'];
$cash = $_POST['mp'];
$query = mysql_query("insert into pembeli VALUES ('$ktp','$nm','$al','$nt','$nh')");
if ($cash =="CASH"){
	echo "<script>window.location='m_beli_cash.php?mode=utama';</script>";
}else{
	echo "<script>window.location='m_beli_kridit.php?mode=masuk';</script>";
	}
?>