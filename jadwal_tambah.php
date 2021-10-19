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
<form action="jadwal_simpan.php" method="post" enctype="multipart/form-data" />
			  <table>
				<tr><td colspan="5" align="center"><h2><b>TAMBAH JADWAL</b> </h2></td></tr>
				<tr>
				<td>
					<input type="file" name="gambar" size="22" /><br>
					<font color="red">*Upload gambar dengan format jpg/jpeg</font><br><br><br>
						<b>Keterangan</b><br>
				<input type="text" name="keterangan" size="50" placeholder='Keterangan'/><br><br>
						<b>Tanggal</b><br>
				<input type="text" name="tanggal" size="50" placeholder='<?php echo $tanggal ?>'/><br><br>
					<input type='submit' name='submit' id='submit' value='Simpan' style=" width:80px; height:30px ">
					<input type='reset' value='Batal' style=" width:60px; height:30px "><br><br><br>
						</td>
				</tr>
				<tr>
					
					
				</tr>
				</table>
        </form>
		</table>
		</div>

<?php
	include "footer.php";
?>

</body>
</html>