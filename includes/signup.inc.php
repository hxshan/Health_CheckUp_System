<?php
if(isset($_POST["submit"])){
   $firstname = $_POST["firstname"];
   $lastname = $_POST["lastname"];
   $email = $_POST["email"];
   $phone = $_POST["Phone"];
   $password = $_POST["password"];
   $reppassword = $_POST["reppassword"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($firstname,$lastname,$email,$password,$reppassword) !== false){

        header("location: ../pages/signup.php?error=emptyinput");
        exit();
    }
    
    if(invalidNameSignup($firstname,$lastname) !== false){

        header("location: ../pages/signup.php?error=invalidname");
        exit();
    }
    
    if(invalidEmailSignup($email) !== false){

        header("location: ../pages/signup.php?error=invalidemail");
        exit();
    }
    
    if(pwdMatchInvalid($password,$reppassword) !== false){

        header("location: ../pages/signup.php?error=passwordsdontmatch");
        exit();
    }
    
    if(emailExist($conn,$email) !== false){

        header("location: ../pages/signup.php?error=emailExist");
        exit();
    }

    CreateUser($conn,$firstname,$lastname,$email,$phone,$password);


}else{
    header("location:../pages/signup.php?error=daas");
    exit();
}