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
<script>
  function warning() {
	return confirm("Yakin Dihapus?");
}
</script>
<body id="top">

<?php
	include "header.php";
	include "menu.php";
?>

<!-- ####################################################################################################### -->
<div class="container">
<table><td>
<form action="cariPesan.php" method="post" enctype="multipart/form-data">
<h2><center>HALAMAN PESAN</h2></center>
  <br><div align="left"><font color="red"><label><center>PENCARIAN</center></label><br>
  <center><input class='desc' name='cari' type='text' id='cari' size='35' hight='10' placeholder="Masukkan Kode Pesan"/></center></div><br><br>
  <center><input name="submit" type="submit" class="btn btn-default" value="Tampilkan"/></center>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  </form>
  </td></table>
<?php
 //include "koneksi.php" ;
// $sql = "select * from pesan 
			//inner join penonton on pesan.id_penonton = penonton.id_penonton
			//inner join tiket on pesan.kode_tiket = tiket.kode_tiket
			//order by kode_pesan desc
		//";	
// $hasil = mysql_query($sql);
// $num=mysql_num_rows($hasil);
// if (!$hasil)
// die("Gagal query..".mysql_error());
?>

	<!-- ####################################################################################################### -->
<!--<table align="center" border="1">
<tr><td colspan="10" align="center"><h2><b>DATA PESAN MASUK</b></h2><?php //echo"Jumlah Data :  $num "?></td></tr>
    <tr bgcolor="yellow" width=1000 height=50>
	 <th>No</th>
	 <th>Kode Pesan</th>
     <th>ID Member</th>
	 <th>Nama</th>
     <th>Posisi</th>
	 <th>Jumlah</th>
	 <th>Tanggal Pesan</th>
	 <th>Jadwal</th>
	 <th>Status</th>
	 <th>Proses</th>
    </tr> -->
	
    <?php	
	//$nomor=1;
	
    //while ($row = mysql_fetch_array($hasil)) {
//$stat = $row['status'];
	
         //echo " <tr>";
		 //echo "  <td><center>" .$nomor."</center></td>" ;
		 //echo "  <td><center><font color='red'> ".$row['kode_pesan']." </font></center></td> " ;
         //echo "  <td><center> ".$row['id_penonton']." </center></td> " ;
		 //echo "  <td><center> ".$row['nama']." </center></td> " ;
		 //echo "  <td><center> ".$row['kode_tiket']." </center></td> " ;
		 //echo "  <td><center> ".$row['jumlah']." </center></td> " ;
		 //echo "  <td><center> ".$row['tgl_pesan']." </center></td> " ;
		 //echo "  <td><center> ".$row['jadwal']." </center></td> " ;
		 //echo "  <td ".($stat=='Bayar'?'bgcolor=white':'bgcolor=red')."><center> ".$row['status']." </center></td> " ;
		 //echo "  <td><center>"."<a href = pesan_hapus.php?kode_pesan={$row['kode_pesan']}><img src='button/delete.png'></a>"." </td> " ;
         //echo " </tr> ";
		 //$nomor++;
       
       //}
    ?>
</table> 
</div>

<?php
	include "footer.php";
?>

</body>
</html>



