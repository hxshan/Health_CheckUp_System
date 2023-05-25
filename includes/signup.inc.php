<?php
if(isset($_POST["submit"])){
   $name = $_POST["name"];
   $email = $_POST["email"];
   $password = $_POST["password"];
   $reppassword = $_POST["reppassword"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name,$email,$password,$reppassword) !== false){

        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    
    if(invalidNameSignup($name) !== false){

        header("location: ../signup.php?error=invalidname");
        exit();
    }
    
    if(invalidEmailSignup($email) !== false){

        header("location: ../signup.phperror=invalidemail");
        exit();
    }
    
    if(pwdMatchInvalid($password,$reppassword) !== false){

        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    
    if(emailExist($conn,$name) !== false){

        header("location: ../signup.php?error=emailExist");
        exit();
    }

    CreateUser($conn,$name,$email,$password);


}else{
    header("location:../signup.php");
    exit();
}