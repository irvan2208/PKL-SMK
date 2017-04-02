<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
session_start();
if (!$_SESSION['status']){
	echo "<script>alert('anda harus login terlebih dahulu !!!');window.location='login.php?mode=masuk'</script>";};
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>BAYAR CICILAN</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>
<script language="javascript">
function getkey(e)
{
if (window.event)
   return window.event.keyCode;
else if (e)
   return e.which;
else
   return null;
}
function goodchars(e, goods, field)
{
var key, keychar;
key = getkey(e);
if (key == null) return true;
 
keychar = String.fromCharCode(key);
keychar = keychar.toLowerCase();
goods = goods.toLowerCase();
 
// check goodkeys
if (goods.indexOf(keychar) != -1)
    return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
   return true;
    
if (key == 13) {
    var i;
    for (i = 0; i < field.form.elements.length; i++)
        if (field == field.form.elements[i])
            break;
    i = (i + 1) % field.form.elements.length;
    field.form.elements[i].focus();
    return false;
    };
// else return false
return false;
}
</script>
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
      <form action="t_data_penjualan.php" method="get">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" name="cari" value="Masukkan No.KTP&hellip;"  onfocus="this.value=(this.value=='Masukkan No.KTP&hellip;')? '' : this.value ;" />
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
    <form action="sc_m_bayar_cicilan.php" method="post">
<table width="500" border="7" align="center" id="as">
  <tr>
  <td colspan="2" height="20" valign="middle" bgcolor="#3b5998" style=" font-family:Arial, Helvetica, sans-serif; color:white; font-size:20px;">TAMBAH DATA BAYAR CICILAN</td>
  </tr>
  <tr>
    <td width="77%">KODE CICILAN</td>
    <td width="23%"><input type="text" name="kd" size="28"/></td>
  </tr>
  <tr>
    <td>KODE KRIDIT</td>
    <td><select name="kc">
    <option>Data belum terisi</option>
    <?php
  include("koneksi.php");
  $query = mysql_query("select * from beli_kridit");
  while($d = mysql_fetch_array($query)){ ?>
  <option value="<?php echo $d['kridit_kode'];?>"><?php echo $d['kridit_kode'];?></option>
  <?php } ?>
  </select></td>
  </tr>
  <tr>
    <td>TANGGAL CICILAN</td>
    <td><input type="date" name="tc" /></td>
  </tr>
  <tr>
    <td>JUMLAH CICILAN (001,004=24 | 002,003=12)</td>
    <td><input type="text" name="jc" size="28" onkeypress="return goodchars(event,'0123456789',this)"/></td>
  </tr>
  <tr>
    <td>CICILAN KE</td>
    <td><input type="text" name="ck" size="28" onkeypress="return goodchars(event,'0123456789',this)"/></td>
  </tr>
  <tr>
    <td>SISA CICILAN</td>
    <td><input type="text" name="csk" size="28" onkeypress="return goodchars(event,'0123456789',this)"/></td>
  </tr>
  <tr>
    <td>BAYAR</td>
    <td><input type="text" name="csh" size="28"onkeypress="return goodchars(event,'0123456789',this)"/></td>
  </tr>
  <tr>
  	<td colspan="2" align="right"><input type="submit"  value="lanjut &raquo;" /></td>
  </tr>
</table>
</form>

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