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

    <div id="page1" class="dashboard-content" >
        <div class="dashboard-container">
            <h1>Upcoming Event</h1>
            <div class="upcoming-div">
                <div class="event-con">
                    <h2>Title</h2>
                    <p>Somthing</p>
                    <button class="dash-view-btn" type="button">view</button>
                </div>
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

        <a href="../includes/logout.inc.php">Logout</a>
    </div>
    
        
    <div id="page2"  class="appoinment-content, hidden" >
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
   
    <div  class="diet-plan-content, hidden" >
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
        </main>
    </div>

    <script src="../scripts/dashboard.js"></script>
</body>
</html>