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
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="imagetoolbar" content="no" />
	<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
	<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
	<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>
	
</head>
<body>
	
<?php
	include "menu2.php";
	
?>
<div class="container">

	<div class="main">

		<div class="jadwal">
			<?php
	 include "koneksi.php" ;
	 $sql = "select * from jadwal where status = 'Aktif' ";	
	 $hasil = mysql_query($sql);
	 if (!$hasil)
	   die("Gagal query..".mysql_error());
	?>
		<center>
		<?php	
		   while ($row = mysql_fetch_array($hasil)) { 
			 echo "  <td> <img src='gambar/$row[gambar]'width=1000 height=320>"." </td> " ;
		   }
		?></center> 
		</div> <!--/ .middle -->
		
		<div class="stadion"><br>
			<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><center><img src='images/stadium.png'width=1000 height=1000 ></center></h1>
    </div>
  </div>
</div>  
		</div> <!--/ .middle -->
		
	<?php
	include "pesan_form.php";
?>	

	</div> <!--/ .main -->

	<div class="footer">
<?php
	include "footer.php";
?>
  </div><!--/ .footer -->
 </div>
</div>

</body>
</html>