<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='http://fonts.googleapis.com/css?family=Concert+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="styles/style-menu.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<style>
	body{font-family:"Roboto",sans-serif!important;font-size: 100%;margin:0px;padding:0px;}
/*Navmenu*/
#navcontainer ul {list-style-type:none;margin:0;padding:0;position: relative;}
#navcontainer li {display:inline-block;float: left;text-transform:uppercase;}
#navcontainer li a {padding:4px 10px;min-width:100px;height: 49px;text-align: center;line-height: 49px;color: #ffffff;background: #20b2aa;text-decoration: none;}
#navcontainer li:hover a {background: #FE9800;}
#navcontainer li:hover ul a {background: #f3f3f3;color: #2f3036;height: 40px;line-height: 40px;}
#navcontainer li:hover ul a:hover {background: #FE9800;color: #fff;}
#navcontainer li ul {display: none;}
#navcontainer li ul li {display: block;float: none;}
#navcontainer li ul li a {width: auto;min-width: 100px;padding: 0 20px;text-align:left;}
#navcontainer ul li a:hover + .hidden, .hidden:hover {display: block;}

.show-menu {text-decoration: none;color: #fff;background: #20b2aa;text-align: left;padding: 10px 5px;display: none; }
#navcontainer input[type=checkbox]{display: none;}
#navcontainer input[type=checkbox]:checked ~ #menus {display: block;}
#navcontainer .fa-2 {font-size: 2em;}

#navcontainer .fa-2 {
   margin-right: 0.07142857em;
   margin-left:0.6em;
}
/*end-navmenu*/

/*css-styles-responsive*/
@media screen and (max-width:1180px){
   body,#navcontainer,div.span-14,div.span-24{width:100%!important;min-width:100%!important;}
}
@media screen and (max-width:980px){
    #navcontainer li a {min-width:80px;}
}
@media screen and (max-width:360px){
    #navcontainer ul {position: static;display: none;}
    #navcontainer li {border-bottom: 1px solid #4d4d4d;}
    #navcontainer ul li, #navcontainer li a {width: 100%;}
    #navcontainer li a{display:block;height:auto;line-height:normal;}
    #navcontainer li a {text-align:left;}
    .show-menu {display:block!important;line-height:30px;}
    .show-menu:hover {cursor:pointer;}
    label {margin:0!important;}
}
/*end-responsive*/
	</style>
</head>
<body>
<div class="container">	
	<div class="fly">
		<div class="content">
			<div id="navcontainer">
<label class="show-menu" for="show-menu"><i class="fa fa-bars fa-2"></i></label>
<input autocomplete="off" id="show-menu" role="button" type="checkbox">
<ul id="menus">
<li><a href="pesan.php" title="home">Home</a></li>
<li><a href="konfirmasi_tambah.php" title="pemrograman-web">Konfirmasi</a></li>
<li><a href="pesan_cetak.php" title="framework">Lihat Tiket</a></li>
<li><a href="logout.php" title="teknologi-informasi">Logout</a></li>
</ul>
<div style="clear:both;"></div>
</div>
		</li>
      </ul>
<div class="ribbon">
				Elja Ticket
			</div>
		</div>
		</div>
	</div> <!-- /.fly -->
		
</body>
</html>