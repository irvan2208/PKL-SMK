<?php
include ("koneksi.php");
$k = $_POST['kd'];
$hc = $_POST['hc'];
$um = $_POST['um'];
$jc = $_POST['jc'];
$b = $_POST['b'];
$nc = $_POST['nc'];
$query = mysql_query ("insert into kridit_paket (paket_kode,paket_harga_cash,paket_uang_muka,cicilan_jumlah,paket_bunga,paket_nilai_cicilan) VALUES ('$k','$hc','$um','$jc','$b','$nc')");
if ($query){
	echo "<script>alert ('Data berhasil disimpan');window.location='t_kridit_paket.php?mode=utama';</script>";
}else{
	echo "<script>alert ('Data tidak tersimpan, kemungkinan ada kode barang yang sama');
	window.location='m_kridit_paket.php?mode=masuk';</script>";
	}
?>