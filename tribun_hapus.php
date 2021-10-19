<?php
include "koneksi.php";
$kode_tribun = $_GET['kode_tribun'];
$hasil=mysql_query("DELETE FROM tribun WHERE kode_tribun='$kode_tribun'");
	if(!$hasil)
		echo "gagal";
	else
	echo "<html><head><meta http-equiv='refresh' content='0;url=tribun_tampil.php'></head><body></body></html>";

?>