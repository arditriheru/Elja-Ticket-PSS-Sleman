<?php 
	session_start();
	$status 		= "Belum Bayar";
	$id_penonton    = $_POST["id_penonton"];
	$jumlah         = $_POST["jumlah"];
	$kode_tiket 	= $_POST["kode_tiket"];
	$tgl_pesan      = $_POST["tgl_pesan"];
	$jadwal         = $_POST["jadwal"];
	$tanggal        = $_POST["tanggal"];
	
	//$date = date('Y-m-d');
	
	//$kode_pesan     = $_GET["kode_pesan"];
	include "koneksi.php";

	//if(!($result = mysql_query("SELECT kode_pesan from pesan where id_penonton = '$id_penonton'"))){
  	//echo "fetch failed: " . mysql_error();
 // }
  
 // $row = mysql_fetch_assoc($result);
 	
	$hasil = mysql_query("INSERT INTO pesan (status, id_penonton, jumlah, kode_tiket, tgl_pesan, jadwal, tanggal)
	VALUES ('$status','$id_penonton', '$jumlah', '$kode_tiket', '$tgl_pesan', '$jadwal', '$tanggal')");
	
	$query_stok = mysql_query("SELECT * FROM tiket where kode_tiket = '$kode_tiket'");
	$tiket = mysql_fetch_array($query_stok);
	$stok = ($tiket['stok'] - $jumlah);
	if($stok == 0)
								echo "Tiket Habis!";

	$query = mysql_query("UPDATE tiket SET 
					stok ='$stok'
					WHERE kode_tiket = '$kode_tiket'");
					
	header("Location: pesan_alert.php");
?>
