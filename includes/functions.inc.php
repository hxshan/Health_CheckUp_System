<?php

function emptyInputSignup($name,$email,$password,$reppassword){

    $result=null;
 
    if(empty($name)||empty($email)||empty($password)||empty($reppassword)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}
function emptyInputLogin($email,$pwd){

    $result=null;
 
    if(empty($email)||empty($pwd)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function invalidNameSignup($name){

    $result=null;
 
    if(!preg_match("/^[a-zA-Z]*$/", $name)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}
function invalidEmailSignup($email){

    $result=null;
 
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}
function pwdMatchInvalid($password,$reppassword){

    $result=null;
 
    if($password !== $reppassword){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}

function emailExist($conn,$email){
    $sql="SELECT * FROM users WHERE Email=?;";

    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){

        header("location ../signup.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    if($row=mysqli_fetch_assoc($resultdata)){
        return $row;
    }else{
        $result= false;
        return $result;
    }
    
    
    
}

function CreateUser($conn,$name,$email,$password){
    $sql="INSERT INTO users (UserName, Email, pwd) VALUES (?, ?, ?);";

    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){

        header("location ../signup.php?error=stmtfailed");
        exit();
    }
    $hashpwd=password_hash($password,PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt,"sss",$name,$email,$hashpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();

    
}
function getUserInfo($conn,$id){
    $sql="SELECT * FROM users WHERE id=?;";

    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){

       
        exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$id);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    if($row=mysqli_fetch_assoc($resultdata)){
        return $row;
    }
}
function LoginUser($conn,$email,$password){

    $users=emailExist($conn,$email);
    if($users===false){
        header("location: ../Login.php?error=emailnotregistered");
        exit();
    }
    $pwdhash=$users["pwd"];
    $chkpwd=password_verify($password,$pwdhash);

    if($chkpwd === false){
        header("location: ../Login.php?error=wrongpwd");
        exit();
    }else if($chkpwd === true){
        session_start();
        $_SESSION["UserId"] =$users["id"];
        header("location: ../Dashboard.php");
        exit();
    }


} 

