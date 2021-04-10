<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
	<title>Your safe space</title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	

  </head>
  <body>
    <div class="btn" onclick="showit()">
      <span class="fas fa-bars"></span>
    </div>
<nav class="sidebar">
      <div class="text">
T&DNP</div><?php
        include_once 'bodito.php';
    ?>
</nav>
<div class="parallax">
    </div>
	<div id="container">
  <?php
        include_once 'tr.php';
    ?>
   <h1> <a>Educate yourself<br>Covid and the pandemic</a></h1>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Vestibulum non elit nec diam consequat fermentum. Integer finibus tempor risus sed bibendum. 
Sed sit amet placerat sem, quis sagittis nisi. Donec et mi sed nisi elementum porttitor. 
Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse commodo fringilla odio in gravida. 
Suspendisse pulvinar lacus sit amet felis ornare, ac iaculis dolor cursus. 
Donec venenatis, nisi in efficitur facilisis, metus quam porta lectus, in vehicula nunc diam a nunc. 
Nullam lobortis nibh tristique mauris sodales ultricies. Ut lacinia condimentum nunc et scelerisque. 
Vestibulum pretium pellentesque tellus, in bibendum massa blandit a.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
Vestibulum non elit nec diam consequat fermentum. Integer finibus tempor risus sed bibendum. 
Sed sit amet placerat sem, quis sagittis nisi. Donec et mi sed nisi elementum porttitor. 
Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse commodo fringilla odio in gravida. 
Suspendisse pulvinar lacus sit amet felis ornare, ac iaculis dolor cursus. 
Donec venenatis, nisi in efficitur facilisis, metus quam porta lectus, in vehicula nunc diam a nunc. 
Nullam lobortis nibh tristique mauris sodales ultricies. Ut lacinia condimentum nunc et scelerisque. 
Vestibulum pretium pellentesque tellus, in bibendum massa blandit a.</p>

</div>
<script>
    $('.btn').click(function(){
      $(this).toggleClass("click");
      $('.sidebar').toggleClass("show");
    });
      $('.feat-btn').click(function(){
        $('nav ul .feat-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
      });
      $('.serv-btn').click(function(){
        $('nav ul .serv-show').toggleClass("show1");
        $('nav ul .second').toggleClass("rotate");
      });
      $('nav ul li').click(function(){
        $(this).addClass("active").siblings().removeClass("active");
      });
	  function showit() {
		document.getElementById('container').classList.toggle('active');
      }
    </script>

  </body>
</html>
