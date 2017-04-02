<?php
include ("koneksi.php");
$kd = $_POST['kd'];
$kc = $_POST['kc'];
$tc = $_POST['tc'];
$jc = $_POST['jc'];
$csk = $_POST['csk'];
$csh = $_POST['csh'];
$ck = $_POST['ck'];
$masuk = mysql_query ("insert into bayar_cicilan (cicilan_kode,kridit_kode,cicilan_tanggal,cicilan_jumlah,cicilan_ke,cicilan_sisa_ke,cicilan_sisa_harga) VALUES ('$kd','$kc','$tc','$jc','$ck','$csk','$csh')");
$ada = mysql_query("update bayar_cicilan set cicilan_sisa_harga = '$csh', cicilan_sisa_ke = '$csk',cicilan_ke = '$ck' ,cicilan_jumlah='$jc', cicilan_tanggal = '$tc', kridit_kode = '$kc' where cicilan_kode= '$kd'");
$query = mysql_query("select * from bayar_cicilan where cicilan_kode = '$kd'");
$data = mysql_fetch_row($query);
if($data > 0 )
{echo "$ada";
}else{
	echo "$masuk";
}
?>
<html>
<head>
<title>asd</title>
<script language="javascript"> setTimeout(function () { window.location.href= 't_bayar_cicilan.php?mode=utama'; },2000); </script>
</head>
<body>
<table width="100%" border="0" align="center">
  <tr>
    <td width="12%" align="right"><img src="images/loading.GIF"></td>
    <td width="88%" style="font-size:50px;" valign="middle" align="left">Harap tunggu data sedang di proses...</td>
  </tr>
</table>
</body>
</html>