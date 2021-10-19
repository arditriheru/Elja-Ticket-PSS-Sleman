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
$tanggal1=$_POST['tgl1'];
$tanggal2=$_POST['tgl2'];
$tampil="SELECT * FROM pesan WHERE tgl_pesan BETWEEN '$tanggal1' AND '$tanggal2' ";
if (!$tampil)
   die("Gagal query..".mysql_error());
$hasil=mysql_query($tampil);
$num=mysql_num_rows($hasil);
?>
 <table align="center" border="1">
<tr><td colspan="8" align="center"><h2><b>PESAN MASUK</b></h2><?php echo"Jumlah Data :  $num "?></td></tr>
    <tr bgcolor="yellow" width=1000 height=50>
	 <th>No</th>
	 <th>Kode Pesan</th>
     <th>ID Member</th>
     <th>Posisi</th>
	 <th>Jumlah</th>
	 <th>Tanggal Pesan</th>
	 <th>Status</th>
	 <th>Proses</th>
    </tr> 
	
    <?php	
	$nomor=1;
    while ($row = mysql_fetch_array($hasil)) { 
         echo " <tr>";
		 echo "  <td><center>" .$nomor."</center></td>" ;
		 echo "  <td><center><font color='red'> ".$row['kode_pesan']." </font></center></td> " ;
         echo "  <td><center> ".$row['id_penonton']." </center></td> " ;
		 echo "  <td><center> ".$row['kode_tiket']." </center></td> " ;
		 echo "  <td><center> ".$row['jumlah']." </center></td> " ;
		 echo "  <td><center> ".$row['tgl_pesan']." </center></td> " ;
		 echo "  <td><center> ".$row['status']." </center></td> " ;
		 echo "  <td><center>"."<a href = #?id_penonton={$row['id_penonton']}>Hapus </a>"." </td> " ;
         echo " </tr> ";
		 $nomor++;
       
       }
    ?>
</table> 
</div>
<?php
	include "footer.php";
?>

</body>
</html>
