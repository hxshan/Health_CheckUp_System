<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/Dashboard.css">
    <link rel="stylesheet" href="../styles/DashboardIncludes.css">
   
    <title>Dashboard</title>
</head>
<body>
    <main>
    <?php
        include_once "../includes/Head-sidebar.inc.php";
    ?>
    <div class="dashboard-content">
        <div class="dashboard-container">
            <h1>Upcoming Event</h1>
            <div class="upcoming-div">
                <div class="event-con">
                    <h2>Title</h2>
                    <p>Somthing</p>
                    <button class="dash-view-btn" type="button">view</button>
                </div>
        </div>

        <div class="services-container">
            <h1>Services</h1>
            <div class="service-div">
                <div class="event-con">
                    <img src="">
                    <h2>Title</h2>
                    <p>Somthing</p>
                <!--<button class="dash-view-btn" type="button">view</button>-->
                </div>
        </div>
    </div>

    <div class="appoinment-content">
        
    </div>
          
        <a href="../includes/logout.inc.php">Logout</a>
    </div>
    </main>
    
</body>
</html>