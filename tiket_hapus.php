<?php
include "koneksi.php";
$kode_tiket = $_GET['kode_tiket'];
$hasil=mysql_query("DELETE FROM tiket WHERE kode_tiket='$kode_tiket'");
	if(!$hasil)
		echo "gagal";
	else
	echo "<html><head><meta http-equiv='refresh' content='0;url=tiket_tampil.php'></head><body></body></html>";

?>