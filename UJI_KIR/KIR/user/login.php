<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TUGAS AKHIR</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body style="background-image: url(images/img_6.jpg)" role="banner">
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
                        <strong>   &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login  &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; <a href="../index.php"> HOME</a>  </strong>  
                            </div>
                            <div class="panel-body">

                                <form action="" method="post"  >
                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="email" class="form-control" name="email" placeholder="email "  required/>
                                        </div>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control"  name="password" placeholder="Your Password" />
                                        </div>
                                    <div class="form-group">
                                            
                                             <a href="../admin/login_admin.php">ADMIN ?</a> 
                                            
                                            <span class="pull-right">
                                                   <a href="#" >Forget password ? </a> 
                                            </span>
                                        </div>
                                        <div align="center">
                                     <input type="submit" name="login" value="Login" class="btn btn-primary">
                                     </div>
                                    
                                    Not register ? <a href="register.php" >click here </a> 

                                    
                                    </form>

                                    <?php
                                    if (isset($_POST ['login'])) {
                                    include 'koneksi.php';
                                    $cek = mysqli_query($conn, "SELECT * FROM user WHERE email = '".$_POST['email']."' AND 
                                        password = '".$_POST['password']."'");
                                    $row =mysqli_fetch_array($cek);
                                    $count = mysqli_num_rows($cek);


                if ($count >0) {
                    header('location:home.php');
                    # code...
                } else {
                    echo "gagal ";
                }
            }
            ?>

                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     
   
</body>
</html>

