<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
session_start();
if (!$_SESSION['status']){
	echo "<script>alert('anda harus login terlebih dahulu !!!');window.location='login.php?mode=masuk'</script>";};
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>KRIDIT PAKET</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>
</head>
<link href="images/loading.GIF" rel='SHORTCUT ICON'/>
<body id="top">
<div class="wrapper col0">
<div id="topline">
<ul>
      <li><a href="index.php">HOME</a></li>
      <li><a href="profile.php">PROFILE</a></li>
      <li><a href="logout.php">LOGOUT</a></li>
      <li class="last"><a href="artikel.php">ARTIKEL</a></li>
    </ul>
    <br class="clear" />
</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="header">
  <div class="fl_left"><a href="index.php">
      <img src="upload/1.jpg" width="430" height="80px"/></a>
      <p>PT. MOTOR KEREN</p>
    </div>
    <div class="fl_right"><a href="#"><img src="images/demo/468x60.gif"alt="" /></a></div>
    <br class="clear" />
  </div>
</div>
  <!-- ####################################################################################################### -->
  <div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li><a href="#">Tampilkan data..</a>
          <ul>
            <li><a href="t_bayar_cicilan.php">bayar cicilan</a></li>
            <li><a href="t_beli_cash.php">beli cash</a></li>
            <li><a href="t_beli_kridit.php">beli kridit</a></li>
            <li><a href="t_kridit_paket.php">kridit paket</a></li>
            <li><a href="t_motor.php">motor</a></li>
            <li><a href="t_pembeli.php">pembeli</a></li>
            <li><a href="d_pembeli.php">pembelian cash</a></li>
            <li><a href="d_pembeli1.php">pembelian kredit</a></li>
          </ul>
    </li>
        <li><a href="#">Tambah data..</a>
          <ul>
            <li><a href="m_bayar_cicilan.php">bayar cicilan</a></li>
            <li><a href="m_beli_cash.php">beli cash</a></li>
            <li><a href="m_beli_kridit.php">beli kridit</a></li>
            <li><a href="m_kridit_paket.php">kridit paket</a></li>
            <li><a href="m_motor.php">motor</a></li>
            <li><a href="m_pembeli.php">pembeli</a></li>
          </ul>
        </li>
        <li><a href="#">Update data..</a>
          <ul>
            <li><a href="t_bayar_cicilan.php">bayar cicilan</a></li>
            <li><a href="t_beli_cash.php">beli cash</a></li>
            <li><a href="t_beli_kridit.php">beli kridit</a></li>
            <li><a href="t_kridit_paket.php">kridit paket</a></li>
            <li><a href="t_motor.php">motor</a></li>
            <li><a href="t_pembeli.php">pembeli</a></li>
          </ul>
        </li>
        <li><a href="#">Hapus data..</a>
          <ul>
            <li><a href="t_bayar_cicilan.php">bayar cicilan</a></li>
            <li><a href="t_beli_cash.php">beli cash</a></li>
            <li><a href="t_beli_kridit.php">beli kridit</a></li>
            <li><a href="t_kridit_paket.php">kridit paket</a></li>
            <li><a href="t_motor.php">motor</a></li>
            <li><a href="t_pembeli.php">pembeli</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div id="search">
      <form action="c_t_kridit_paket.php" method="get">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" name="cari" value="Masukkan KODE PAKET&hellip;"  onfocus="this.value=(this.value=='Masukkan KODE PAKET&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Cari" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
  <div class="wrapper"  align="center">
  <div class="container" align="center">
    <div class="content1" align="center">
<table width="700" border="1">
  <tr bgcolor="#3b5998" height="15px" style="font-family:Arial, Helvetica, sans-serif; color:white; font-size:12px; font-weight:700" align="center">
    <td>KODE PAKET</td>
    <td>HARGA CASH</td>
    <td>UANG MUKA</td>
    <td>JUMLAH CICILAN</td>
    <td>BUNGA</td>
    <td>NILAI CICILAN</td>
    <td>PILIHAN</td>
  </tr>
  <?php
  include("koneksi.php");
  $query = mysql_query("select * from kridit_paket");
  while($d = mysql_fetch_array($query)){ ?>
  <tr>
    <td><?php echo $d['paket_kode']; ?></td>
    <td><?php echo $d['paket_harga_cash']; ?></td>
    <td><?php echo $d['paket_uang_muka']; ?></td>
    <td align="center"><?php echo $d['cicilan_jumlah']; ?></td>
    <td><?php echo $d['paket_bunga']; ?></td>
    <td><?php echo $d['paket_nilai_cicilan']; ?></td>
    <td><a href="e_kridit_paket.php?id=<?php echo $d['paket_kode'];?>">edit</a>|<a href="h_kridit_paket.php?id=<?php echo $d['paket_kode']; ?>" onClick="return confirm('anda yakin ingin menghapus ?');">delete</a></td>
  </tr>
    <?php } ?>
</table>
    <br class="clear" />
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col8">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="index.php">PT. Motor Keren</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>