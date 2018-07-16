

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
         <div class="row ">
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                        <strong>  New User ? Register Yourself </strong>  
                            </div>
                            <div class="panel-body">
             
                                <form action="" method="POST">
<br/>
                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" class="form-control" name="nama" placeholder="NAMA" />
                                    </div>
                                    
                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="alamat" placeholder="alamat" />
                                    </div> 

                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="NIK" placeholder="nik" />
                                    </div>

                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="no_telp" placeholder="Nomor Telepon/HP" />
                                    </div> 

                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="username" placeholder="username" />
                                    </div>                                    

                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i>@</i></span>
                                            <input type="text" class="form-control" name="email" placeholder="EMAIL" />
                                    </div>

                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="password" placeholder="PASSWORD" />
                                    </div>
                                     
                              
                                    Already Registered ?  <a href="login.php" >Login here</a>

                                    <input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />
                                    </form>

        <?php
            if (isset($_POST ['register'])) {
                include 'koneksi.php';
                $insert = mysqli_query($conn, "INSERT INTO USER valueS
                    (NULL,
                        '" .$_POST['nama']."',
                        '" .$_POST['alamat']."',
                        '" .$_POST['NIK']."',
                        '" .$_POST['no_telp']."',
                        '" .$_POST['username']."',
                        '" .$_POST['email']."',
                        '" .$_POST['password']."')");
                
                if ($insert) {
                    header('location:login.php');
                    # code...
                } else {
                    echo "gagal ";
                }

            }

        ?>
            
        </div>
    </div>
</div>

</body>
</html>