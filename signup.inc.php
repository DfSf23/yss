<?php

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    
    if(emptyInputSignup($name,$email,$username,$pwd,$pwdRepeat) !== false){
        header("location: ../loginsignup.php?error=emptyinput");
        exit();
    }
    if(ivalidUid($username) !== false){
        header("location: ../loginsignup.php?error=invaliduid");
        exit();
    }
    if(ivalidEmail($email) !== false){
        header("location: ../loginsignup.php?error=ivalidemail");
        exit();
    }
    if(pwdMatch($pwd,$pwdRepeat) !== false){
        header("location: ../loginsignup.php?error=passworddontmatch");
        exit();
    }
    if(uidExists($conn, $username, $email) !== false){
        header("location: ../loginsignup.php?error=usernametaken");
        exit();
    }
    createUser($conn, $name, $email, $username, $pwd);
}
else{
    header("location: ../loginsignup.php");
    exit();
}