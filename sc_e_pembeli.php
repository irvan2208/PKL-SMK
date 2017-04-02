<?php
include ("koneksi.php");
$ktp = $_POST['kd'];
$nm = $_POST['nm'];
$al = $_POST['al'];
$nt = $_POST['nt'];
$nh = $_POST['nh'];
$query = mysql_query("update pembeli set pembeli_hp = '$nh' ,pembeli_telpon='$nt', pembeli_alamat = '$al', pembeli_nama = '$nm' where pembeli_no_ktp= '$ktp'");

if ($query){
	echo "<script>alert ('Data berhasil di update!!');window.location='t_pembeli.php?mode=utama';</script>";
}else{
	echo "<script>alert ('Data tidak berhasi diupdate');
window.location='e_pembeli.php?mode=utama';</script>";
	}
?>