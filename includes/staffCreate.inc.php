<?php
if(isset($_POST["submit"])){
   $firstname = $_POST["firstname"];
   $lastname = $_POST["lastname"];
   $address = $_POST["Address"];
   $type=$_POST["StaffType"];
   $email = $_POST["email"];
   $phone = $_POST["Phone"];
   $password = $_POST["password"];
   $reppassword = $_POST["reppassword"];
   
   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';

  
   if(emptyInputSignup($firstname,$lastname,$email,$password,$reppassword) !== false){

    header("location: ../pages/staffCreate.php?error=emptyinput");
        exit();
    }

    if(invalidNameSignup($firstname,$lastname) !== false){

        header("location: ../pages/staffCreate.php?error=invalidname");
        exit();
    }
    
    if(invalidEmailSignup($email) !== false){

        header("location: ../pages/staffCreate.php?error=invalidemail");
        exit();
    }
    
    if(pwdMatchInvalid($password,$reppassword) !== false){

        header("location: ../pages/staffCreate.php?error=passwordsdontmatch");
        exit();
    }
    CreateUser($conn,$firstname,$lastname,$email,$phone,$password,$type,$address,"","");

}else{
    header("location:../pages/staffCreate.php?error=daas");
    exit();
}