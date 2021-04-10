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
   <h1> <a>Educate yourself<br>Mental health - myths and facts</a></h1>
<h4>Myth: Mental health problems don't affect me.</h4>
<br>
<p>Fact: Mental health problems are actually very common. In 2014, about:

One in five American adults experienced a mental health issue
One in 10 young people experienced a period of major depression
One in 25 Americans lived with a serious mental illness, such as schizophrenia, bipolar disorder, or major depression
Suicide is the 10th leading cause of death in the United States. It accounts for the loss of more than 41,000 American lives each year, more than double the number of lives lost to homicide. Learn more about mental health problems.

</p>
<div class="line"></div>
<h4>Myth: Children don't experience mental health problems.</h4>
<br>
<p>Fact: Even very young children may show early warning signs of mental health concerns. These mental health problems are often clinically diagnosable, and can be a product of the interaction of biological, psychological, and social factors.<br>

Half of all mental health disorders show first signs before a person turns 14 years old, and three quarters of mental health disorders begin before age 24.<br>

Unfortunately, less than 20% of children and adolescents with diagnosable mental health problems receive the treatment they need. Early mental health support can help a child before problems interfere with other developmental needs.


</p>
<div class="line"></div>
        
<h4>Myth: People with mental health problems are violent and unpredictable.</h4>
<br>
<p>Fact: The vast majority of people with mental health problems are no more likely to be violent than anyone else. Most people with mental illness are not violent and only 3%–5% of violent acts can be attributed to individuals living with a serious mental illness. In fact, people with severe mental illnesses are over 10 times more likely to be victims of violent crime than the general population. You probably know someone with a mental health problem and don't even realize it, because many people with mental health problems are highly active and productive members of our communities.

</p>
<div class="line"></div>
        
<h4>Myth: There is no hope for people with mental health problems. Once a friend or family member develops mental health problems, he or she will never recover.</h4>
<br>
<p>Fact: Studies show that people with mental health problems get better and many recover completely. Recovery refers to the process in which people are able to live, work, learn, and participate fully in their communities. There are more treatments, services, and community support systems than ever before, and they work.
</p>
<div class="line"></div>
<h4>Myth: Therapy and self-help are a waste of time. Why bother when you can just take a pill?</h4>
<br>
<p>Fact: Treatment for mental health problems varies depending on the individual and could include medication, therapy, or both. Many individuals work with a support system during the healing and recovery process.
</p>
        <br>
        <p>The information is taken from <a href="https://www.mentalhealth.gov/basics/mental-health-myths-facts">here</a></p>
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
