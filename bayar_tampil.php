<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
	<title>Elja Ticket</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="imagetoolbar" content="no" />
	<link rel="stylesheet" href="styles/layout_admin.css" type="text/css" />
	<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
	<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>
</head>
<body id="top">

<?php
	include "header.php";
?>
<?php
	include "menu.php";
	$tanggal = date('Y-m-d');
?>

<!-- ####################################################################################################### -->
<div class="container">
<table><td>
<form action="bayar_filter.php" method="post" enctype="multipart/form-data">
<h2><center>HALAMAN BAYAR</h2></center>
  <br><div align="left"><font color="red"><label><center>TAMPILKAN BERDASARKAN TANGGAL</center></label><br>
  <center>
  <input class='desc' name='tanggal1' type='text' id='tanggal1' size='35' hight='10' placeholder="<?php echo $tanggal ?>"/> s/d
  <input class='desc' name='tanggal2' type='text' id='tanggal2' size='35' hight='10' placeholder="<?php echo $tanggal ?>"/><br><br>
  <input name="submit" type="submit" class="btn btn-default" value="Tampilkan"/>
  </center></div>
  </form>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</td>
</table>
</div>

<?php
	include "footer.php";
?>

</body>
</html>



