<!DOCTYPE html >
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
          <div id="gtco-logo"><a href="index.php"> <em></em></a></div>
        </div>
        <div class="col-xs-8 text-right menu-1">
          <ul>
            <li><a href="index.php">HOME</a></li>
             <li class="has-dropdown">
              <a href="#">LIHAT DATA</a>
              <ul class="dropdown">
                <li><a href="data_baru.php">DAFTAR BARU</a></li>
                <li><a href="data_perpanjang.php">PERPANJANGAN</a></li>                   
              </ul>        
              <li><a href="home.php">Laporan</a></li>
            </li>
            <li> <a href="../user/login.php" class="btn btn-primary"> LOGOUT </a></li>  
          </ul>
        </div>
        </div>      
      </div>
  </nav>

  <header id="gtco-header" class="gtco-cover" role="banner" style="background-image: url(images/dishub.jpg)">
    <div class="overlay"></div>
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-12 col-md-offset-0 text-left">
                  
        </div>
      </div>
    </div>
  </header>
  
 
 
 

    
    <?php
    require_once('koneksi.php');
    $sql = "SELECT * FROM pendafataran";
    $result=mysql_query($sql);
    if ($result = mysql_query($sql)){
      if(mysql_num_rows($result)> 0){
        echo "<table class='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>No</th>";
        echo "<th>NO_KENDARAAN</th>";
        echo "<th>NO_STNK</th>";
        echo "<th>NO_MESIN</th>";
        echo "<th>NO_RANGKA</th>";
        echo "<th>MERK_KENDARAAN</th>";
        echo "<th>JENIS_KENDARAAN</th>";
        echo "<th>TAHUN_KENDARAAN</th>";
        echo "<th>ID PEMILIK</th>";
        

        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row = mysql_fetch_array($result)){
          echo "<tr>";
          echo "<td>" . $row['idpendaftaran'] . "</td>";
          echo "<td>" . $row['no_kendaraan'] . "</td>";
          echo "<td>" . $row['no_stnk'] . "</td>";
          echo "<td>" . $row['no_mesin'] . "</td>";
          echo "<td>" . $row['no_rangka'] . "</td>";
          echo "<td>" . $row['merk_kend'] . "</td>";
          echo "<td>" . $row['jenis_kend'] . "</td>";
          echo "<td>" . $row['tahun_kend'] . "</td>";
          echo "<td>" . $row['user_iduser'] . "</td>";
          echo "</tr>"; 
          echo "</tr>";
        }                     
      }else{echo "inside if";}
    }else{echo "1st if";}

    ?>
    </tbody>    
  </table>

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