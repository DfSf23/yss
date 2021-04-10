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
T&DNP</div>
<?php
        include_once 'bodito.php';
    ?>
</nav>
<div class="parallax">
    </div>
	<div id="container">
        <?php
            include_once 'tr.php';
        ?>
   <h1> <a>About us</a></h1>
   <p>We are a group of five students from ELSYS and our names are Iva, Bobi, Joanne, Kat and Krissy. That’s our first time working together and we are really excited to welcome all of you to our team.</p> 
<p>The idea for this project came while we were brainstorming a lot of ridiculous ideas like dating apps and with a lot of energy sketched the design on a piece of paper. And don’t even get me started on the struggle that it was to come up with the name. One of our names had the same name as a well known sexually transmitted disease, of course by accident, luckily we realized this on time.</p>
 <p>I think it’s safe to say that the majority of our team had little to know past experience with anything site related, which made our work a bit hard and definitely slowed down the process. Thanks to Bobi and a lot of online tutorials, we were able to make it just on time.</p>
<p>We are open to any suggestions you might have! All you need to do is check out the Contact section on your left or use the tawk.to feature.
</p>
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
