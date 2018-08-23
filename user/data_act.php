<?php 

include 'config.php';
$id=$_POST['idpendaftaran'];
$no_kend=$_POST['no_kendaraan'];
$tgl=$_POST['tgl_pendaftaran'];


$dt=mysql_query("select * from pendaftaran where idpendaftaran='$id'");
$data=mysql_fetch_array($dt);
mysql_query("update barang set jumlah='$sisa' where idpendaftaran='$id'");


mysql_query("insert into pendaftaran values('','$id','$no_kend','$tgl')")or die(mysql_error());
header("location:cetk_tgl.php");

?>