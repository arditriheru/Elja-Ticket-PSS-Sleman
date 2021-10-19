<?php
include "koneksi.php";
$kode_konfirmasi = $_GET['kode_konfirmasi'];
$hasil=mysql_query("DELETE FROM konfirmasi WHERE kode_konfirmasi='$kode_konfirmasi'");
	if(!$hasil)
		echo "gagal";
	else
	echo "<html><head><meta http-equiv='refresh' content='0;url=konfirmasi_tampil.php'></head><body></body></html>";

?>