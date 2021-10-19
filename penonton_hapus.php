<?php
include "koneksi.php";
$id_penonton = $_GET['id_penonton'];
$hasil=mysql_query("DELETE FROM penonton WHERE id_penonton='$id_penonton'");
	if(!$hasil)
		echo "gagal";
	else
	echo "<html><head><meta http-equiv='refresh' content='0;url=penonton_tampil.php'></head><body></body></html>";

?>