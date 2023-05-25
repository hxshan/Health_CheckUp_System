<?php

$serverName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="login";

$conn = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

if($conn){



}else{
    die("error".mysqli_connect_error());
}