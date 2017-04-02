<?php
include ("koneksi.php");
$kd = $_POST['kc'];
$kc = $_POST['nk'];
$jc = $_POST['km'];
$ck = $_POST['tc'];
$csk = $_POST['bc'];
$query = mysql_query ("insert into beli_cash (cash_kode,pembeli_no_ktp,motor_kode,cash_tanggal,cash_bayar) VALUES ('$kd','$kc','$jc','$ck','$csk')");
if ($query){
	echo "<script>alert ('Data berhasil disimpan');window.location='t_beli_cash.php?mode=utama';</script>";
}else{
	echo "<script>alert ('Data tidak tersimpan, kemungkinan ada kode cash yang sama');
	window.location='d_pembeli.php?mode=masuk';</script>";
	}
?>