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
 $sql = "select * from tribun";	
 $hasil = mysql_query($sql);
 if (!$hasil)
   die("Gagal query..".mysql_error());
?>
<table align="center" border="1">
<tr><td colspan="5" align="center"><h2><b>DAFTAR TRIBUN</b> </h2></td></tr>
    <tr bgcolor="yellow" width=1000 height=50>
     <th>Kode Tribun</th>
     <th>Nama Tribun</th>
	 <th colspan='2'>Proses</th>
    </tr> 
	
	
    <?php	
	
  
       while ($row = mysql_fetch_array($hasil)) { 
         echo " <tr>";
         echo "  <td><center> ".$row['kode_tribun']." </td> " ;
		 echo "  <td><center> ".$row['nama_tribun']." </td> " ;
		 echo "  <td><center>"."<a href = tribun_formedit.php?kode_tribun={$row['kode_tribun']}><img src='button/edit.png'></a>"." </td> " ;
		 echo "  <td><center>"."<a href = tribun_hapus.php?kode_tribun={$row['kode_tribun']}><img src='button/delete.png'></a>"." </td> " ;
         echo " </tr> ";
       }
    ?>
</table>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php
	include "footer.php";
?>

</body>
</html>


