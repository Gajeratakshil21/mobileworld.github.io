<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.content
{
  
}
.mySlides 
{
    display: block
}
img {
vertical-align: left;
}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
<?php
include("header.php");
include("connection.php");
?>
<div class="slideshow-container">


<div class="mySlides fade">
  <img src="images/image2.jpg" style="width:100%;height:400px">
  </div>

<div class="mySlides fade">
  <img src="images/image4.jpg" style="width:100% ;height:400px">
  </div>

  <div class="mySlides fade">
  <img src="images/con_a70_03.png" style="width:100% ;height:400px">
  </div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
<br><br>
<p  align="center">**********************************************************************************************************</p>
<h1 align="center">New Releases</h1>
<p  align="center">**********************************************************************************************************</p>
<br><br>
<?php
    $q="SELECT p_id,m_name,mobile_image FROM product ORDER BY release_date DESC LIMIT 0,10";
    $r=mysqli_query($con,$q);
    echo '<table border="3" width="100%">';
    echo '<tr>';
    $i=0;
    while($rs=mysqli_fetch_array($r))
    {
       echo '<td><img src="admin/image/'.$rs[2].'" width="200" height="200"></a><a href="mobile_detail.php?id='.$rs[0].'"><center><p style="background-color:#04AA6D;width:190px;height:40px">'.$rs[1].'</center></p><br></td>';
       
       $i++;
        if($i == 5)
          echo "</tr><tr>";
    }
  echo '</tr></table>';

?>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
<br><br><br><br><br><br><br><br><br>
<?php
include("footer.php");
?>
</body>
</html> 
