<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Helocho">
	
    <title>Helocho</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
		<link rel="stylesheet" href="styles/style-responsive.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<?php
	include "menu3.php";
?>
<div class="pesan">
<div class="container"><section id="form_login"><!--form-->
			<div class="row">
				<div class="col-sm-5 col-sm-offset-3">
					<div class="login-form"><!--login form--><br><br><br>
						<h2>Daftar Member Baru</h2>
	 <form action="penonton_simpan.php" method="post" enctype="multipart/form-data" />
			<input type="text" name="id_penonton" size="35" placeholder="ID *isi sesuai No.KTP/ kartu pelajar"/>
			<input type="text" name="nama" size="35" placeholder="Nama Lengkap"/>
			<input type="text" name="username" size="30" placeholder="Username"/>
			<input type="password" name="password" size="30" placeholder="Password"/>
			<span>
			<button name="submit" type="submit" class="btn btn-default">Tambah</button>
			<button name="reset" type="submit" class="btn btn-default">Batal</button>
			</span>
			
	</form>
					</div><!--/login form--><br><br><br>
				</div>
			
		</div>
	</section><!--/form-->
	</div></div>