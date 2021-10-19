<?php 
session_start();
if(!isset($_SESSION['username'])) {
header('location:index.php'); }
else { $username = $_SESSION['username']; 
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
	<meta charset="UTF-8">
	<title>Elja Ticket | Halaman Tiket</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/style-responsive.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="imagetoolbar" content="no" />
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

<body>
	

<?php
	include "menu4.php";
?>
<?php
$id_penonton = $_SESSION["id_penonton"];
$tanggal = date('Y-m-d');
include "koneksi.php" ;
 $sql = "select * from pesan 
			inner join tiket on pesan.kode_tiket = tiket.kode_tiket
			where id_penonton= '$id_penonton' AND tgl_pesan= '$tanggal'
		";	
 $hasil = mysql_query($sql);
 if (!$hasil)
   die("Gagal query..".mysql_error());
?>

<!-- ####################################################################################################### -->
<br><div align="center" class="container"><b></b>
<?php
	 include "koneksi.php" ;
	 $sql = "select * from jadwal where status = 'Aktif' ";	
	 $jadwal = mysql_query($sql);
	 if (!$jadwal)
	   die("Gagal query..".mysql_error());
	?>
		<?php	
		   while ($row = mysql_fetch_array($jadwal)) { 
			 echo " <td><center><img src='gambar/$row[gambar]'width=90% height=auto></center>"." </td>" ;
		   }
		?>
<br>
<table align="center" border="0">
	<?php	
       while ($row = mysql_fetch_array($hasil)) {
		$stat = $row['status'];
	    $total = $row['jumlah'] * $row['harga'];
		
	     echo "  <tr bgcolor='ffff66' height=100% width=100%>
				 <th colspan='3'><h4><center> TIKET PERTANDINGAN </center></h4></th></tr> " ;
		 echo "  <tr bgcolor='ffffcc' height=100% width=100%>
				 <th colspan='3'><h5><center>".$row['jadwal']."</center></h5></th></tr> " ;
         echo " <tr bgcolor='ffff99' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Kode Pesan  </b></center></h5></th> " ;
		 echo "  <th width=10%><h5><left>  : </left></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['kode_pesan']." </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffffcc' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Status  </b></center></h5></th> " ;
		 echo "  <th width=10%><h5><left>  : </left></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['status']." </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffff99' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Jenis Tiket  </b></center></h5></th> " ;
		 echo "  <th width=10%><h5><left>  : </left></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['tribun']." </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffffcc' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Tribun  </b></center></h5></th> " ;
		 echo "  <th width=10%><h5><left>  : </left></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['kode_tiket']." </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffff99' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Harga  </b></center></h5></th> " ;
		 echo "  <th width=10%><h5><left>  : </left></h5></th> " ;
		 echo "  <th width=50%><h5><center> Rp ".$row['harga']." </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffffcc' height=100% width=100%>";
		 echo "  <th width=50%><h5><center><b> Jumlah  </b></center></h5></th> " ;
		 echo "  <th width=10%><h5><left>  : </left></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['jumlah']." Tiket</center></h5></th> " ;
		 echo " </tr> ";
         echo "  <tr bgcolor='ffcc99' height=100% width=100%>
				 <th colspan='3'><h4><center> Total Bayar Rp. ".$row['jumlah'] * $row['harga']." </center></h4></th></tr> " ;
		 echo "  <h6>PERHATIAN!<br>Silahkan copy kode pesan anda untuk melakukan verifikasi pembayaran.<br>Transfer pembayaran maksimal 1x24jam sebesar<br>Rp. $total ke Nomor Rekening: (BCA) 178 303 7878<br>Atas Nama: Ardi Tri Heru </center></h6> " ;		 
       }
    ?>
	
</table><br>
<br><br>
<div class="footer">
<?php
	include "footer.php";
?>
  </div><!--/ .footer -->
 </div>

</body>
</html>