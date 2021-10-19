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
	<title>Elja Ticket | Halaman Pesan</title>
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
	return confirm("Yakin Dengan Pesanan Anda?");
}
</script>
<script type="text/javascript">
function hitung()
{
var a = parseFloat (document.forms.form.jum.value);
var b = parseFloat (document.forms.form.harga.value);

var tot = parseFloat(document.forms.form.total.value = a * b);

}
</script>

<body>
	

<?php
	include "menu5.php";
?>
<?php
	 include "koneksi.php" ;
	 $sql = "select * from jadwal ";	
	 $hasil = mysql_query($sql);
	 if (!$hasil)
	   die("Gagal query..".mysql_error());
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
<div class="container">
<div align="center" class="container"><b>DETAIL PESAN</b>
<?php
		 include "koneksi.php" ;
		 $sql = "select * from jadwal where status = 'Aktif' ";	
		 $jadwal = mysql_query($sql);
		 if (!$jadwal)
		   die("Gagal query..".mysql_error());
		   while ($row = mysql_fetch_array($jadwal)) { 
				 echo " <center><img src='gambar/$row[gambar]'width=90% height=auto></center>"."" ;
			   }
	?><br>
<form action="pesan_cetak.php" method="post" enctype="multipart/form-data">
<table align="center" border="0">
	
    <?php	
       while ($row = mysql_fetch_array($hasil)) { 
	   echo "  <tr bgcolor='ffff66' height=100% width=100%>
				 <th colspan='3'><h4><center> TIKET PERTANDINGAN </center></h4></th></tr> " ;
		 echo "  <tr bgcolor='ffffcc' height=100% width=100%>
				 <th colspan='3'><h5><center>".$row['jadwal']."</center></h5></th></tr> " ;
         echo " <tr bgcolor='ffff99' height=100% width=100%>";
		 echo "  <th width=50%><h5><center> Jenis Tiket </center></h5></th> " ;
		 echo "  <th width=10%><h5><left>  : </left></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['tribun']." </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffffcc' height=100% width=100%>";
		 echo "  <th width=50%><h5><center> Tribun </center></h5></th> " ;
		 echo "  <th width=10%><h5><left>  : </left></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['kode_tiket']." </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffff99' height=100% width=100%>";
		 echo "  <th width=50%><h5><center> Harga </center></h5></th> " ;
		 echo "  <th width=10%><h5><left>  : </left></h5></th> " ;
		 echo "  <th width=50%><h5><center> Rp ".$row['harga']." </center></h5></th> " ;
		 echo " </tr> ";
		 echo " <tr bgcolor='ffffcc' height=100% width=100%>";
		 echo "  <th width=50%><h5><center> Jumlah </center></h5></th> " ;
		 echo "  <th width=10%><h5><left>  : </left></h5></th> " ;
		 echo "  <th width=50%><h5><center> ".$row['jumlah']." Tiket</center></h5></th> " ;
		 echo " </tr> ";
         echo "  <tr bgcolor='ffcc99' height=100% width=100%>
				 <th colspan='3'><h4><center> Total Bayar Rp. ".$row['jumlah'] * $row['harga']." </center></h4></th></tr> " ;
		 
       }
    ?>
	
<table align="center" border="0">
		<div align="center">
  		<button name="submit" type="submit" class="btn btn-default" onClick="return warning();" onClick="return total();">Yakin</button>
		<button name="reset" type="reset" class="btn btn-default">Batal</button>    </div>
</table>
<br><br>

</form>
	<div class="footer">
<?php
	include "footer.php";
?>
  </div><!--/ .footer -->
 </div>
</div>

</body>
</html>