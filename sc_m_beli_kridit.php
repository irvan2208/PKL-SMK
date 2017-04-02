<?php
include ("koneksi.php");
$kd = $_POST['kk'];
$kc = $_POST['nkp'];
$tc = $_POST['kp'];
$jc = $_POST['km'];
$ck = $_POST['tgl'];
$csk = $_POST['fk'];
$csh = $_POST['fkk'];
$csg = $_POST['fsg'];
$query = mysql_query ("insert into beli_kridit (kridit_kode,pembeli_no_ktp,paket_kode,motor_kode,kridit_tanggal,fotokopi_ktp,fotokopi_kk,fotokopi_slip_gaji) VALUES ('$kd','$kc','$tc','$jc','$ck','$csk','$csh','$csg')");
if ($query){
	echo "<script>alert ('Data berhasil disimpan');window.location='t_beli_kridit.php?mode=utama';</script>";
}else{
	echo "<script>alert ('Data tidak tersimpan, kemungkinan ada kode barang yang sama');
	window.location='d_pembeli1.php?mode=masuk';</script>";
	}
?>