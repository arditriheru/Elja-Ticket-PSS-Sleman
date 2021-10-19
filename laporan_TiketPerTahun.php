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
	<div align="center">
<?php
include "koneksi.php";
	$tahun_pesan=$_POST['tahun_pesan'];
	$tampil="SELECT  kode_tiket,
        SUM(IF( YEAR(tgl_pesan) = $tahun_pesan, jumlah, 0)) AS jumlah
		FROM pesan 
		LEFT JOIN tiket USING(kode_tiket)
		WHERE status = 'Bayar'
		GROUP BY kode_tiket
		UNION ALL
		SELECT 'TOTAL' kode_tiket,
        SUM(IF( YEAR(tgl_pesan) = $tahun_pesan, jumlah, 0)) AS jumlah
	FROM pesan WHERE status = 'Bayar'";
	$hasil=mysql_query($tampil);
	if ($hasil === FALSE) {
    die(mysql_error());
}
?>
 
  <td> <table border="1">
   <tr><td colspan="7" align="center">
   <h2><b><font face="Calibri">LAPORAN PENJUALAN TIKET<br>PER PERIODE TAHUN <?php echo "$tahun_pesan" ?></b> </h2></td></tr>
	 <tr bgcolor="yellow" width=1000 height=50>
     <th>Jenis Tiket</th>
	 <th>Jumlah Tiket Terjual</th>
    </tr> 
<?php
	while($data=mysql_fetch_array($hasil)){
	echo "<tr height=50>";
	echo "<td><center><h3>$data[kode_tiket]</h3></center></td>";
	echo "<td><center><h3>$data[jumlah] Tiket</h3></center></td>";
	}	  
	echo"</td></tr></table>";
	echo"<a href = print2.php?tahun_pesan=$tahun_pesan>
		<button>Cetak</button></a>";
?>
	</div>
</div>

<?php
	include "footer.php";
?>

</body>
</html>


