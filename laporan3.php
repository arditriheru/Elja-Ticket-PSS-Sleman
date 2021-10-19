<?php 
include "koneksi.php";
session_start();
if(!isset($_SESSION['username'])) {
header('location:index.php'); }
else { $username = $_SESSION['username']; 
}
?>
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
<!-- untuk menampilkan tanggal -->
	<script src="ui/jquery.ui.datepicker.js"></script>
	<script>
		$(function() {
			$( "#tgl_simpanan" ).datepicker({
				dateFormat : "yy/mm/dd",
				changeMonth: true,
				changeYear: true
			});
		});
	</script>
	<div align="center">
	<table><td>
<form action="laporan_PendapatanPenjualanTiket.php" name="laporan" id="laporan" method="post" enctype="multipart/form-data"><br>
<h2 align="center"><b><font face="Calibri">LAPORAN PENDAPATAN PENJUALAN TIKET<br>PER TAHUN</b> </h2>
	<div align="center"><b>TAHUN :</b>
		<select id="tgl_pesan" class="field select medium" tabindex="11" name="tgl_pesan" required> 
			<option selected="selected" disabled>Pilih</option>
				<?php
							include "koneksi.php";
							$hasiltahun = mysql_query("SELECT DISTINCT YEAR(p.tgl_pesan) tahun FROM pesan p");
							while($datatahun = mysql_fetch_array($hasiltahun))
							{
								echo "<option value='".$datatahun['tahun']."'>".$datatahun['tahun']."</option>";
							}
				?>
		</select>	
	<input type='submit' value='Tampilkan' class="button"/>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
</form><br>
  </td></table>
	</div>
</div>

<?php
	include "footer.php";
?>

</body>
</html>


