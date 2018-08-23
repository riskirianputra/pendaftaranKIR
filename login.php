<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>
	<?php include 'koneksi.php'; ?>
	<style type="text/css">
	.kotak{	
		margin-top: 150px;
	}

	.kotak .input-group{
		margin-bottom: 20px;
	}
	</style>
</head>

<body style="background-image: url(images/img_6.jpg)" role="banner">

	<div >
		<?php 
		if(isset($_GET['pesan'])){
			if($_GET['pesan'] == "gagal"){
				echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>  Login Gagal !! Username dan Password Salah !!</div>";
			}
		}
		?>
		<header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(images/img_6.jpg)">
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">                                    
                 
    </h5>                 
            </div>
        </div>
        <br>
        <br>
        <br><br>
        


         
         <div class="row ">               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                        <strong>   &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login  &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; <a href="index.php"> HOME</a>  </strong>  
                            </div>
                            <div class="panel-body">

                                <form action="aksi_login.php" method="post"  >
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="username" placeholder="username"  required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  name="password" placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">
                                            
                                            
                                            
                                            <span class="pull-right">
                                                   <a href="#" >Forget password ? </a> 
                                            </span>
                                        </div>
                                        <div align="center">
                                     <input type="submit" name="login" value="Login" class="btn btn-primary">
                                     </div>
                                    
                                    Not register ? <a href="register.php" >click here </a> 

                                    
                                    </form>

                                   

                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>
</body>
</html>