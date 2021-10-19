<?php 
	$kode_tribun = $_POST["kode_tribun"];
	$nama_tribun = $_POST["nama_tribun"];

	include "koneksi.php";

	$hasil = mysql_query("INSERT INTO tribun (kode_tribun, nama_tribun)
	VALUES ('$kode_tribun','$nama_tribun')");
  
	header("Location: tribun_tampil.php");
?>
