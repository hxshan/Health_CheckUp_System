<?php
session_start();
require_once '../includes/dbh.inc.php';
require_once '../includes/functions.inc.php';
$userInfo=getUserInfo($conn,$_SESSION["UserId"])
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/DashboardIncludes.css">
    <link rel="stylesheet" href="../styles/userprofile.css">
    <title>User Profile</title>
</head>
<body>
    <main>
    <button class="b_back"><a href="UserDashboard.php">Back</a></button>
    <div class="profile-content">
            <div class="profile-info">
                <img src="../images/male-user-64.png" width="100px" height="100px">
                <h2><?php echo $userInfo["FirstName"].' '.$userInfo["LastName"];?></h2>

                <div class="profile-details">
                    <div class="div1"> <p>DOB :</p> </div>
                    <div class="div2"> <p> 05/05/2005</p> </div>
                    <div class="div3"> <p>Email : </p> </div>
                    <div class="div4"> <p> <?php echo $userInfo["Email"];?></p> </div>
                    <div class="div5"> <p>Phone : </p> </div>
                    <div class="div6"> <p> <?php echo $userInfo["PhoneNumber"];?></p> </div>
                    <div class="div7"> <p>Address : </p> </div>
                    <div class="div8"> <p>1324/ab,St.Cleare Road,colombo </p> </div>
                </div>
            </div>

            <div class="activity-table-div">
                <h2>My Activity</h2>

                <table> 
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Doctor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>xray</td>
                            <td>Right leg xray</td>
                            <td>05/05/2005</td>
                            <td>Sunil</td>
                        </tr>
                        <tr>
                            <td>xray</td>
                            <td>Right leg xray</td> 
                            <td>05/05/2005</td>
                            <td>Sunil</td>
                        </tr>
                        <tr>
                            <td>xray</td>
                            <td>Right leg xray</td>
                            <td>05/05/2005</td>
                            <td>Sunil</td>
                        </tr>
                        <tr>
                            <td>xray</td>
                            <td>Right leg xray</td>
                            <td>05/05/2005</td>
                            <td>Sunil</td>
                        </tr>
                        <tr>
                            <td>xray</td>
                            <td>Right leg xray</td>
                            <td>05/05/2005</td>
                            <td>Sunil</td>
                        </tr>
                        <tr>
                            <td>xray</td>
                            <td>Right leg xray</td>
                            <td>05/05/2005</td>
                            <td>Sunil</td>
                        </tr>
                        <tr>
                            <td>xray</td>
                            <td>Right leg xray</td>
                            <td>05/05/2005</td>
                            <td>Sunil</td>
                        </tr>
                        <tr>
                            <td>xray</td>
                            <td>Right leg xray</td>
                            <td>05/05/2005</td>
                            <td>Sunil</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </main>
</body>
</html>