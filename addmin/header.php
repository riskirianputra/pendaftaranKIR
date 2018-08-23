<?php
include 'index.php';
?>

 
        <title>Pendaftaran Uji Kendaraan</title>
        <!-- Mobile Specific Meta -->
        
        <!-- Stylesheets -->
       
        <!-- Custom stylesheet -->
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/custom.css" />
       <link rel="stylesheet" href="css/slide.css" /> 

    </head>
<header id="home">
            <!-- Carousel -->
            <div id="carousel" class="carousel slide" >

                <!-- Wrapper for slides -->
                <div class="carousel-inner" >

                    <div >
                        <div class="slideshow-container">

                          <div class="mySlides fade">
                          <div align="center"><h3> <a href="#">Pendaftaran Online Uji Kendaraan</h3></div>                            
                            <img src="images/diskot.jpg" style="width:100%">                            
                          </div>

                          <div class="mySlides fade">
                          <div align="center"><h3><a href="#"> Pendaftaran Online Uji Kendaraan</h3></div>                                                        
                            <img src="images/diskot.jpg" style="width:100%">                            
                          </div>

                          <div class="mySlides fade">
                          <div align="center"><h3><a href="#"> Pendaftaran Online Uji Kendaraan</a></h3></div>                            
                            <img src="images/hubungan.jpg" style="width:100%">                                                       
                          </div>
                    </div>

     
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