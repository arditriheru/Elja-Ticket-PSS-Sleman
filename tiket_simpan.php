<?php 
	$kode_tiket  	    = $_POST["kode_tiket"];
	$harga   			= $_POST["harga"];
	$stok 				= $_POST["stok"];
	$tribun     		= $_POST["tribun"];

	include "koneksi.php";

	$hasil = mysql_query("INSERT INTO tiket(kode_tiket, harga, stok, tribun)
	VALUES ('$kode_tiket','$harga','$stok','$tribun')");
	
  
	header("Location: tiket_tampil.php");
?>
