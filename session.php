<?php
	if(!isset($_SESSION['password']))
	{
	  die
	  ("<div align='center'>
	  <script>
	    alert('Silahkan Login Terlebih Dahulu...!')
	  </script>
	  
	  <html>
	  <head>
	    <meta http-equiv='refresh' content='0;url=index.php'>
	  </head>
	  </html>
	  </div>");
	}
?>