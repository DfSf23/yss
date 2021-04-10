<?php
    session_start();
?>
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
   <h1> <a>Home</a></h1>
   <p>Your safe space is a project dedicated to mental health. The purpose of our website and application is to promote the idea that our mental health care should be prioritized. We believe that physical and mental health are equally important for our well being. Check out our website, while you enjoy a nice melody, that we picked for you. :)</p>

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
