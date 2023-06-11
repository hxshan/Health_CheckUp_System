
<?php

if(isset($_POST["delete"])){
    $userId=$_POST["userId"];
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    deleteDietitianUserbyId($conn,$userId);
    
}