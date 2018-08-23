<?php 
include 'index.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Pendaftar</h3>
<a class="btn" href="Data_baru.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_pendaftaran=mysql_real_escape_string($_GET['idpendaftaran']);


$det=mysql_query("select * from pendaftaran where idpendaftaran='$id_pendaftaran'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
	?>					
	<table class="table">
		<tr>
			<td>No Kendaraan</td>
			<td><?php echo $d['no_kendaraan'] ?></td>
		</tr>
		<tr>
			<td>No STNK</td>
			<td><?php echo $d['no_stnk'] ?></td>
		</tr>
		<tr>
			<td>No Mesin</td>
			<td><?php echo $d['no_mesin'] ?></td>
		</tr>
		<tr>
			<td>No Rangka</td>
			<td><?php echo $d['no_rangka']; ?></td>
		</tr>
		<tr>
			<td>Merk Kendaraan</td>
			<td><?php echo $d['merk_kend']; ?></td>
		</tr>
		<tr>
			<td>Jenis Kendaraan</td>
			<td><?php echo $d['jenis_kend'] ?></td>
		</tr>
		<tr>
			<td>Tahun Kendaraan</td>
			<td><?php echo $d['tahun_kend'] ?></td>
		</tr>
		<tr>
			<td>Tanggal Pengujian</td>
			<td><?php echo $d['tgl_pendaftaran'] ?></td>
		</tr>
	</table>
	<?php 
}
?>
<?php include 'footer.php'; ?>