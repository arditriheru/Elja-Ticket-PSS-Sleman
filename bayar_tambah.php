<?php
	$kode_pesan = $_POST["pemesanan"];
	$jumlah = $_POST["jumlah"];
	$tgl_bayar = $_POST["tgl_konfirmasi"];
	
	include "koneksi.php";
	
	$hasil = mysql_query("INSERT INTO bayar (kode_pesan, jumlah, tgl_bayar)
	VALUES ('$kode_pesan','$jumlah','$tgl_bayar')");
	
	header("Location: konfirmasi_tampil.php");
?>