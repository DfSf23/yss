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
   <h1> <a>Contacts</a></h1>
   <p>You can contact us 25 hours 8 days in a week, we are always here. Although it might take us some time to answer, because we have school, we swear to sneak out of the classroom with our phones the second we get your notification.<br><br>
Bobi - bobkatasad@abv.bg
<br>
Iva - ivamarinova062@gmail.com
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
