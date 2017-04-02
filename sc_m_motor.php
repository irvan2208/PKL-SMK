<?php
include ('koneksi.php');
$kde = $_POST['kd'];
$mrk = $_POST['mr'];
$tpe = $_POST['tp'];
$wrn = $_POST['wr'];
$hrg = $_POST['hr'];
$dsk = $_POST['desk'];
$namagambar = $_FILES['gambar1']['name'];
$lokasifile = $_FILES['gambar1']['tmp_name'];
$ukuranfile = $_FILES['gambar1']['size'];
$tipe = $_FILES['gambar1']['type'];
if( $tipe == "image/jpeg" || $tipe == "image/jpg" || $tipe == "image/gif" || $tipe == "image/png")
$lokasiupload = 'upload/';
$pindah = move_uploaded_file($lokasifile,$lokasiupload.$namagambar);
if ($pindah){
	$query = mysql_query("insert into motor (motor_kode,motor_merk,motor_type,motor_warna_pilihan,motor_harga,motor_gambar,desk)VALUES('$kde','$mrk','$tpe','$wrn','$hrg','$namagambar','$dsk')");
if ($query){
	echo "<script>alert ('Data berhasil disimpan');window.location='m_motor.php?mode=utama';</script>";
}else{
	echo "<script>alert ('Data tidak tersimpan, kemungkinan ada kode barang yang sama');
	window.location='m_motor.php?mode=masuk';</script>";
	}
}
?>