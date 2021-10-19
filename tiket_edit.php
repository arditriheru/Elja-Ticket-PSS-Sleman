<?php 
	include "koneksi.php";

	$kode_tiket   = $_POST["kode_tiket"];	
	$harga   	  = $_POST["harga"];
	$stok 		  = $_POST["stok"];
	$warna  	  = $_POST["warna"];
	
	$hasil = mysql_query("update tiket set
			harga	 ='".$harga."',
			stok 	 ='".$stok."',
			warna 	 ='".$warna."'
			WHERE kode_tiket='$kode_tiket'
			");
			
			$simpan=mysql_query($hasil); 
			if($simpan){
			echo " <script> alert(\"DATA BERHASIL DISIMPAN \")</script>";
			echo "<meta http-equiv='refresh' content='0;url=setting_siswa.php'>";
			}
			else
			{
			mysql_error();
			}
 
header("Location: tiket_tampil.php");
?>
