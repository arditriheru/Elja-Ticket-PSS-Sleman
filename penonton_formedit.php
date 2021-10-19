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
$id_penonton = $_GET['id_penonton'];
$query = "select * from penonton WHERE id_penonton='$id_penonton'";
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
	<form action="penonton_ubah.php" method="post">
		<table align="center" border="1">
			<tr bgcolor="yellow" width=100% height=50><td colspan="5" align="center"><h2><b>UBAH MEMBER</b> </h2></td></tr>
				<tr><td height=50 align="center">ID Member</td>
					<td><input name="id_penonton" type="text"  id="id_penonton"  size="16" value="<?php echo $data['id_penonton']; ?>" readonly /></td>
				</tr>
				<tr><td height=50 align="center">Nama</td>
					<td><input name="nama" type="text"  id="nama" size="50" value="<?php echo $data['nama']; ?>" /></td>
				</tr>
				<tr><td height=50 align="center">Username</td>
					<td><input name="username" type="text"  id="username"  size="40" value="<?php echo $data['username']; ?>" /></td>
				</tr>
				<tr><td height=50 align="center">Password</td>
					<td><input name="password" type="text" id="password"  size="40" value="<?php echo $data['password']; ?>"/></td>
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