<?php include 'index.php';	?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Data pendaftar</h3>
<br>
<form action="" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar"></span></span>
		<select type="submit" name="tgl_pendaftaran" class="form-control" onchange="this.form.submit()">
			<option>Pilih tanggal ..</option>
			<?php 
			$pil=mysql_query("select distinct tgl_pendaftaran from pendaftaran order by tgl_pendaftaran desc");
			while($p=mysql_fetch_array($pil)){
				?>
				<option><?php echo $p['tgl_pendaftaran'] ?></option>
				<?php
			}
			?>			
		</select>
	</div>

</form>
<br/>
<?php 
if(isset($_GET['tgl_pendaftaran'])){
	$tanggal=mysql_real_escape_string($_GET['tgl_pendaftaran']);
	$tg="laporan_tgl.php?tgl_pendaftaran='$tanggal'";
	?><a style="margin-bottom:10px" href="<?php echo $tg ?>" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
	<br>
	<?php
	
	}else{
		$tg="laporan_tgl.php";
	}

	?>

<br>

<?php 
if(isset($_GET['tgl_pendaftaran'])){
	echo "<h4> Data Penjualan Tanggal  <a style='color:blue'> ". $_GET['tgl_pendaftaran']."</a></h4>";
}
?>
<table class="table">
	<tr>
		<th >No</th>
		<th >No Kendaraan</th>						
		<th >Tanggal pengujian</th>
		<th >Opsi</th>
	</tr>

	<?php 
	if(isset($_GET['tgl_pendaftaran'])){
		$tanggal=mysql_real_escape_string($_GET['tgl_pendaftaran']);
		$brg=mysql_query("select * from pendaftaran where tgl_pendaftaran like '$tanggal' order by tgl_pendaftaran desc");
	}else{
		$brg=mysql_query("select * from pendaftaran order by tgl_pendaftaran desc");
	}
	$no=1;
	while($b=mysql_fetch_array($brg)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b['no_kendaraan'] ?></td>
			
				
			<td><?php echo $b['tgl_pendaftaran'] ?></td>

			<td>
				<a href="detail.php?idpendaftaran=<?php echo $b['idpendaftaran']; ?>" class="btn btn-info">Detail</a>
				
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus.php?id=<?php echo $b['id']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>		
		<?php 
	}
	?>
	
</table>

<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Barang Baru</h4>
			</div>
			<div class="modal-body">
				<form action="tmb_brg_act.php" method="post">
					<div class="form-group">
						<label>Nama Barang</label>
						<input name="nama" type="text" class="form-control" placeholder="Nama Barang ..">
					</div>
					<div class="form-group">
						<label>Jenis</label>
						<input name="jenis" type="text" class="form-control" placeholder="Jenis Barang ..">
					</div>
					<div class="form-group">
						<label>Suplier</label>
						<input name="suplier" type="text" class="form-control" placeholder="Suplier ..">
					</div>
					<div class="form-group">
						<label>Harga Modal</label>
						<input name="modal" type="text" class="form-control" placeholder="Modal per unit">
					</div>	
					<div class="form-group">
						<label>Harga Jual</label>
						<input name="harga" type="text" class="form-control" placeholder="Harga Jual per unit">
					</div>	
					<div class="form-group">
						<label>Jumlah</label>
						<input name="jumlah" type="text" class="form-control" placeholder="Jumlah">
					</div>																	

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
					<input type="submit" class="btn btn-primary" value="Simpan">
				</div>
			</form>
		</div>
	</div>
</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tgl").datepicker({dateFormat : 'yy/mm/dd'});							
		});
	</script>
	<?php include 'footer.php'; ?>