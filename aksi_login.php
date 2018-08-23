<?php 
session_start();
include 'koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$password=md5($password);
$query=mysql_query("select * from user where username='$username' and password='$password'")or die(mysql_error());
if(mysql_num_rows($query)==1){
	$_SESSION['username']=$username;
	header("location:user/awal.php");
}else{
	header("location:login.php?pesan=gagal")or die(mysql_error());
	// mysql_error();
}
// echo $pas;
 ?>