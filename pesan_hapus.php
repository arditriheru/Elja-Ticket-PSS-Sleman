<?php
include "koneksi.php";
$kode_pesan = $_GET['kode_pesan'];
$hasil=mysql_query("DELETE FROM pesan WHERE kode_pesan='$kode_pesan'");
	if(!$hasil)
		echo "gagal";
	else
	echo "<html><head><meta http-equiv='refresh' content='0;url=pesan_tampil.php'></head><body></body></html>";

?>