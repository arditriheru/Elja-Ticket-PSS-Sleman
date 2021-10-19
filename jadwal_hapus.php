<?php
include "koneksi.php";
$kode_jadwal = $_GET['kode_jadwal'];
$hasil=mysql_query("DELETE FROM jadwal WHERE kode_jadwal='$kode_jadwal'");
	if(!$hasil)
		echo "gagal";
	else
	echo "<html><head><meta http-equiv='refresh' content='0;url=jadwal_tampil.php'></head><body></body></html>";

?>