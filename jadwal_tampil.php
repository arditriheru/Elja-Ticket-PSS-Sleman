<?php 
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
<?php
 include "koneksi.php" ;
 $sql = "select * from jadwal order by tanggal asc";	
 $hasil = mysql_query($sql);
 if (!$hasil)
   die("Gagal query..".mysql_error());
?>
<table align="center" border="1">
<tr bgcolor="yellow" width=100% height=50><td colspan="6" align="center"><h2><b>JADWAL PERTANDINGAN</b> </h2></td></tr>	
<tr>
	<?php
		 include "koneksi.php" ;
		 $adayangaktif="Tidak";
		 $sql = "select * from jadwal where status = 'Aktif' ";	
		 $jadwal = mysql_query($sql);
		 if (!$jadwal)
		   die("Gagal query..".mysql_error());
		   while ($row = mysql_fetch_array($jadwal)) { 
		   $adayangaktif="Ya";
				 echo " <center><img src='gambar/$row[gambar]'width=50% height=auto></center>"."" ;
			   }
	?>
</tr><br>
    <tr bgcolor="Lavender" width=100% height=50>
     <th>Pertandingan</th>
	 <th>Tanggal</th>
	 <th>Status</th>
	 <th colspan="3">Proses</th>
    </tr>
	
    <?php	
       while ($row = mysql_fetch_array($hasil)) {
		$status = $row['status'];	   
         echo " <tr>";
		 echo "  <td ".($status=='Aktif'?'bgcolor=E0FFFF':'bgcolor=ffffff')."><center> ".$row['keterangan']." </td> " ;
		 echo "  <td ".($status=='Aktif'?'bgcolor=E0FFFF':'bgcolor=ffffff')."><center> ".$row['tanggal']." </td> " ;
		 echo "  <td ".($status=='Aktif'?'bgcolor=E0FFFF':'bgcolor=ffffff')."><center> ".$row['status']." </td> " ;
		 if($adayangaktif=="Ya"){
		 echo "  <td ".($status=='Aktif'?'bgcolor=E0FFFF':'bgcolor=ffffff')."><center>"."<a href = jadwal_nonAktif.php?kode_jadwal={$row['kode_jadwal']}><h2><img src='button/privat.jpg'></h2></a>"." </td> " ;
			 }else{
			 echo "  <td><center>"."<a href = jadwal_aktif.php?kode_jadwal={$row['kode_jadwal']}><h2><img src='button/publik.jpg'></h2></a>"." </td> " ;
			 }
  		 echo "  <td><center>"."<a href = jadwal_hapus.php?kode_jadwal={$row['kode_jadwal']}><h2><img src='button/delete.png'></h2></a>"." </td> " ;
         echo " </tr> ";		 
       }
    ?>
</table>
</div>

<?php
	include "footer.php";
?>

</body>
</html>