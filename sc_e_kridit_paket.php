<?php
include ("koneksi.php");
$k = $_POST['kd'];
$hc = $_POST['hc'];
$um = $_POST['um'];
$jc = $_POST['jc'];
$b = $_POST['b'];
$nc = $_POST['nc'];
$query = mysql_query("update kridit_paket set paket_nilai_cicilan = '$nc',paket_bunga = '$b',cicilan_jumlah='$jc', paket_uang_muka = '$um', paket_harga_cash = '$hc' where paket_kode= '$k'");

if ($query){
	echo "<script>alert ('Data berhasil di update!!');window.location='t_kridit_paket.php?mode=utama';</script>";
}else{
	echo "<script>alert ('Data tidak berhasi diupdate');
window.location='e_kridit_paket.php?mode=utama';</script>";
	}
?>