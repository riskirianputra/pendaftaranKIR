<?php 
include 'config.php';
$id=$_GET['idpendaftaran'];
mysql_query("delete from pendaftaran where idpendaftaran='$id'");
header("location:Data_baru.php");

?>	