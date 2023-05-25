<?php

if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $pwd = $_POST["password"];

    require_once "dbh.inc.php";
    require_once "functions.inc.php";   

    if(emptyInputLogin($email,$pwd) !== false){
        header("location: ../login.php");
        exit();
    }
    if(emailExist($conn,$email) === false){
        header("location: ../login.php?error=emaildoesntexist");
        exit();
    }
    LoginUser($conn,$email,$pwd);

}