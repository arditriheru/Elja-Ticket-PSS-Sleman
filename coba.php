<!-- untuk menampilkan tampilan tanggal -->
		<script src="ui/jquery.ui.datepicker.js"></script>
		<script>
			$(function() {
				$( "#awal" ).datepicker({
					dateFormat : "yy/mm/dd",
					changeMonth: true,
					changeYear: true
					});
				});
			$(function() {
				$( "#akhir" ).datepicker({
					dateFormat : "yy/mm/dd",
					changeMonth: true,
					changeYear: true
					});
				});
		</script>
		<table align="center" id="tbl1" width="50%">
						<tr>
		    				<td width="200px">
								<input type="date" name="awal" id="awal" placeholder="Tanggal Awal Periode"/>
									<img name="popcal" align="absmiddle" style="border:none" 
										src="calender/calender.png" width="34" height="29" border="0" alt="">
							</td>
	        				<td width="2%">
								-
							</td>
							<td width="200px">
								<input type="date" name="akhir" id="akhir" placeholder="Tanggal Akhir Periode"/> 
									<img name="popcal" align="absmiddle" style="border:none" 
										src="calender/calender.png" width="34" height="29" border="0" alt="">
							</td>
						</tr>
						<tr>
				    		<td width="50px">
								<h2>TAHUN</h2>
							</td>
					        <td width="2%">
								:
							</td>
							<td>
							<?php
							$sqltahun = "SELECT DISTINCT YEAR(p.tgl_pinjaman) tahun FROM det_pinjaman p";
							$hasiltahun = mysqli_query($koneksi, $sqltahun);
							echo "<select id='tahun' name='tahun'>
									<option value=''>--Pilih Tahun---</option>";
							while($datatahun=mysqli_fetch_array($hasiltahun)){
								echo "<option value='".$datatahun['tahun']."'>".$datatahun['tahun']."</option>";
							}
							echo "</select>";
							?>
							</td>
							<td>
								
							</td>
						</tr>
						<tr>
							<td width="100px"></td>
							<td colspan="3" align="center"><input type='submit' value='Tampilkan' class="button"/></td>
						</tr>
					</table>