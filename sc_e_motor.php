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
	$query = mysql_query("update motor set motor_harga = '$hrg',desk = '$dsk', motor_warna_pilihan = '$wrn',motor_type = '$tpe' ,motor_merk='$mrk', motor_gambar = '$namagambar' where motor_kode= '$kde'");
if ($pindah){
	$query = mysql_query("update motor set motor_harga = '$hrg',desk = '$dsk', motor_warna_pilihan = '$wrn',motor_type = '$tpe' ,motor_merk='$mrk', motor_gambar = '$namagambar' where motor_kode= '$kde'");
}
if ($query){
	echo "<script>alert ('Data berhasil di update!!');window.location='t_motor.php?mode=utama';</script>";
}else{
	echo "<script>alert ('Data tidak berhasi diupdate');
window.location='e_motor.php?mode=utama';</script>";
	}
?>