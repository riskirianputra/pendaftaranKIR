<?php 

include 'config.php';
$id=$_POST['idpanjang'];
$no_uji=$_POST['no_uji'];
$tgl=$_POST['tgl_pendaftaran'];


$dt=mysql_query("select * from perpanjangan where idpanjang='$id'");
$data=mysql_fetch_array($dt);
mysql_query("update barang set jumlah='$sisa' where idpanjang='$id'");


mysql_query("insert into perpanjangan values('','$id','$no_uji','$tgl')")or die(mysql_error());
header("location:cetk_tgl.php");

?>