<?php 
include 'index.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  PROFIL</h3>
<a class="btn" href="awal.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php



$det=mysql_query("select * from user ")or die(mysql_error());
while($d=mysql_fetch_array($det)){
	?>					
	<table class="table">
		<tr>
			<td>NAMA</td>
			<td><?php echo $d['nama'] ?></td>
		</tr>
		<tr>
			<td>ALAMAT</td>
			<td><?php echo $d['alamat'] ?></td>
		</tr>
		<tr>
			<td>NIK</td>
			<td><?php echo $d['NIK'] ?></td>
		</tr>
		<tr>
			<td>No Telepom</td>
			<td><?php echo $d['no_telp']; ?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><?php echo $d['username']; ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $d['email'] ?></td>
		</tr>
		
		
	</table>
	<?php 
}
?>
<?php include 'footer.php'; ?>