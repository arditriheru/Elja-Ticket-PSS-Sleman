<?php 
	$kode_bayar = date("dmYhis");
	
	$pemesanan 		= $_POST["pemesanan"];
	$jml_transfer 	= $_POST["jml_transfer"];
	$tgl_konfirmasi = $_POST["tgl_konfirmasi"];
	$jadwal		    = $_POST["jadwal"];
	
	$kode_pesan	    = $_POST["pemesanan"];
	$jml_bayar 		= $_POST["jml_transfer"];
	$tgl_bayar 		= $_POST["tgl_konfirmasi"];
	$jadwal 		= $_POST["jadwal"];
	
	$lokasi_file = $_FILES['gambar']['tmp_name'];
	$tipe_file   = $_FILES['gambar']['type'];
	$gambar      = $_FILES['gambar']['name'];
	$direktori   = "gambar/bukti/$gambar";
	move_uploaded_file($lokasi_file,$direktori); 
	

	include "koneksi.php";

	$hasil = mysql_query("INSERT INTO konfirmasi (pemesanan, jml_transfer, tgl_konfirmasi, kode_bayar, jadwal, gambar)
	VALUES ('$pemesanan','$jml_transfer', '$tgl_konfirmasi','$kode_bayar', '$jadwal', '$gambar')");
  
    $hasil = mysql_query("INSERT INTO bayar (kode_bayar, kode_pesan, jml_bayar, tgl_bayar, jadwal)
	VALUES ('$kode_bayar','$kode_pesan','$jml_bayar','$tgl_bayar','$jadwal')");
	
	header("Location: konfirmasi_tambah.php");
?>
