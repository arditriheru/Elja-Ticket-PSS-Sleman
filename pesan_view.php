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
	<link rel="stylesheet" href="styles/contoh-gambar-zoom.css">
	
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
include ('koneksi.php');
$pemesanan = $_GET['pemesanan'];
include "koneksi.php" ;
 $sql = "select * from konfirmasi 
		inner join bayar on konfirmasi.kode_bayar = bayar.kode_bayar
		inner join pesan on pesan.kode_pesan = bayar.kode_pesan
		WHERE pemesanan='$pemesanan'";
 $hasil = mysql_query($sql);
 //$num=mysql_num_rows($hasil);
 if (!$hasil)
   die("Gagal query..".mysql_error());
?>
	<table align="center" border="0">
<tr><td colspan="2" align="center"><h2><b>KONFIRMASI PEMBAYARAN</b></h2><?php //echo"Jumlah : $num "?></td></tr>
	
    <?php	
	$nomor=1;
	
	echo "<br>".$format_indonesia; //1.234,56
       while ($row = mysql_fetch_array($hasil)) {
	   if ($nomor % 2 == 0){
							echo "<tr style='background-color:#9AAEDB'>";
						}else {
							echo "<tr style='background-color:#000000'>";
						}
	   
		 $jml_transfer=number_format($row['jml_transfer'],0,",",".");
		 $stat = $row['status'];
		 
		 echo " <tr bgcolor='ffff99' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Kode Pesan  </b></center></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['pemesanan']." </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffffcc' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Jumlah Transfer  </b></center></h5></th> " ;
		 echo "  <th width=50%><h5><center> Rp. $jml_transfer </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffff99' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Tanggal Konfirmasi  </b></center></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['tgl_konfirmasi']." </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffffcc' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Bukti Transfer  </b></center></h5></th> " ;
		 echo "  <th width=50%><h5><center> <div class=”img-zoom”><img class='contoh-gambar-zoom' src='gambar/bukti/$row[gambar]'>"." </td></div> </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffff99' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Jadwal Pertandingan  </b></center></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['jadwal']." </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffffcc' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Status  </b></center></h5></th> " ;
		 echo "  <th ".($stat=='Bayar'?'bgcolor=ffffcc':'bgcolor=ff6666')." width=50%><h5><center> ".$row['status']."</center></h5></th> " ;
		 echo " </tr> ";
		 echo "  <tr bgcolor='ffffff' height=100% width=100%>
				 <td colspan='2'><center>"."<a href = konfirmasi_verifikasi.php?kode_pesan={$row['kode_pesan']}><img src='button/verifikasi.jpg'></a>"." </td>
				</tr> " ;
       }
    ?>
</table>
		</div>
		
		<?php
	include "footer.php";
?>

</body>
</html>