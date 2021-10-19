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
<script>
  function warning() {
	return confirm("Apakah Anda Yakin?");
}
</script>
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
$tanggal = date('Y-m-d');
 $sql = "select * from konfirmasi 
		inner join bayar on konfirmasi.kode_bayar = bayar.kode_bayar
		inner join pesan on pesan.kode_pesan = bayar.kode_pesan
		where status = 'Belum Bayar' AND tgl_konfirmasi = '$tanggal'
		order by kode_konfirmasi desc";	
 $hasil = mysql_query($sql);
 $num=mysql_num_rows($hasil);
 if (!$hasil)
   die("Gagal query..".mysql_error());
?>
<table align="center" border="1">
<tr><td colspan="9" align="center"><h2><b>KONFIRMASI MASUK</b></h2><br><?php echo date('l, d/m/Y');?><br><?php echo"Jumlah : $num "?></td></tr>
    <tr bgcolor="yellow" width=100% height=50>
     <th>NO</th>
	 <th>Kode Pesan</th>
     <th>Jumlah Transfer</th>
	 <th>Tanggal Konfirmasi</th>
	 <th>Bukti Transfer</th>
	 <th>Jadwal</th>
	 <th>Status</th>
	 <th colspan="2">Proses</th>
    </tr> 
	
	
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
		 
         echo " <tr>";
		 echo "  <td><center>" .$nomor."</center></td>" ;
         echo "  <td><center> ".$row['pemesanan']." </td> " ;
		 echo "  <td><center> Rp. $jml_transfer </td> " ;
		 echo "  <td><center> ".$row['tgl_konfirmasi']." </td> " ;
		 echo "  <td><center><div class=”img-zoom”><img class='contoh-gambar-zoom' src='gambar/bukti/$row[gambar]'>"." </td></div> " ;
		 echo "  <td><center> ".$row['jadwal']." </td> " ;
		 echo "  <td ".($stat=='Bayar'?'bgcolor=white':'bgcolor=ff6666')."><center> ".$row['status']." </td> " ;
		 echo "  <td><center>"."<a href = halaman_adminVerifikasi.php?kode_pesan={$row['kode_pesan']}><img src='button/verifikasi.jpg'></a>"." </td>";
		 echo "	 <td><center>"."<a href = konfirmasi_hapus.php?kode_konfirmasi={$row['kode_konfirmasi']}><img src='button/delete.png'></a>"." </td>	" ;
         echo " </tr> ";
		 $nomor++;
       }
    ?>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
<?php
	include "footer.php";
?>

</body>
</html>



