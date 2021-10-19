<?php  
	include "koneksi.php";
	$kode_pesan = $_GET["kode_pesan"];	
	
	$hasil = mysql_query("update pesan set
			status ='Bayar'
			WHERE kode_pesan='$kode_pesan'
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
	header("Location: halaman_admin.php");
?>
