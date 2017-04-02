<?php
include ("koneksi.php");
$kode=$_POST['kd'];
$kk=$_POST['kk'];
$tgal=$_POST['tgl'];
$jc=$_POST['jc'];
$ck=$_POST['ck'];
$csk=$_POST['csk'];
$csh=$_POST['csh'];
$query = mysql_query("update bayar_cicilan set cicilan_sisa_harga = '$csh', cicilan_sisa_ke = '$csk',cicilan_ke = '$ck' ,cicilan_jumlah='$jc', cicilan_tanggal = '$tgal', kridit_kode = '$kk' where cicilan_kode= '$kode'");

if ($query){
	echo "<script>alert ('Data berhasil di update!!');window.location='t_bayar_cicilan.php?mode=utama';</script>";
}else{
	echo "<script>alert ('Data tidak berhasi diupdate');
window.location='e_bayar_cicilan.php?mode=utama';</script>";
	}
?>