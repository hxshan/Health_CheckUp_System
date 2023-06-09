<?php

function emptyInputSignup($firstname,$lastname,$email,$password,$reppassword){

    $result=null;
 
    if(empty($firstname)||empty($lastname)||empty($email)||empty($password)||empty($reppassword)){
        $result=true;
    }else{
        $result=false;
    }
    return $result;
}
function ConvertToDate($date){
    $condate = date("Y-m-d", strtotime($date));
    return $condate;
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

function invalidNameSignup($firstname,$lastname){

    $result=null;
 
    if(!preg_match("/^[a-zA-Z]*$/", $firstname)){
        $result=true;
    }else{
        $result=false;
    }
    if(!preg_match("/^[a-zA-Z]*$/", $lastname)){
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
    $sql="SELECT * FROM Users WHERE Email=?;";

    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){

        header("location ../pages/signup.php?error=stmtfailed");
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
function getuserbydetails($conn,$firstname,$lastname,$email){
    $sql="SELECT * FROM Users WHERE FirstName=? AND LastName=? AND Email=?";

    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){

       
        exit();
    }
    mysqli_stmt_bind_param($stmt,"sss",$firstname,$lastname,$email);
    mysqli_stmt_execute($stmt);

    $resultdata = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    if($row=mysqli_fetch_assoc($resultdata)){
        return $row["Id"];
    }

}

function getPatientbyUserId($conn,$id){
    $sql="SELECT * FROM patient WHERE UserId = ?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,"i",$id);
        mysqli_stmt_execute($stmt);
        $result= mysqli_stmt_get_result($stmt);
        mysqli_stmt_close($stmt);
        if($row=mysqli_fetch_assoc($result)){
            return $row;
        }
        
    }   
}


function AddUserAsPaitent($conn,$firstname,$lastname,$email,$address,$DOB,$Gender){

    $UserId=getuserbydetails($conn,$firstname,$lastname,$email);
    $sql = "INSERT INTO Patient (UserId,Address, DOB, Gender) VALUES(?,?,?,?);";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,"isss",$UserId,$address,$DOB,$Gender);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../pages/login.php?error=none");
        exit();
    }
}


function CreateUser($conn,$firstname,$lastname,$email,$phone,$password,$roleId,$address,$convertedDate,$Gender){
    $sql="INSERT INTO Users (FirstName,LastName, Email,PhoneNumber,pwd,RoleId) VALUES (?,?,?,?,?,?)";


    $stmt=mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt,$sql)){

        header("location ../pages/signup.php?error=stmtfailed");
        return false;
    }
    $hashpwd=password_hash($password,PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt,"sssssi",$firstname,$lastname,$email,$phone,$hashpwd,$roleId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    AddUserAsPaitent($conn,$firstname,$lastname,$email,$address,$convertedDate,$Gender);
}

function getUserInfo($conn,$id){
    $sql="SELECT * FROM Users WHERE id=?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){   
        exit();
    }
    mysqli_stmt_bind_param($stmt,"i",$id);
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
        header("location: ../pages/Login.php?error=emailnotregistered");
        exit();
    }
    $pwdhash=$users["Pwd"];
    $chkpwd=password_verify($password,$pwdhash);

    if($chkpwd === false){
        header("location: ../pages/Login.php?error=wrongpwd");
        exit();
    }else if($chkpwd === true){
        session_start();
        $_SESSION["UserId"] = $users["Id"];
        header("location: ../index.php?error=loged");
        exit();
    }
} 


function getCheckUpPlans($conn){
    $sql="SELECT * FROM checkupplan"; 
    $result= mysqli_query($conn,$sql);
    return $result;

}
function getCheckUpPlansbyId($conn,$id){
    $sql="SELECT * FROM checkupplan WHERE Id = ?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,"i",$id);
        mysqli_stmt_execute($stmt);
        $result= mysqli_stmt_get_result($stmt);
        return $result;
    }   
    
}

function getTestbyId($conn,$id){
    $sql="SELECT * FROM test WHERE Id = ?;";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,"i",$id);
        mysqli_stmt_execute($stmt);
        $result= mysqli_stmt_get_result($stmt);
        return $result;
    }   
}
function getCheckUpDetails($conn,$id){
    $sql="SELECT * FROM checkupplandetails WHERE CheckupPlanId=?;";

    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        exit();
    }else{
        mysqli_stmt_bind_param($stmt,"i",$id);
        mysqli_stmt_execute($stmt);
        $result= mysqli_stmt_get_result($stmt);
        return $result;
    }

}
function makeCheckUpApp($conn,$Id,$planId){
    $sql="INSERT INTO checkupappointment (PatientAppointmentId,CheckupPlanId) VALUES (?,?);";

   
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"ii",$Id,$planId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        

    }
}
function makePatientApp($conn,$patientId,$CreatedDate,$scheduledDate,$status,$TypeId,$planId){
    $sql="INSERT INTO patientappointment (PatientId,CreatedDate,ScheduledDate,Status,TypeId) VALUES (?,?,?,?,?);";

    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"isssi",$patientId,$CreatedDate,$scheduledDate,$status,$TypeId);
        mysqli_stmt_execute($stmt);
        $PAId=mysqli_insert_id($conn);
        mysqli_stmt_close($stmt);
        makeCheckUpApp($conn,$PAId,$planId);
    }   

}