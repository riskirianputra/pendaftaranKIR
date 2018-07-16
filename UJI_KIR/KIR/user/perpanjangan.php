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
  

  <h5>&nbsp; ISI DATA KENDARAAN</h5>
<br>
<form action="" method="POST"  class="col-sm-8">
  
    <div class="form-group row">
    <label  class="col-sm-3 col-form-label">No UJI</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nouji" placeholder="NO UJI">
    </div>
  </div>

<div class="form-group row">
    <label  class="col-sm-3 col-form-label">No Buku Uji</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nobukuuji" placeholder="Buku Uji">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-3 col-form-label">No Kendaraan</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nokendaraan" placeholder="No Kendaraan">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-3 col-form-label">No Mesin</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nomesin" placeholder="No Mesin">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-3 col-form-label">Jenis Kendaraan</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="jenis" placeholder="Jenis Kendaraan">
    </div>
  </div>

   <div class="form-group row">
    <label  class="col-sm-3 col-form-label">Tanggal Pendaftaran</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" name="jenis" placeholder="Tanggal pemeriksaan">
    </div>
  </div>

  <div class="form-group row" class="navbar dropdown ">
    <label  class="col-sm-3 col-form-label">USER</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="user" placeholder="USER" >
    </div>
  </div>

<div align="text-center">
    <a href="pendaftaran.php" class="btn btn-primary"> Daftar </a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" name="reset">
  </div>
</form>

<? php
  $kode = @$_POST['nouji'];
  $kode = @$_POST['nobukuuji'];
  $kode = @$_POST['nokendaraan'];
  $kode = @$_POST['nomesin'];
  $kode = @$_POST['nomesin'];
  $kode = @$_POST['jenis'];

  $kode = @$_POST['user'];

?>
  
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

