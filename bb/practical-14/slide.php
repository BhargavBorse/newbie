<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {background-color: black;}

img {vertical-align: middle;}
.slide {
  max-width: 800px;
  position: relative;
  margin: auto;
}

/* Caption text */
.capp {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.text123 {
  color: white;
  font-size: 30px;
  padding: 12px 20px;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  background-color:white;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: red;
}
</style>
</head>
<body>
<center>
<h2 style="color: white;">PHP SLIDER</h2>

<div class="slide">

<div class="mySlides fade">
  <div class="text123">1 / 4</div>
  <img src="5d81cc4.jpg" height="300px" width="500px">
  <!-- <div class="capp">HAYABUSA 1</div> -->
</div>

<div class="mySlides fade">
  <div class="text123">2 / 4</div>
  <img src="521c54c.png" height="300px" width="500px">
  <!-- <div class="capp">HAYABUSA 2</div> -->
</div>

<div class="mySlides fade">
  <div class="text123">3 / 4</div>
  <img src="545901.png" height="300px" width="500px">
  <!-- <div class="capp">LAMBORGINI</div> -->
</div>
<div class="mySlides fade">
  <div class="text123">4 / 4</div>
  <img src="601644.png" height="300px" width="500px">
  <!-- <div class="capp">LAMBORGINI HURACAN</div> -->
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
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
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); 
}
</script>

</body>
</html> 
