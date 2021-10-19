<?php 
	include "koneksi.php";

	$kode_jadwal   = $_GET["kode_jadwal"];	
	
	$hasil = mysql_query("update jadwal set
			status	 ='Aktif'
			WHERE kode_jadwal='$kode_jadwal'
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
 
header("Location: jadwal_tampil.php");
?>

