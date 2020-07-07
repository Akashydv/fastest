<!DOCTYPE html>
<html>
<head>
  <title>Fastest Jobs</title>
  <style>
<?php include_once'assets/css/try.css';?>
</style>	
	<?php include_once'layout/head.php';?>
  <?php include_once'layout/header.php';?>
<body>

<div class="jumbotron text-center">
  <h1>Inside Fastest Jobs</h1>
  
  </div>
  <div class="inside">
<div class="container">
  <div class="row">
    <div class="col-sm-7">
      <iframe width="680" height="385" style="margin-left:-15px"src="https://www.youtube.com/embed/zv4f-7GlbrA">
</iframe>
    </div>
	
    <div class="col-sm-5">
      
      <h1>Inside our office</h1>
	<p>While our practices are structured nationally, our teams are spread across locations. To interact and bond, we travel as well as connect virtually. At work, some of us have individual corners to decorate and call our own, while others float and occupy 'Hot Seats'. Our offices are spacious , comfortable and are equipped with necessary comforts and resources. We make it a point to decorate our offices to reflect our unique culture and aesthetics.</p>
    </div>
   </div>
  </div>
</div>
<div class="inside_one">
<div class="container">
  <div class="row">
    <div class="col-sm-5">
	
      <h1>Life at Fastest Jobs</h1>
	<p>Flexi-timings and work from home arrangements enable us to balance our professional and personal priorities. We rarely miss an opportunity to celebrate festivals and birthdays, enjoy the company of li'l ones on our kids day, go for team outings, and play pranks. Our day-outings and offsites are a blast and everyone eagerly looks forward to being part of the Annual Conference. When we're not doing all of this, we connect with clients and candidates and work as well.</p>
    
	</div>
    <div class="col-sm-7">
      <div class="w3-content w3-display-container">
  <img class="mySlides" src="assets/images/try/22.png">
  <img class="mySlides" src="assets/images/try/23.png">
  <img class="mySlides" src="assets/images/try/24.png"> 
  <img class="mySlides" src="assets/images/try/25.png">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)"style="margin-left:25px" "margin-top:100px">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(-1)"style="margin-left:531px">&#10095;</button>
</div>
    </div>
 </div>  
  </div>
</div>
<div class="inside_third">
<div class="container">
  <div class="row">
   

<h1>Why join Fastest Jobs</h1>
<p>At the end of the day, if we're able to keep clients , candidates and employees happy and delighted , it's worth all the effort put in. If you are target oriented, hungry for success and want to carve out a niche for yourself, your search ends here. We invite you to be part of our roller coaster ride, where the journey is tough, but the thrill is awesome. Building Careers. Building Organisations. That's what we do best. We are Fastest Jobs.</p>
</div>

</div>
</div>
<div class="inside_four">
<div class="container">
  <div class="row">

<h1>Interested in being part of the passionate team at Fastest Jobs?<h1>
<br><button class="button" style="margin-left:-800px;">Mail Us</button>

</div>
</div>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
'use strict';
(function($) {
  $('document').ready(function() {

    if ('.ct-js-current-facts__slider3'.length) {
      $('.ct-js-current-facts__slider3').slick({
        arrows: false,
        slidesToShow: 4,
		loop: true,
        autoplay: true,
		interval: 3000,
        
      });
    }

  });

})(jQuery);
</script>
<?php include_once'layout/footer.php'?>
</body>
</html>
