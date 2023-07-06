

<?php
    session_start();
    // this is the make appointment details and get the patient details
    
    if(isset($_POST["make-App"])){
        require_once 'dbh.inc.php';
        require_once 'functions.inc.php';

        $patientInfo=getPatientbyUserId($conn,$_SESSION["UserId"]);
        $patientId=$patientInfo["Id"];
        $date=$_POST["date"];
        $conDate=ConvertToDate($date);
        $time=$_POST["time"];
        $CreatedDate = date('Y-m-d H:i:s');
        $planId=$_POST["chkId"];
        $scheduledDate=$conDate.' '.$time;
        makePatientApp($conn,$patientId,$CreatedDate,$scheduledDate,'Pending Completion',1,$planId);// assign the details
        header("location: ../pages/UserDashboard.php");
    }