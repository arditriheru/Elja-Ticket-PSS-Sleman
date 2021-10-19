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
include "koneksi.php";
$kondisi=$_POST['cari'];
$tampil="select * from penonton where id_penonton='$kondisi' ";
if (!$tampil)
   die("Gagal query..".mysql_error());
$hasil=mysql_query($tampil);
$num=mysql_num_rows($hasil);
?>
	<!-- ####################################################################################################### -->
<table align="center" border="1">
<tr><td colspan="7" align="center"><h2><b>DATA PENONTON</b> </h2> <?php echo"Jumlah Data : $num "?></td></tr>
    <tr bgcolor="yellow" width=1000 height=50>
	 <th>No</th>
     <th>ID Penonton</th>
     <th>Nama Penonton</th>
	 <th>Username</th>
	 <th>Password</th>
	 <th colspan="2">Proses</th>
    </tr> 
	
    <?php	
	$nomor=1;
       while ($row = mysql_fetch_array($hasil)) { 
         echo " <tr>";
		 echo "  <td><center>" .$nomor."</center></td>" ;
         echo "  <td><center> ".$row['id_penonton']." </center></td> " ;
		 echo "  <td><center> ".$row['nama']." </center></td> " ;
		 echo "  <td><center> ".$row['username']." </center></td> " ;
		 echo "  <td><center> ".$row['password']." </center></td> " ;
		 echo "  <td><center>"."<a href = penonton_formedit.php?id_penonton={$row['id_penonton']}> <img src='button/edit.png'></a>"." </td> " ;
		 echo "  <td><center>"."<a href = penonton_hapus.php?id_penonton={$row['id_penonton']}><img src='button/delete.png'></a></center></td>";
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



