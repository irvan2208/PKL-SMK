<?php
include ("koneksi.php");
$ktp = $_POST['nk'];
$nm = $_POST['nm'];
$al = $_POST['al'];
$nt = $_POST['nt'];
$nh = $_POST['nh'];
$query = mysql_query("insert into pembeli VALUES ('$ktp','$nm','$al','$nt','$nh')");
if ($query){
	echo "<script>alert ('Data berhasil disimpan');window.location='m_pembeli.php?mode=utama';</script>";
}else{
	echo "<script>alert ('Data tidak tersimpan, kemungkinan ada kode barang yang sama');
	window.location='m_pembeli.php?mode=masuk';</script>";
	}
?>