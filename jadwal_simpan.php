<?php 
	$kode_jadwal = $_POST["kode_jadwal"];
	$keterangan = $_POST["keterangan"];
	$tanggal = $_POST["tanggal"];
	$status = "Tidak Aktif";
	
	$lokasi_file = $_FILES['gambar']['tmp_name'];
	$tipe_file   = $_FILES['gambar']['type'];
	$gambar      = $_FILES['gambar']['name'];
	$direktori   = "gambar/$gambar";
	move_uploaded_file($lokasi_file,$direktori); 

	include "koneksi.php";

	$hasil = mysql_query("INSERT INTO jadwal (kode_jadwal, gambar, keterangan, tanggal, status)
	VALUES ('$kode_jadwal','$gambar','$keterangan','$tanggal','$status')");
  
	header("Location: jadwal_tampil.php");
?>
