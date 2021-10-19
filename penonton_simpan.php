<?php 
	$id_penonton 	= $_POST["id_penonton"];
	$nama 			= $_POST["nama"];
	$username 		= $_POST["username"];
	$password	    = $_POST["password"];

	

	include "koneksi.php";

	$hasil = mysql_query("INSERT INTO penonton (id_penonton, nama, username, password)
	VALUES ('$id_penonton','$nama','$username','$password')");
  
	header("Location: index.php");
?>
