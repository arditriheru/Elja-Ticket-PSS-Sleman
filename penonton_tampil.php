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
<table><td>
<form action="cari_penonton.php" method="post" enctype="multipart/form-data">
<h2><center>HALAMAN MEMBER</h2></center>
  <br><div align="left"><font color="red"><label><center>PENCARIAN</center></label><br>
  <center><input class='desc' name='cari' type='text' id='cari' size='35' hight='10' placeholder="Masukkan ID Member"/></center></div><br><br>
  <center><input name="submit" type="submit" class="btn btn-default" value="Tampilkan"/></center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </form>
  </td></table>
<?php
 //include "koneksi.php" ;
 //$sql = "select * from penonton order by nama asc where  ";	
 //$hasil = mysql_query($sql);
 //$num=mysql_num_rows($hasil);
 //if (!$hasil)
  // die("Gagal query..".mysql_error());
?>

	<!-- ####################################################################################################### -->
<!--<table align="center" border="1">
<tr><td colspan="7" align="center"><h2><b>DATA MEMBER</b> </h2> <?php //echo"Jumlah Data : $num "?></td></tr>
    <tr bgcolor="yellow" width=1000 height=50>
	 <th>No</th>
     <th>ID Member</th>
     <th>Nama</th>
	 <th>Username</th>
	 <th>Password</th>
	 <th colspan="2" align="center">Proses</th>
    </tr> -->
	
    <?php	
	//$nomor=1;
    //  while ($row = mysql_fetch_array($hasil)) { 
    //  echo " <tr>";
	//	 echo "  <td><center>" .$nomor."</center></td>" ;
    //  echo "  <td><center> ".$row['id_penonton']." </center></td> " ;
	//	 echo "  <td><center> ".$row['nama']." </center></td> " ;
	//	 echo "  <td><center> ".$row['username']." </center></td> " ;
	//	 echo "  <td><center> ".$row['password']." </center></td> " ;
	//	 echo "  <td><center>"."<a href = penonton_formedit.php?id_penonton={$row['id_penonton']}><img src='button/edit.png'>"." </td> " ;
	//	 echo "  <td><center>"."<a href = penonton_hapus.php?id_penonton={$row['id_penonton']}><img src='button/delete.png'>"." </td> " ;
    //    echo " </tr> ";
	//	 $nomor++;
    //  }
    ?>
</table> 
</div>

<?php
	include "footer.php";
?>

</body>
</html>