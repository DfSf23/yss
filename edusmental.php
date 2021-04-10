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
   <h1> <a>Educate yourself<br>Mental health 101</a></h1>
        <h4>What is mental health?</h4>

<p>Mental health, like physical health, is a key component of what makes us well. We can think of mental health like we think of physical health, but where physical health refers to our bodies, mental health refers to our thoughts, feelings, and behaviours.</p>
<p>Mental health is often thought of as only being applicable to the 1 in 5 people who experience mental illness, but that's not the case. The reality is that 5 in 5 people have mental health, and everyone needs to be a part of the conversation. We ALL have mental health. Whether you are part of the 1 in 5 or not, you need to be a part of this conversation.</p>
       <h4>Identifying a Struggle.</h4>
<p>With or without a mental illness, it can be quite difficult to recognize when mental distress has become too severe for us to look after on our own. Mental distress can be recognized as a “struggle” whenever we or someone we know experiences negative thoughts, feelings, and behaviours that have become intense, long-lasting, and are beginning to have a big impact on our lives. This framework is a helpful tool to use when we’re trying to assess the severity of the thoughts, feelings, and behaviours we might be experiencing:</p>
<p>- Are they intense? These aren’t mild, everyday fluctuations. They’re stronger and more persistent thoughts, feelings, and behaviours than the usual ups and downs of life.
</p>
<p> -	Are they long-lasting? They’re having a consistent or lingering presence over weeks, months, or longer. Many professionals suggest that anything that’s lasted two weeks or longer can be cause for concern.</p>
<p>-	Are they having a big impact? They’re beginning to have negative consequences in one’s life, possibly interfering with someone’s ability to function and/or meet their everyday goals.</p><br>
        <h4>Seeking and accepting help is a sign of strength</h4>
           <p> Mental health describes our emotional, psychological, and social well being. It affects how we think, feel and act, how we handle stress, relate to others, and make choices. Your brain is an organ, and is affected by diet, exercise, sleep, environment, body chemistry, medications and treatments, just like the rest of your body. The difference of course is that it controls the rest of the body, and your actions — which is why improving your mental health can have profound effects on everything else in your life. We live in a culture that values self-reliance, it takes courage to speak up and ask for help. If someone you know has shown that strength, let them know you admire their efforts.</p>

<p>Likewise, if you think you might need help, be proud of taking charge and going out to get it. The reward for your courage will be a healthier life. 
</p>
<h4>Help us create a better mental health future!</h4>
           <p>Working toward your optimal state of mental wellness means you can best realize your potential. It also means you can best contribute to your family, friends, co-workers, community and country. This is why better mental health is not just good for each of us individually — it’s good for all of us as a society.</p>
        <p>What you do makes a difference. Talk openly and positively about mental health. Offer help if you think it might be needed. Share mental health resources. Practice mental wellness. Be part of a better mental health future</p>
    <h4>Mental health in number</h4>
           <p>For 2017 this study estimates that 792 million people lived with a mental health disorder. This is slightly more than one in ten people globally (10.7%) Mental health disorders are complex and can take many forms.Mental health disorders remain widely under-reported. This is true across all countries, but particularly at lower incomes where data is scarcer, and there is less attention and treatment for mental health disorders.</p>
        <img id="map" src="map.jpg">
        <p>The data shown in this entry demonstrate that mental health disorders are common everywhere. Improving awareness, recognition, support and treatment for this range of disorders should therefore be an essential focus for global health.</p>
        <h5>Sources: <a href="https://mentalhealthchannel.tv/">mentalhealthchannel.tv</a>, <a href="https://jack.org/Home">jack.org</a></h5>
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
