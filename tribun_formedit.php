<?php 
session_start();
if(!isset($_SESSION['username'])) {
header('location:index.php'); }
else { $username = $_SESSION['username']; 
}
?>
<?php
include ('koneksi.php');

?>
<?php
$kode_tribun = $_GET['kode_tribun'];
$query = "select * from tribun WHERE kode_tribun='$kode_tribun'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
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
	<form action="tribun_edit.php" method="post">
		<table align="center" border="1">
			<tr bgcolor="yellow" width=100% height=50><td colspan="5" align="center"><h2><b>UBAH STOK</b> </h2></td></tr>
				<tr><td height=50 align="center">Jenis Tiket</td>
					<td><input name="kode_tribun" type="text"  id="kode_tribun"  value="<?php echo $data['kode_tribun']; ?>" readonly /></td>
				</tr>
				<tr><td height=50 align="center">Posisi Tribun</td>
					<td><input name="nama_tribun" type="text"  id="nama_tribun"  value="<?php echo $data['nama_tribun']; ?>" /></td>
				</tr>
			    </table>
				  <div align="center"><input type="submit" value="Ubah"></div>
</form>	
		</table>
		</div>
		
		<?php
	include "footer.php";
?>

</body>
</html>