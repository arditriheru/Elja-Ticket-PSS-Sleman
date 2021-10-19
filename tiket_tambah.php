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
?>

<!-- ####################################################################################################### -->
<div class="container">
<form action="tiket_simpan.php" method="post" enctype="multipart/form-data" />
			  <table>
				<tr><td colspan="5" align="center"><h2><b>TAMBAH TIKET</b> </h2></td></tr>
				<tr>
					<td>Nama Tribun</td>
					<td><input type="text" name="tribun" size="30" /></td>
				</tr>
				<tr>
					<td>Posisi</td>
					<td><input type="text" name="kode_tiket" size="30" /></td>
				</tr>
				
				<tr>
					<td>Harga</td>
					<td><input type="text" name="harga" size="30" /></td>
				</tr>
				
				<tr>
					<td>Stok</td>
					<td><input type="text" name="stok" size="22" /></td>
				</tr>
				
				<tr>
					<td>&nbsp;</td>
					<td><input type='submit' name='submit' id='submit' value='Simpan'>
						<input type='reset' value='Batal'></td>
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