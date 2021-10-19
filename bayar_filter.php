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
$tanggal1=$_POST['tanggal1'];
$tanggal2=$_POST['tanggal2'];
 include "koneksi.php" ;
 $sql = "select * from bayar 
		inner join pesan on bayar.kode_pesan = pesan.kode_pesan
		where tgl_bayar BETWEEN '$tanggal1' AND '$tanggal2' AND status='bayar'
 order by tgl_bayar desc";	
 $hasil = mysql_query($sql);
 $num=mysql_num_rows($hasil);
 if (!$hasil)
   die("Gagal query..".mysql_error());
?>
<table align="center" border="1">
<tr><td colspan="6" align="center"><h2><b>DATA PEMBAYARAN<br>Tanggal <?php echo"$tanggal1 s/d $tanggal2"?></b></h2><?php echo"Jumlah : $num "?></td></tr>
    <tr bgcolor="yellow" width=1000 height=50>
     <th>No</th>
     <th>Kode Pesan</th>
	 <th>Jumlah Transfer</th>
	 <th>Tanggal Bayar</th>
	 <th>Jadwal</th>
    </tr> 
	
	
    <?php	
  $nomor=1;
       while ($row = mysql_fetch_array($hasil)) { 
		 $jml_bayar=number_format($row['jml_bayar'],0,",",".");
	   
         echo " <tr>";
		 echo "  <td><center>" .$nomor."</center></td>" ;
		 echo "  <td><center> ".$row['kode_pesan']." </td> " ;
		 echo "  <td><center> Rp. $jml_bayar </td> " ;
		 echo "  <td><center> ".$row['tgl_bayar']." </td> " ;
		 echo "  <td><center> ".$row['jadwal']." </td> " ;
		 //echo "  <td><center>"."<a href = bayar_hapus.php?kode_pesan={$row['kode_pesan']}><img src='button/delete.png'></a>"." </td> " ;
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



