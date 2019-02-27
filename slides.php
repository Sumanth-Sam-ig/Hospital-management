<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/slide.css?v=<?php echo time(); ?>">
</head>
<body>


<div class="slideshow-container">

<div class="mySlides fade">
  
  <img class="img1" src="img/hos4.jpg" style="width:100%">
  <div class="text"> <h3>Best Medical Staff </h3> 
         <div class="stext"> The at our medical centers we have the best medical personals 
           with varied experiences for all different treatments.Health centers also often integrate access to pharmacy, mental health,
         and oral health services in areas where economic, geographic,
         or cultural barriers limit access to affordable health care services.
         </div>

</div>
</div>

<div class="mySlides fade">
  
  <img  class="img1" src="img/healthcare6.jpg" style="width:100%">
  <div class="text"><h3> World class Medical centers </h3>

      <div class="stext"> Health centers are community-based and patient-directed organizations that deliver comprehensive,
         high-quality primary health care services. 
        Health centers also often integrate access to pharmacy, mental health,
         and oral health services in areas where economic, geographic,
         or cultural barriers limit access to affordable health care services. </div>


</div>
</div>

<div class="mySlides fade">
  
  <img  class="img1" src="img/hos2.jpg" style="width:100%">
  <div class="text"><h3>Best in Class Facilities</h3>

<div class="stext"> we provide the best in class Fcilities. Health centers also often integrate access to pharmacy, mental health,
         and oral health services in areas where economic, geographic,
         or cultural barriers limit access to affordable health care services.  </div>


</div>
</div>

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
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active1", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active1";
    setTimeout(showSlides, 2600); 
}
</script>

</body>
</html> 
