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
        <h1>Services</h1>
        <div class="whole">
        <div class="wrapper">
            <img id="left" src="../images/angle-left-solid.svg">
            <ul class="service-div">
                <li class="card">
                    <h2>Title</h2>
                    <p>Somthing</p>
            </li>
            <li class="card">
                    <h2>Title</h2>
                    <p>Somthing</p>
            </li>
            <li class="card">
                    <h2>Title</h2>
                    <p>Somthing</p>
            </li>
            <li class="card">
                    <h2>Title</h2>
                    <p>Somthing</p>
            </li>
            <li class="card">
                    <h2>Title</h2>
                    <p>Somthing</p>
            </li>
            <li class="card">
                    <h2>Title</h2>
                    <p>Somthing</p>
            </li>
</ul>
<img id="right" src="../images/angle-right-solid.svg">
        </div>
</div>
    </div>

    <div class="appoinment-content">
        
    </div>
          
        <a href="../includes/logout.inc.php">Logout</a>
    </div>
    </main>
    <script src="../scripts/dash.js"></script>
</body>
</html>