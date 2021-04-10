<html>
<head>
    <title>Log in</title>
<style>
p{
    position: absolute;
    left: 140px;
    top: 460px;
    font-display: block;
    color: red;
}
*{
margin: 0;
padding: 0;
font-family: sans-serif;
}
.hero{
	height: 100%;
	width: 100%;
	background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(bannerr.jpg);
	background-position: center;
	background-size: cover;
	position: absolute;
}
.form-box{
width: 380px;
height: 480px;
position: relative;
margin: 6% auto;
background: #fff;
padding: 5px;
overflow: hidden;
}
.button-box{
width: 220px;
margin: 35px auto;
position: relative;
box-shadow: 0 0 20px 9px #1E90FF;
border-radius: 30px;
}
.toggle-btn{
	padding: 10px 30px;
	cursor: pointer;
	background: transparent;
	border: 0;
	outline: none;
	position: relative;
}
#btn{
	top: 0;
	left: 0;
	position: absolute;
	width:110px;
	height: 100%;
	background: linear-gradient(to right, #87CEFA,#00BFFF);
	border-radius: 30px;
	transition: .5s;
}
.input-group{
	top: 180px;
	position: absolute;
	width: 280px;
	transition: .5s;
}
.ïnput-field{
	width: 100%;
	padding: 10px 0;
	margin: 5px 0 ;
	border-left:0;
	border-right:0;
	border-top:0;
	border-bottom:1px solid #999;
	outline: none;
	background: transparent;
}
.submit-btn{
	width: 85%;
	padding:10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: linear-gradient(to right, #87CEFA,#00BFFF);
	border: 0;
	outline: none;
	border-radius: 30px;
}
.chech-box{
	margin: 30px 10px 30px 0;
}
span{
	color: #777;
	font-size: 12px;
	bottom: 68px;
	position: absolute;
}
#login{
	left: 50px;
}
#register{
	left: 450px;
}
</style>
</head>
    <body>
        <div class="hero">
		<div class="form-box">
		 <div class="button-box">
			<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
		 </div>
		<form action="includes/login.inc.php" id="login" class="input-group" method="post">
			<input type="text" name="uid" class="ïnput-field" placeholder="User ID" required>
			<input type="password" name="pwd" class="ïnput-field" placeholder="Enter Password" required>
			<input type="checkbox" class="chech-box"><span>Remember Password</span>
            
				<button type="submit" name="submit" class="submit-btn">Log in</button>
			
			
		</form>
            <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<p>Fill in all fields!</p>";
                }
                else if ($_GET["error"] == "wronglogin"){
                    echo "<p>Incorrect login!</p>";
                }
            }
        ?>
		<form action="includes/signup.inc.php" id="register" class="input-group" method="post">
            <input type="text" name="name"  class="ïnput-field" placeholder="Full name...">
            <input type="text" name="email" class="ïnput-field" placeholder="Email...">
            <input type="text" name="uid" class="ïnput-field" placeholder="Username...">
            <input type="password" name="pwd" class="ïnput-field" placeholder="Password...">
            <input type="password" name="pwdrepeat" class="ïnput-field" placeholder="Repeat password...">
            <button type="submit" class="submit-btn" name="submit">Sign up</button>
        </form>
            <?php
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<p>Fill in all fields!</p>";
                }
                else if ($_GET["error"] == "invaliduid"){
                    echo "<p>Choose a proper username!</p>";
                }
                else if ($_GET["error"] == "ivalidemail"){
                    echo "<p>Choose a proper email!</p>";
                }
                else if ($_GET["error"] == "passworddontmatch"){
                    echo "<p>Passwords don't match!</p>";
                }
                else if ($_GET["error"] == "stmtfailed"){
                    echo "<p>Something went wrong! Try again!</p>";
                }
                else if ($_GET["error"] == "usernametaken"){
                    echo "<p>Username already taken!</p>";
                }
                else if ($_GET["error"] == "none"){
                    echo "<p>You have signed up!</p>";
                }
            }   
        ?>
		</div>	
	</div>
	<script>
	var x = document.getElementById("login");
	var y = document.getElementById("register");
	var z = document.getElementById("btn");
	
	function register(){
		x.style.left = "-400px";
		y.style.left = "50px";
		z.style.left = "110px";
	}
	function login(){
		x.style.left = "50px";
		y.style.left = "450px";
		z.style.left = "0px";
	}
	</script>
       <!---
        <div class="signup-form-form">
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Password...">
            
            <button type="submit" name="submit">Log in</button>
           </form>
        </div>
           <?php
            /*
            if(isset($_GET["error"])){
                if($_GET["error"] == "emptyinput"){
                    echo "<p>Fill in all fields!</p>";
                }
                else if ($_GET["error"] == "wronglogin"){
                    echo "<p>Incorrect login!</p>";
                }
            }
            */
        ?>
        --->
    </body>
</html>
