<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pendaftaran Online Uji Kendaraan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
  <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="FreeHTML5.co" />

  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/style.css">
  
  <script src="js/modernizr-2.6.2.min.js"></script>

  </head>
  <body>
    
  <div class="gtco-loader"></div>
  
  <div id="page">

  
  <div class="page-inner">
  
  <nav class="gtco-nav" role="navigation">
    <div class="gtco-container">  
      <div class="row">
        <div class="col-sm-4 col-xs-12">
          <div id="gtco-logo"><a href="index.php">UJI KIR <em>.</em></a></div>
        </div>
        <div class="col-xs-8 text-right menu-1">
          <ul>
            <li><a href="home.php">HOME</a></li>            
            <li class="has-dropdown">
              <a href="#">Informasi</a>
              <ul class="dropdown">
                <li><a href="syarat.php">SYARAT</a></li>
                <li><a href="biaya.php">BIAYA</a></li>                   
              </ul>
              <li class="has-dropdown">
              <a href="#">DAFTAR</a>
              <ul class="dropdown">
                <li><a href="pendaftaran.php">DAFTAR BARU</a></li>
                <li><a href="perpanjangan.php">PERPANJANGAN</a></li>                   
              </ul>
              <li> <a href="login.php" class="btn btn-primary"> LOGOUT </a></li>            
            </li>           
          </ul>
        </div>
        </div>      
      </div>
  </nav>
  
  <header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(images/img_4.jpg)">
    <div class="overlay"></div>
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-12 col-md-offset-0 text-left">
          

         
          
        </div>
      </div>
    </div>
  </header>
  
  
  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>

   <h5>&nbsp;  DATA KENDARAAN</h5>

<form action="" method="POST"  class="col-sm-8">

  
  
  <div class="form-group row">
    <label  class="col-sm-3 col-form-label">No Kendaraan</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="no_kendaraan" placeholder="No Kendaraan">
    </div>
  </div>

    <div class="form-group row">
    <label  class="col-sm-3 col-form-label">No STNK</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="no_stnk" placeholder="STNK">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-3 col-form-label">No Mesin</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="no_mesin" placeholder="No Mesin">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-3 col-form-label">No Rangka</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="no_rangka" placeholder="No Rangka">
    </div>
  </div>
  
  <div class="form-group row">  
    <label for="inputPassword" class="col-sm-3 col-form-label">Merk Kendaraan</label>
        <div class="col-sm-3">
      <input type="text" class="form-control" name="merk_kend" placeholder="Merk Kendaraan">
    </div>
</div >

  <div class="form-group row">
    <label  class="col-sm-3 col-form-label">Jenis Kendaraan</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="jenis_kend" placeholder="Jenis Kendaraan">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-3 col-form-label">Tahun Kendaraan</label>
    <div class="col-sm-3">
      <input type="text" class="form-control" name="tahun_kend" placeholder="Tahun Kendaraan">
    </div>
  </div>

   <div class="form-group row">
    <label  class="col-sm-3 col-form-label">Tanggal Pemeriksaan</label>
    <div class="col-sm-3">
      <input type="date" class="form-control" name="tanggal" placeholder="Tanggal">
    </div>
  </div>
  

<div align="text-center">
     <input type="submit" class="btn btn-success" name="pendaftaran" value="Daftar" />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" name="reset">
  </div>

</form>

 <?php
            if (isset($_POST ['pendaftaran'])) {
                include 'koneksi.php';
                $insert = mysqli_query($conn, "INSERT INTO pendaftaran values
                    (NULL,
                        '" .$_POST['no_kendaraan']."',
                        '" .$_POST['no_stnk']."',
                        '" .$_POST['no_mesin']."',                        
                        '" .$_POST['no_rangka']."',
                        '" .$_POST['merk_kend']."',
                        '" .$_POST['jenis_kend']."',
                        '" .$_POST['tahun_kend']."'");

                if ($insert) {
                     header('location:home.php');
                    # code...
                } else {
                    echo 'gagal ';
                }

            }

        ?>

</div>

  
  
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countTo.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>

