<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="styles/style-responsive-form.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
<div class="pesan">	
<?php
 include "koneksi.php" ;
 $sql = "select * from tiket order by harga desc";	
 $hasil = mysql_query($sql);
 if (!$hasil)
   die("Gagal query..".mysql_error());
?>
<table align="center" border="1">
    <tr bgcolor="yellow" width=1000 height=50>
     <th><center>Jenis Tiket</center></th>
	 <th><center>Stok</center></th>
    </tr> 
	
	
    <?php	
       while ($row = mysql_fetch_array($hasil)) { 
         echo " <tr>";
         echo "  <td><center> ".$row['tribun']." </td> " ;
		 echo "  <td><center> ".$row['stok']." Tiket </td> " ;
         echo " </tr> ";
       }
    ?>
</table><br>
	
<?php 
		$tanggal = date('Y-m-d');
		include "koneksi.php";
		
		$id_penonton = $_SESSION["id_penonton"];
		
	?>
<script type="text/javascript">
function total()
{
var a = parseFloat (document.forms.form.harga.value);
var b = parseFloat (document.forms.form.jumlah.value);

var tot = parseFloat(document.forms.form.total.value =a*b);

}

// untuk mengambil jenis dan muncul bunganya secara otomatis
				function pilih(){
					var nilai = document.getElementById("jumlah").value;
					
					obyek = JSON.parse(json);
					
					for (var x=0; x <= jum-1; x++) {
						if (obyek.pinjaman[x].no_pinjaman == nilai) {
							document.getElementById("bunga").value= obyek.pinjaman[x].bunga;
						}
					}
				}
</script>
<form action="pesan_simpan.php" method="post" enctype="multipart/form-data">
			<header>
    <h4 align="center">FORM PESAN</h4>
  </header>
		<?php
							include "koneksi.php";
							$kategori = mysql_query("SELECT * FROM jadwal where status='Aktif'");
							if(!$kategori)
								echo "gagal";
							while($kat = mysql_fetch_array($kategori))
							{
							echo "<input class='desc' name='jadwal' size='40' value='{$kat['keterangan']}' hidden></label>";	  
							}
		?>
		<?php
							include "koneksi.php";
							$kategori = mysql_query("SELECT * FROM jadwal where status='Aktif'");
							if(!$kategori)
								echo "gagal";
							while($kat = mysql_fetch_array($kategori))
							{
							echo "<input class='desc' name='tanggal' size='40' value='{$kat['tanggal']}' hidden></label>";	  
							}
		?>
  <div>
<b>ID Member</b>

    <div>
	<?php
							include "koneksi.php";
							$kategori = mysql_query("SELECT * FROM penonton where id_penonton='$id_penonton'");
							if(!$kategori)
								echo "gagal";
							while($kat = mysql_fetch_array($kategori))
							{
							echo "<input class='desc' name='id_penonton' size='20' value='{$kat['id_penonton']}' readonly></label>";	  
							}
						?>
    </div>
  </div>
  <div>
    <b>Nama Lengkap</b>
    <div>
	<?php
							include "koneksi.php";
							$nama = mysql_query("SELECT * FROM penonton where id_penonton='$id_penonton'");
							if(!$nama)
								echo "gagal";
							while($n = mysql_fetch_array($nama))
							{
								echo "<class='desc' name='nama'>{$n['nama']}</label></label>";
							}
						?>
    </div>
  </div>
  
  <div>
    <b>Pilih Tribun</b>
    <div>
    <select id="kode_tiket" class="field select medium" tabindex="11" name="kode_tiket" required> 
		<option selected="selected" disabled>Pilih</option>
      <?php
							include "koneksi.php";
							$kategori = mysql_query("SELECT * FROM tiket order by harga desc");
							if(!$kategori)
								echo "gagal";
							while($kat = mysql_fetch_array($kategori))
							{
								echo "<option value='$kat[kode_tiket]'>$kat[kode_tiket] - $kat[tribun] - Rp$kat[harga]</option>";
							}
						?>
    </select>
    </div>
  </div>
  <div>
    <fieldset>
    
      <b>
        Jumlah Tiket
      </b>
      
      <div>
      	<input id="jumlah" name="jumlah" type="hidden" onchange="total()" value="">
      	<div>
      		<input id="jumlah" name="jumlah" type="radio" value="1" tabindex="5" checked="checked"> 1
      	</div>
        <div>
        	<input id="jumlah" name="jumlah" type="radio" value="2" tabindex="6"> 2
        </div>
        <div>
        	<input id="jumlah" name="jumlah" type="radio" value="3" tabindex="7"> 3
        </div>
      </div>
    </fieldset>
  </div>
  <div>
    <b>Tanggal Pesan</b>
    <div>
	<input class='desc' size='10' name="tgl_pesan" value='<?php echo $tanggal;?>' readonly></label>
				
    </div>
  </div>
  
  <div>
		<div align="right">
		<button name="submit" type="submit" class="btn btn-default" onClick="return warning();" onClick="return total();">Pesan</button>
		<button name="reset" type="reset" class="btn btn-default">Batal</button>
    </div>
	</div>
	</form>
		 <!--/ .right -->
		 </div>
		</body>
		</html>