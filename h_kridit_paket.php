<?php
include("koneksi.php");
$id = $_GET['id'];
$query  = mysql_query("delete from kridit_paket where paket_kode='$id'");
?>
<html>
<head>
<title>Hapus</title>
<script language="javascript"> setTimeout(function () { window.location.href= 't_kridit_paket.php?mode=utama'; },500); </script>
</head>
<body>
<table width="100%" border="0">
  <tr>
    <td>Menghapus...</td>
  </tr>
  <tr>
    <td><img src="images/loading2.GIF" /></td>
  </tr>
</table>

</body>
</html>