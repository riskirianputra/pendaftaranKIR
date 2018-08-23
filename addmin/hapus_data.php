<?php 
include 'config.php';
$id=$_GET['idpendaftaran'];
$jumlah=$_GET['jumlah'];
$nama=$_GET['nama'];

$a=mysql_query("select jumlah from pendaftaran where idpendaftaran='$id'");
$b=mysql_fetch_array($a);
$kembalikan=$b['jumlah']+$jumlah;
$c=mysql_query("update barang set jumlah='$kembalikan' where nama='$nama'");
mysql_query("delete from barang_laku where id='$id'");
header("location:barang_laku.php");

 ?>