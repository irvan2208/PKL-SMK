<?php
include ("koneksi.php");
$kode = $_POST['kd'];
$kc = $_POST['nkp'];
$tc = $_POST['kp'];
$jc = $_POST['km'];
$ck = $_POST['tgl'];
$csk = $_POST['fk'];
$csh = $_POST['fkk'];
$csg = $_POST['fsg'];
$query = mysql_query("update beli_kridit set fotokopi_slip_gaji = '$csg',fotokopi_kk = '$csh', fotokopi_ktp = '$csk',kridit_tanggal = '$ck',motor_kode='$jc', paket_kode = '$tc', pembeli_no_ktp = '$kc' where kridit_kode= '$kode'");

if ($query){
	echo "<script>alert ('Data berhasil di update!!');window.location='t_beli_kridit.php?mode=utama';</script>";
}else{
	echo "<script>alert ('Data tidak berhasi diupdate');
window.location='e_beli_kridit.php?mode=utama';</script>";
	}
?>