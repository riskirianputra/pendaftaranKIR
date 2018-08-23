<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Pendaftaran Uji Kendaraan</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Stylesheets -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" />
        <!-- Custom stylesheet -->
        <link rel="stylesheet" href="css/custom.css" />
       <link rel="stylesheet" href="css/slide.css" /> 

    </head>
    <body style="background-image: url(images/img_2.jpg)" role="banner">

        <!-- Preloader --> 
       
        <!--End Preloader -->


        <!-- Navbar -->
        <nav class="navbar navbar-default">
            <div class="container">

                <div class="navbar-header">
                    
<br>
                    

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>					
                </div>

                <div class="collapse navbar-collapse navbar-right" id="nav" >
                    <ul class="nav">
                        <li role="presentation"><a href="../index.php">Home</a></li>                        
                        <li role="presentation"><a href="../login2.php">login</a></li>                                                                        
                    </ul>
                </div>
            </div>
        </nav><!-- Navbar end -->


        <!-- Header -->
        <header id="home">
            <!-- Carousel -->
            <div id="carousel" class="carousel slide" >

                <!-- Wrapper for slides -->
                <div class="carousel-inner" >

                    <div >
                        <div class="slideshow-container">

                          <div class="mySlides fade">
                          <div align="center"><h3> <a href="#">Pendaftaran Online Uji Kendaraan</h3></div>                            
                            <img src="../images/diskot.jpg" style="width:100%">                            
                          </div>

                          <div class="mySlides fade">
                          <div align="center"><h3><a href="#"> Pendaftaran Online Uji Kendaraan</h3></div>                                                        
                            <img src="../images/diskot.jpg" style="width:100%">                            
                          </div>

                          <div class="mySlides fade">
                          <div align="center"><h3><a href="#"> Pendaftaran Online Uji Kendaraan</a></h3></div>                            
                            <img src="../images/hubungan.jpg" style="width:100%">                                                       
                          </div>
                    </div>
                       
                                    
                                    <BR>
                                    		
                                </div>						
                            </div>
                        </div>
                    </div>                             
                
        </header><!-- Header end -->
<div align="center" class="btn"> 
   <h3>  <a href="#"></h3></a>
 </div>     
<div align="center" class="btn"> 
   <h3> <a href="#"></h3></a>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


        <!-- scroll up-->
       
        <!-- JavaScript -->
        <script src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



        <!--main js-->
        <script type="text/javascript" src="js/main.js"></script>

    </body>	
</html>	