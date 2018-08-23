<?php include 'index.php';	?>

<h3 align="center"><span class="glyphicon glyphicon-briefcase"></span>  Data perpanjangan </h3>
<br>
<a href="data_baru.php">Refresh</a>
<form action="" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
		<select type="submit" name="tgl_pendaftaran" class="form-control" onchange="this.form.submit()">
			<option>Pilih tanggal ..</option>
			<?php 
			$pil=mysql_query("select distinct tgl_pendaftaran from perpanjangan order by tgl_pendaftaran desc");
			while($p=mysql_fetch_array($pil)){
				?>
				<option><?php echo $p['tgl_pendaftaran'] ?></option>
				<?php
			}
			?>			
		</select>
	</div>

</form>

<br>

<?php 
if(isset($_GET['tgl_pendaftaran'])){
	echo "<h4> Data Penjualan Tanggal  <a style='color:blue'> ". $_GET['tgl_pendaftaran']."</a></h4>";
}
?>
<br>
<table class="table">
	<tr>
		<th >No Antrian</th>
		<th >No Uji</th>						
		<th >Tanggal pengujian</th>		
	</tr>

	<?php 
	if(isset($_GET['tgl_pendaftaran'])){
		$tanggal=mysql_real_escape_string($_GET['tgl_pendaftaran']);
		$brg=mysql_query("select * from perpanjangan where tgl_pendaftaran like '$tanggal' order by tgl_pendaftaran desc");
	}else{
		$brg=mysql_query("select * from perpanjangan order by tgl_pendaftaran desc");
	}
	$no=1;
	while($b=mysql_fetch_array($brg)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['no_uji'] ?></td>
			
				
			<td><?php echo $b['tgl_pendaftaran'] ?></td>			
		</tr>		
		<?php 
	}
	?>
	
</table>

<!-- modal input -->

	<script type="text/javascript">
		$(document).ready(function(){
			$("#tgl").datepicker({dateFormat : 'yy/mm/dd'});							
		});
	</script>
	<?php include 'footer.php'; ?>