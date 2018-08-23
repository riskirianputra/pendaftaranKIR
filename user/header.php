<!DOCTYPE html>
<html>
<head>
  <?php 
  session_start();
  include 'cek.php';
  include 'config.php';
  ?>
   <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pendaftaran UJI Kendaraan</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../assets/js/jquery-ui/jquery-ui.css">
  <script type="text/javascript" src="../assets/js/jquery.js"></script>
  <script type="text/javascript" src="../assets/js/jquery.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.js"></script>  
</head>
<body style="background-image: url(images/img_6.jpg)" role="banner">

  <div class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a href="awal.php" class="navbar-brand">Hy , <?php echo $_SESSION['username']  ?>&nbsp&nbsp<span class="glyphicon glyphicon-user"></span></a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">        
        <ul class="nav navbar-primary">
          <li><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#"></a></li>
          
          <li><a href="perpanjangan.php">perpanjangan</a></li>
          <li><a href="pendaftaran.php">Daftar Baru</a></li>
          <li><a href="biaya.php">Biaya</a></li>
          <li><a href="syarat.php">Syarat</a></li>
          <li><a href="profile.php">Profil</a></li>
          <li><a href="ganti_pass.php">Ganti Password</a></li>
          <li><a href="../index.php">Logout</a></li>
          
          
        </ul>
      </div>
    </div>
  </div>