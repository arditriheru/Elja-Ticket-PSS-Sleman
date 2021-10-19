<?php
	session_start();   
	include_once("koneksi.php");
	$servername = "localhost";
	$user		= "root";
	$pasword	= "";
	$db			= "dbeljaticket";
	
	$koneksi = mysql_connect ($servername,$user, $pasword)
	or die ('gagal terkoneksi'.mysql_error());	
	$database = mysql_select_db ($db)
	or die ('gagal terhubung ke database'.mysql_error());

	$sql      = "SELECT * FROM admin WHERE username = '$_POST[username]' 
				AND password = '$_POST[password]'";
	$sql2     = "SELECT * FROM penonton WHERE username = '$_POST[username]' 
				AND password = '$_POST[password]'";
	
	if(isset($_POST['username']))
	{
		$query  = mysql_query($sql);
		$row    = mysql_fetch_array($query);
		$query2  = mysql_query($sql2);
		$row2    = mysql_fetch_array($query2);
		$username = $row['username'];
		$password = $row['password'];
		if(!empty($row['username']) AND !empty($row['password']))
		{
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
			header("location:halaman_admin.php");
		}
		elseif(!empty($row2['username']) AND !empty($row2['password']))
		{
			$_SESSION['username']  = $row2['username'];
			$_SESSION['id_penonton'] = $row2['id_penonton'];
			$_SESSION['password']  = $row2['password'];
			header("location:pesan.php");
		}
		else {
				echo "<script>alert('Login gagal, silahkan cek username dan password')</script>";
				echo "<html><head><meta http-equiv='refresh' content='0;url=index.php'></head><body></body></html>";	
		} 		
	}
	
?>