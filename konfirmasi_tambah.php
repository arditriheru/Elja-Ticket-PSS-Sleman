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
	<title>Elja Ticket | Halaman Konfirmasi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles/style-responsive-form.css">
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
<body>
<header><?php
	include "menu4.php";
?></header>
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
<div class="pesan">	
<?php 
		$tanggal = date('Y-m-d');
		
		include "koneksi.php";
		
		$id_penonton = $_SESSION["id_penonton"];
	?>
<form action="konfirmasi_simpan.php" method="post" enctype="multipart/form-data">
			<header>
			<h6><b>TATACARA KONFIRMASI</b><br>1. Masukkan kode pesan anda, pastikan kode pesan yang anda masukkan benar<br>2. Masukkan nominal transfer<br>3. Upload bukti transfer</h6><br><br>
    <b align="center">KONFIRMASI PEMBAYARAN</b>
  </header>
  <?php
							include "koneksi.php";
							$kategori = mysql_query("SELECT * FROM jadwal");
							if(!$kategori)
								echo "gagal";
							while($kat = mysql_fetch_array($kategori))
							{
							echo "<input class='desc' name='jadwal' size='40' value='{$kat['keterangan']}' hidden></label>";	  
							}
						?>
  <div>
    <b>Tanggal Konfirmasi</b>
    <div>
	<input type="text" name="tgl_konfirmasi" size="15" value="<?php echo $tanggal; ?>" readonly />
    </div>
  </div>
  <div>
    <b>Kode Pesan</b>
    <div>
	<input type="text" name="pemesanan" size="20"/>
    </div>
  </div>
  <div>
    <b>Jumlah Transfer</b>
    <div>
    <select name="jml_transfer">
        <option selected="selected" disabled >Pilih</option>
        <option value='20000'> Rp20.000-,</option>
		<option value='25000'> Rp25.000,</option>
        <option value='40000'> Rp40.000-,</option>
		<option value='50000'> Rp50.000-,</option>
        <option value='60000'> Rp60.000-,</option>
        <option value='75000'> Rp75.000-,</option>
        <option value='100000'> Rp100.000-,</option>
		<option value='150000'> Rp150.000-,</option>
      </select>
    </div>
  </div>
  <div>
    <b>Bukti Transfer</b>
    <div>
	<input type="file" name="gambar" size="22" /><br>	
				<font color="red"><h6>*Upload gambar dengan format jpg/jpeg</h6></font>	
    </div>
  </div>
  <div>
		<div align="right">
  		<button name="submit" type="submit" class="btn btn-default" onclick="alert('Konfirmasi Terkirim')">Kirim</button>
		<button name="reset" type="reset" class="btn btn-default">Batal</button>    </div>
    </div>
	</div>
	</form>
		 <!--/ .right -->
		 </div>
		 <div class="footer">
<?php
	include "footer.php";
?>
  </div><!--/ .footer -->
		 </div></div>
		</body>
</html>