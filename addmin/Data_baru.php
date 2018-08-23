<?php include 'index.php'; ?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Data Pendaftar</h3>
<br/>


<?php 
$periksa=mysql_query("select * from pendaftaran ");

?>
<?php 
$per_hal=10;
$jumlah_record=mysql_query("SELECT COUNT(*) from pendaftaran ");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Record</td>		
			<td><?php echo $jum; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>
	<a style="margin-bottom:10px" href="laporan_tgl.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
</div>

<br/>
<table class="table table-hover">
	<tr>
		<th >No</th>
		<th >No Kendaraan</th>						
		<th >Tanggal pengujian</th>
		<!-- <th class="col-md-1">Sisa</th>		 -->
		<th >Opsi</th>
	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari=mysql_real_escape_string($_GET['cari']);
		$brg=mysql_query("select * from pendaftaran where no_kendaraan like '$cari' or merk_kend like '$cari'");
	}else{
		$brg=mysql_query("select * from pendaftaran limit $start, $per_hal");
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
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus.php?idpendaftaran=<?php echo $b['idpendaftaran']; ?>' }" class="btn btn-default">Hadir</a>
			</td>
		</tr>		
		<?php 
	}
	?>
	
</table>
<ul class="pagination">			
			<?php 
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>						
		</ul>
<!-- modal input -->


<?php 
include 'footer.php';

?>