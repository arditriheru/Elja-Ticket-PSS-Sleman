<?php 
	$id_penonton 	= $_POST["id_penonton"];
	$nama 			= $_POST["nama"];
	$username 		= $_POST["username"];
	$password	    = $_POST["password"];

	

	include "koneksi.php";

	$hasil = mysql_query("update penonton set
			nama	    ='".$nama."',
			username    ='".$username."',
			password    ='".$password."'
			WHERE id_penonton='$id_penonton'
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
	header("Location: penonton_tampil.php");
?>
