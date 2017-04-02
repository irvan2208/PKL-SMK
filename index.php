<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>HOME</title>
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
      <li><a href="login.php">LOGIN</a></li>
      <li class="last"><a href="view.php">DAFTAR HARGA</a></li>
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
        <li><a href="index.php">Home</a></li>
        <li><a href="profile.php">profile</a></li>
        <li><a href="login.php">Login</a><li>
        <li><a href="gallery.php">Gallery</a></li>
        <li class="last"><a href="view.php">DAFTAR HARGA</a></li>
      </ul>
    </div>
    <div id="search">
      <form action="artikel2.php" method="get">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" name="cari" value="Cari motor&hellip;"  onfocus="this.value=(this.value=='Cari motor&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Cari" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="content">
    <div id="featured_slide">
        <ul id="featurednews">
        <?php 
		include("koneksi.php");
  $query = mysql_query("select * from motor order by motor_kode");
  while($d = mysql_fetch_array($query)){ ?>
          <li><img src="upload/<?php echo $d['motor_gambar']; ?>"
  height="280px"/>
            <div class="panel-overlay">
            <a href="artikel.php?id=<?php echo $d['motor_kode']; ?>">
              <h2><?php echo $d['motor_merk']; ?> <?php echo $d['motor_type']; ?></h2>
              <p><?php $kata= $d['desk']; echo substr($kata,0,80); ?>...</a><br /><a href="artikel.php?id=<?php echo $d['motor_kode']; ?>">Lanjut Membaca &raquo;</a></p>
            </div>
            </li><?php } ?>
        </ul>
      </div>
    </div>
    <div class="column">
    <?php 
		include("koneksi.php");
  $query = mysql_query("select * from motor order by motor_kode limit 5,3");
  while($d = mysql_fetch_array($query)){ ?>
      <ul class="latestnews">
        <li><img src="upload/<?php echo $d['motor_gambar']; ?>"
  width="100px" height="100px"/>
          <p><strong><a href="artikel.php?id=<?php echo $d['motor_kode']; ?>"><?php echo $d['motor_merk']; ?> <?php echo $d['motor_type']; ?></a></strong><br /><?php $kata= $d['desk']; echo substr($kata,0,120); ?>...</p>
        </li>
      </ul>
      <?php } ?>
        </li>
      </ul>
    </div>
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