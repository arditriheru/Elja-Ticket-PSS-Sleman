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
	$tampil="SELECT  *,
        SUM(IF( YEAR(tgl_pesan) = $tgl_pesan, jumlah, 0)) AS jumlah
		FROM pesan 
		LEFT JOIN tiket USING(kode_tiket)
		WHERE status = 'Bayar'
		GROUP BY kode_tiket";
	$hasil=mysql_query($tampil);
	if ($hasil === FALSE) {
    die(mysql_error());
}
?>
 
  <td> <table border="1">
   <tr><td colspan="7" align="center">
   <h2><b><font face="Calibri">LAPORAN<br>PENDAPATAN PENJUALAN TIKET PER PERIODE<br>TAHUN <?php echo "$tgl_pesan" ?></b> </h2></td></tr>
	 <tr bgcolor="#DCDCDC" width=1000 height=50>
     <th>Jenis Tiket</th>
	 <th>Harga Satuan</th>
	 <th>Jumlah Tiket Terjual</th>
	 <th>SUBTOTAL</th>
    </tr>
	
<?php
$total=0;
	while($data=mysql_fetch_array($hasil)){
	$harga=number_format($data['harga'],0,",",".");
	
	$subtot = $data['jumlah'] * $data['harga'];
	$subtotal=number_format($subtot ,0,",",".");
	
	$tot = ($data['jumlah'] * $data['harga']) + $tot;
	$total=number_format($tot ,0,",",".");
	
	echo "<tr height=50>";
	echo "<td><center><h3>$data[kode_tiket]</h3></center></td>";
	echo "<td><center><h3>Rp.$harga</h3></center></td>";
	echo "<td><center><h3>$data[jumlah]</h3></center></td>";
	echo "<td><center><h3>Rp.$subtotal</h3></center></td> " ;
	}
	
	echo "<tr>
	<td colspan='3'><center><h3>TOTAL</h3></center></td>
	<td><center><h3>Rp.$total</h3></center></td>
		 </tr>";
	echo"</tr></table>";
?>
	<a href="laporan3.php">
		<button onClick="window.print();">Print</button>
    </a>
	</div>
</div>

</body>
</html>


