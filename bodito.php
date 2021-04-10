<ul>
<li class="active"><a href="index.php">Home</a></li>
<li>
          <a  class="feat-btn">Get educated
            <span class="fas fa-caret-down first"></span>
          </a>
          <ul class="feat-show">
<li><a href="edus.php">Covid 19 and the pandemic</a></li>
<li><a href="edusmental.php">Mental health 101</a></li>
<li><a href="edusmentaltopics.php">Mental health - different topics</a></li>
<li><a href="edusmentalfacts.php">Mental health - myths and facts</a></li>
</ul>
<li><a href="contacts.php">Contact</a></li>
<li><a href="aboutus.php">About us</a></li>
<li><a href="urproffile.php">Your profile</a></li>
<?php
  if(!isset($_SESSION["useruid"])){
      echo "<li><a href='loginsignup.php'>Sign up/Log in</a></li>";
  }else{
      echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
  }
?>    
</ul>