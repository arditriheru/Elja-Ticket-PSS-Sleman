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
<!-- ####################################################################################################### -->
<div class="container">
	<div align="center">
<?php
include "koneksi.php";
	$tgl_pesan=$_GET['tgl_pesan'];
	$id_penonton=$_GET['id_penonton'];
	$tampil="SELECT  id_penonton,
        SUM(IF( YEAR(tgl_pesan) = $tgl_pesan, jumlah, 0)) AS jumlah
		FROM pesan where id_penonton='$id_penonton'
		GROUP BY id_penonton";
	$hasil=mysql_query($tampil);
	if ($hasil === FALSE) {
    die(mysql_error());
}
?>
 
  <table border="1"/>
   <tr><td colspan="7" align="center">
   <h2><b><font face="Calibri">LAPORAN PEMESANAN TIKET<br>PER ID MEMBER<br>TAHUN <?php echo "$tgl_pesan" ?></b> </h2></td></tr>
	 <tr bgcolor="#DCDCDC" width=1000 height=50>
     <th>ID Member</th>
	 <th>Jumlah</th>
    </tr> 
	
<?php
	while($data=mysql_fetch_array($hasil)){
	echo "<tr>";
	echo "<td><center>$data[id_penonton]</center></td>";
	echo "<td><center>$data[jumlah]x pesan</center></td>";
	}	  
	echo"</td></tr></table>";
?>
<a href="laporan1.php">
		<button onClick="window.print();">Print</button>
    </a>
	</div>
</div>

</body>
</html>

