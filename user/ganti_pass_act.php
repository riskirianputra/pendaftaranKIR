<?php 
include 'config.php';
$user=$_POST['user'];
$lama=md5($_POST['lama']);
$baru=$_POST['baru'];
$ulang=$_POST['ulang'];

$cek=mysql_query("select * from user where password='$lama' and username='$user'");
if(mysql_num_rows($cek)==1){
	if($baru==$ulang){
		$b = md5($baru);
		mysql_query("update user set password='$b' where username='$user'");
		header("location:ganti_pass.php?pesan=oke");
	}else{
		header("location:ganti_pass.php?pesan=tdksama");
	}
}else{
	header("location:ganti_pass.php?pesan=gagal");
}

 ?>