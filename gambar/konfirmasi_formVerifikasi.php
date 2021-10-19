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
<?php
include "koneksi.php";
$kode_pesan=$_GET['kode_pesan'];
$tampil="select * from pesan where kode_pesan='$kode_pesan' ";
if (!$tampil)
   die("Gagal query..".mysql_error());
$hasil=mysql_query($tampil);
$num=mysql_num_rows($hasil);
?>

  <tr>
  <td> <table border="1">
   <tr><td colspan="7" align="center">
   <h2><b><font face="Calibri">VERIFIKASI </td></tr>
	 <th>Kode Pesan</th>
     <th>ID Penonton</th>
     <th>Posisi</th>
	 <th>Jumlah</th>
	 <th>Tanggal Pesan</th>
	 <th>Verifikasi</th>
    </tr> 
<?php
while($data=mysql_fetch_array($hasil))
{
echo "<td><center>$data[kode_pesan]</center></td>";
echo "<td><center>$data[id_penonton]</center></td>";
echo "<td><center>$data[kode_tiket]</center></td>";
echo "<td><center>$data[jumlah]</center></td>";
echo "<td><center>$data[tgl_pesan]</center></td>";
echo "<td><center><a href='konfirmasi_verifikasi.php?kode_pesan={$data['kode_pesan']}'>Ubah</a></center></td>";
}	  
echo"</td></tr></table>";
?>
</table>
</div>
<?php
	include "footer.php";
?>

</body>
</html>
