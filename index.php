<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
	<meta charset="UTF-8">
	<title>Elja Ticket | Login</title>
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
<div class="container">
	<div class="header">
<?php
	include "header.php";
?>
  </div> <!--/ .header -->

	<div align= "center" class="main">
		<div class="jadwal">
			<?php
	 include "koneksi.php" ;
	 $sql = "select * from jadwal where status = 'Aktif'";	
	 $hasil = mysql_query($sql);
	 if (!$hasil)
	   die("Gagal query..".mysql_error());
	?>
		<center>
		<?php	
		   while ($row = mysql_fetch_array($hasil)) { 
			 echo "  <td> <img src='gambar/$row[gambar]'width=1000 height=320>"." </td> " ;
		   }
		?>
		</div> <!--/ .middle -->
		<div class="login">
			<?php
	include "login.php";
?>
		</div> <!--/ .right -->
</center> 
	</div> <!--/ .main -->

	<div class="footer">
<img src='images/header1.jpg'></a></h1>
	        <center>copyright 2016 | eljaticket
  </div><!--/ .footer -->
 </div>
</div>

</body>
</html>