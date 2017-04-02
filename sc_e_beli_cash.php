<?php
include ("koneksi.php");
$kode=$_POST['kd'];
$kk=$_POST['nkp'];
$jc=$_POST['km'];
$tgal=$_POST['tgl'];
$ck=$_POST['bc'];
$query = mysql_query("update beli_cash set cash_bayar = '$ck' ,motor_kode='$jc', cash_tanggal = '$tgal', pembeli_no_ktp = '$kk' where cash_kode= '$kode'");

if ($query){
	echo "<script>alert ('Data berhasil di update!!');window.location='t_beli_cash.php?mode=utama';</script>";
}else{
	echo "<script>alert ('Data tidak berhasi diupdate');
window.location='e_beli_cash.php?mode=utama';</script>";
	}
?>