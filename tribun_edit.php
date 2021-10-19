<?php 
	include "koneksi.php";

	$kode_tribun   = $_POST["kode_tribun"];	
	$nama_tribun   	  = $_POST["nama_tribun"];
	
	$hasil = mysql_query("update tribun set
			nama_tribun	 ='".$nama_tribun."'
			WHERE kode_tribun='$kode_tribun'
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
 
header("Location: tribun_tampil.php");
?>
