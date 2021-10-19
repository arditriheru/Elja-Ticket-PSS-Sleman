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
	$tampil="select * from pesan inner join tiket on pesan.kode_tiket=tiket.kode_tiket where kode_pesan='$kondisi' ";
	if (!$tampil)
	   die("Gagal query..".mysql_error());
	$hasil=mysql_query($tampil);
	//$num=mysql_num_rows($hasil);
?>

  
  <td> <table border="0">
   <tr><td colspan="8" align="center">
   <h2 color="ffff66"><b><font face="Calibri">HASIL PENCARIAN : <font color="red"><?php echo "$kondisi" ?></font></b> </h2> <?php //echo"Jumlah : $num "?></td></tr>
	 <?php	
       while ($row = mysql_fetch_array($hasil)) {
		$stat = $row['status'];
	    $total = $row['jumlah'] * $row['harga'];
		
         echo " <tr bgcolor='ffff99' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Kode Pesan  </b></center></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['kode_pesan']." </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffffcc' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> ID Member  </b></center></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['id_penonton']." </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffff99' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Jadwal Pertandingan  </b></center></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['jadwal']." </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffffcc' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Tribun  </b></center></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['kode_tiket']." </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffff99' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Jenis Tiket  </b></center></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['tribun']." </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffffcc' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Jumlah Pesan  </b></center></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['jumlah']. " Tiket </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffff99' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Tanggal Pesan  </b></center></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['tgl_pesan']."</center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffffcc' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Status  </b></center></h5></th> " ;
		 echo "  <th ".($stat=='Bayar'?'bgcolor=ffffcc':'bgcolor=ff6666')." width=50%><h5><center> ".$row['status']."</center></h5></th> " ;
		 echo " </tr> ";
         echo "  <tr bgcolor='ffffff' height=100% width=100%>
				 <td colspan='2'><center>"."<a href = pesan_view.php?pemesanan={$row['kode_pesan']}><img src='button/cari.png'></a>"." </td>
				</tr> " ;
		 
       }
    ?>
<?php
	while($data=mysql_fetch_array($hasil)){
	$stat = $data['status'];
	echo "<tr>";
	echo "<td><center>$data[kode_pesan]</center></td>";
	echo "<td><center>$data[id_penonton]</center></td>";
	echo "<td><center>$data[jadwal]</center></td>";
	echo "<td><center>$data[kode_tiket]</center></td>";
	echo "<td><center>$data[jumlah]</center></td>";
	echo "<td><center>$data[tgl_pesan]</center></td>";
	echo "<td ".($stat=='Bayar'?'bgcolor=white':'bgcolor=red')."><center>$data[status]</center></td>";
	echo "  <td><center>"."<a href = pesan_view.php?pemesanan={$data['kode_pesan']}><img src='button/cari.png'></a>"." </td> " ;

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
