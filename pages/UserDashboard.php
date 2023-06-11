<?php
session_start();
require_once '../includes/dbh.inc.php';
require_once '../includes/functions.inc.php';
$userInfo=getUserInfo($conn,$_SESSION["UserId"]);
$role=$userInfo["RoleId"];
if($role==1){
    $PatientInfo=getPatientbyUserId($conn,$_SESSION["UserId"]);
    $patientId=$PatientInfo["Id"];
    $patientapp=getPatientAppbyId($conn,$patientId);
    $checkUpInfo=getCheckUpPlans($conn);
}
if($role==4){
    $stafflist=getUsersbyRoleId($conn,3);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/Dashboard.css">
    <link rel="stylesheet" href="../styles/DashboardIncludes.css">
    <link rel="stylesheet" href="../styles/serv.css">
   
    <title>Dashboard</title>
</head>
<body>
    <!-- PAtinetints PArt-->
    <?php if($role==1) { ?>
        <main>
            <?php
                include_once "../includes/Head-sidebar.inc.php";
            ?>  
            <div id="page1" class="dashboard-content" >
                <div class="dashboard-container">
                    <h1>Upcoming Event</h1>
                    
                    <div class="upcoming-div">
                    <?php while($row=mysqli_fetch_assoc($patientapp) ) {?>
                        <div class="event-con">
                            <?php if($row["TypeId"]==1){
                                echo "<h2>CheckUp Appointment</h2>";
                             }?>
                            <p>Upcoming Appointment</p>
                            <button class="dash-view-btn" type="button">view</button>
                        </div>
                        <?php } ?>
                    </div>
                    
                </div>
                    <div class="services-container">
                        <h1>Services</h1>
                        <div class="whole">
                            <div class="wrapper">
                                <ul class="service-div">
                               <?php while($chkrow=mysqli_fetch_assoc($checkUpInfo) ) {?>
                                        <li class="card">
                                            <?php echo "<h2>".$chkrow["Name"]."</h2>" ?>
                                            <?php echo "<p>".$chkrow["Description"]."</p>";?>
                                            <?php echo "<a href=\"CheckUpDetail.php?chkId=".$chkrow["Id"]."\""."> View More </a>"?>
                                        </li>
                                <?php } ?>  
                                </ul>
                                <div class="arrow">
                                <img id="left" src="../images/angle-left-solid.svg">
                            <img id="right" src="../images/angle-right-solid.svg">
                        </div>
    </div>
                        </div>
                    </div>


            </div>
            <div id="page2"  class="appoinment-content hidden" >
                <div>
                    <table>
                        <thead>
                        <tr>
                            <th></th> <!-- Empty cell for the top-left corner -->
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>12 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td> 
                            <td></td> 
                            <td></td> 
                            <td></td> 
                        </tr>
                        <tr>
                            <th>1 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>2 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>3 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>4 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>5 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>6 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>7 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>8 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>9 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>10 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>11 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>12 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>1 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>2 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>3 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>4 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>5 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>6 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>7 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>8 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>9 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>10 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>11 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>   
            </div>
            <div  class="diet-plan-content hidden" >
                    <div class="welcome" >
                        <h1>Welcome to Diet Plan</h1>
                    </div>
                    <div class="diet-page-div">
                        <div class="diet-info">
                            <h2>Started Plans</h2>
                            <div class="diet-plan-div">
                                <h3>Diet plan name</h3>
                                <p>Started date : </p>
                                <p>Status : </p>
                                <p>Meal 1:</p>
                                <p>Meal 2:</p>
                                <p>Meal 3:</p>
                                
                            </div>
                        </div>
                        <div>
                            <div class="info">
                                <h2>Contact Dietitian</h2>
                                <p>Email :dietitien.checkupz@gmail.com</p>
                                <div class="icons">
                                    <button><img src="../images/instagram.svg" width="40px" /></button>
                                    <button><img src="../images/facebook.svg" width="40px" /></button>
                                    <button><img src="../images/twitter.svg" width="40px" /></button>
                                    <button><img src="../images/linkedin.svg" width="40px" /></button>
                                </div>
                            </div>

                            <div class="new-diet-plan">
                                <h1>Diet Plans</h1>
                                <div class="diet-plan-options">
                                    <div>
                                        <a href="#">Pre-made diet plan</a>
                                    </div>

                                    <div>
                                        <a href="#">Pre-made diet plan</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
        </main>
        <script src="../scripts/dash.js"></script>
        <script src="../scripts/dashboard.js"></script>
    <?php } ?>

    <?php if($role==3) { ?> 
        <main>
            <?php
                include_once "../includes/Head-sidebar.inc.php";
            ?>  
            <div id="page1" class="dashboard-content" >
                <div class="dashboard-container">
                    <h1>Upcoming Event</h1>
                    
                    <div class="upcoming-div">
                    
                    </div>
                    
                </div>
                   
            </div>
            <div id="page2"  class="appoinment-content hidden" >
                <div>
                    <table>
                        <thead>
                        <tr>
                            <th></th> <!-- Empty cell for the top-left corner -->
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>12 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td> 
                            <td></td> 
                            <td></td> 
                            <td></td> 
                        </tr>
                        <tr>
                            <th>1 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>2 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>3 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>4 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>5 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>6 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>7 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>8 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>9 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>10 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>11 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>12 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>1 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>2 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>3 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>4 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>5 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>6 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>7 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>8 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>9 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>10 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>11 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>   
            </div>
            <div id="page4" class="patient-content hidden">
                <h1>Patient List</h1>
                <div class="patient-main">
                    <div class="patient-list">
                        <div class="patient-list-info">
                            <img src="../images/male-user-64.png" width="35px" height="35px">
                            <p>Example Name</p>
                        </div>

                            <div class="patient-list-info">
                                <img src="../images/male-user-64.png" width="35px" height="35px">
                                <p>Example Name</p>
                            </div>  

                            <div class="patient-list-info">
                                <img src="../images/male-user-64.png" width="35px" height="35px">
                                <p>Example Name</p>
                            </div>
                        </div>

                        <div class="Patient-profile">
                            <img src="../images/male-user-64.png" width="100px" height="100px">
                            <h2>Example Name</h2>

                            <div class="parent">
                                <div class="div1"> <p>Age : </p> </div>
                                <div class="div2"> <p> 50</p> </div>
                                <div class="div3"> <p>Phone : </p> </div>
                                <div class="div4"> <p> 077 555 5555</p> </div>
                                <div class="div5"> <p>Address : </p> </div>
                                <div class="div6"> <p>uyhdhs asdghsui suiduisduiushd iosd suihuiashd suihduioash </p> </div>
                                <div class="div7"> <p>Gender : </p> </div>
                                <div class="div8"> <p> boing apache helicopter</p> </div>
                            </div>

                            <div class="options">
                                <a href="#">Prescribe</a>
                                <a href="#">Diet</a>
                                <a href="#">Report</a>
                            </div>

                        <div class="contact-patient">
                            <a href="#" >Contact Patient</a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="../scripts/DietitianDashboard.js"></script>
    <?php } ?>
    <!-- ADMINS PART-->
    <?php if($role==4) { ?>
        <main>
            <?php
                include_once "../includes/Head-sidebar.inc.php";
            ?>
            <div id="page1" class="dashboard-content" >
                <div class="dashboard-container">
                    <h1>Dashboard</h1>
                    <div class="upcoming-div">
                        <!--<div class="event-con">
                            <h2>Title</h2>
                            <p>Somthing</p>
                            <button class="dash-view-btn" type="button">view</button>
                        </div>-->
                    </div>
                </div>
                    
            </div>
            <div id="page2"  class="appoinment-content hidden" >
                <div>
                    <table>
                        <thead>
                        <tr>
                            <th></th> <!-- Empty cell for the top-left corner -->
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                            <th>Saturday</th>
                            <th>Sunday</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>12 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td> 
                            <td></td> 
                            <td></td> 
                            <td></td> 
                        </tr>
                        <tr>
                            <th>1 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>2 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>3 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>4 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>5 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>6 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>7 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>8 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>9 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>10 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>11 AM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>12 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>1 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>2 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>3 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>4 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>5 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>6 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>7 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>8 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>9 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>10 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>11 PM</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>   
            </div>
            <div class="patient-content hidden">
                <h1>Patient List</h1>
                <div class="patient-main">
                    <div class="patient-list">
                        <div class="patient-list-info">
                            <img src="../images/male-user-64.png" width="35px" height="35px">
                            <p>Example Name</p>
                        </div>

                            <div class="patient-list-info">
                                <img src="../images/male-user-64.png" width="35px" height="35px">
                                <p>Example Name</p>
                            </div>  

                            <div class="patient-list-info">
                                <img src="../images/male-user-64.png" width="35px" height="35px">
                                <p>Example Name</p>
                            </div>
                        </div>

                        <div class="Patient-profile">
                            <img src="../images/male-user-64.png" width="100px" height="100px">
                            <h2>Example Name</h2>

                            <div class="parent">
                                <div class="div1"> <p>Age : </p> </div>
                                <div class="div2"> <p> 50</p> </div>
                                <div class="div3"> <p>Phone : </p> </div>
                                <div class="div4"> <p> 077 555 5555</p> </div>
                                <div class="div5"> <p>Address : </p> </div>
                                <div class="div6"> <p>uyhdhs asdghsui suiduisduiushd iosd suihuiashd suihduioash </p> </div>
                                <div class="div7"> <p>Gender : </p> </div>
                                <div class="div8"> <p> boing apache helicopter</p> </div>
                            </div>

                            <div class="options">
                                <a href="#">Prescribe</a>
                                <a href="#">Diet</a>
                                <a href="#">Report</a>
                            </div>

                        <div class="contact-patient">
                            <a href="#" >Contact Patient</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="staff-content hidden">
                <div class="staff-top">
                    <h1>Staff List</h1>
                    <a class="AddStaff-btn" href="StaffCreate.php">+ Add Staff</a>
                </div>
                <div class="staff-main">
                    <div class="staff-list">
                        <?php while($row=mysqli_fetch_assoc($stafflist)) {?> 
                        <div class="staff-list-info">
                            <div class="staff-list-info-top">
                                <img src="../images/male-user-64.png" width="35px" height="35px">
                                <p><?php echo $row["FirstName"].' '.$row["LastName"] ?></p>
                            </div> 
                            <form action="../includes/deleteUser.inc.php" method="post">
                                <input type="hidden" name="userId" <?php echo "value=\"".$row["Id"]."\"";?>>
                                <button type="submit" name="delete">Remove</button>
                            </form>
                        </div>
                        <?php }?>

                            <!--<div class="staff-list-info">
                                <img src="../images/male-user-64.png" width="35px" height="35px">
                                <p>Example Name</p>
                            </div>  

                            <div class="staff-list-info">
                                <img src="../images/male-user-64.png" width="35px" height="35px">
                                <p>Example Name</p>
                            </div>-->
                        </div>
                    </div>
            </div>     
        </main>
        <script src="../scripts/AdminDashboard.js"></script>
        <script src="../scripts/dash.js"></script>
    <?php }?>
    
</body>
</html>