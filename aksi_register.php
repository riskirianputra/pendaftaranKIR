<?php 

$connect = mysqli_connect("localhost","root","","KIR");
session_start();

if (isset($_POST['register'])) 
{

	if (empty($_POST["nama"]) &&  empty($_POST["alamat"]) &&  empty($_POST["NIK"]) &&  empty($_POST["no_telp"])&&  empty($_POST["username"])&&  empty($_POST["email"])&&  empty($_POST["password"])) 
	{
		echo '<script>alert("both field are required"</script>';
	}
	else 
	{	
		$nama=mysql_real_escape_string( $_POST['nama']);
		$alamat=mysql_real_escape_string($_POST['alamat']);
		$NIK=mysql_real_escape_string($_POST['NIK']);
		$no_telp=mysql_real_escape_string($_POST['no_telp']);
		$username=mysql_real_escape_string($_POST['username']);
		$email=mysql_real_escape_string($_POST['email']);
		$password=mysql_real_escape_string($_POST['password']);
		$repassword=mysql_real_escape_string($_POST['repassword']);
		$password=md5($password);

		$query= "INSERT INTO user (nama, alamat, NIK, no_telp, username, email, password) values ('$nama','$alamat','$NIK', '$no_telp', '$username', '$email','$password')";
		if(mysqli_query($connect, $query))
		{
			echo '<script>alert("Registration Done")</script>';
		}
	}	
}
 ?>

 <a href="login.php" class="btn btn-info"> LOGIN SEKARANG</a>