
<?php

  require_once '../includes/dbh.inc.php';
  require_once '../includes/functions.inc.php';
  $userInfo=getUserInfo($conn,$_SESSION["UserId"]);
  $role=$userInfo["RoleId"];
  $firstname=$userInfo["FirstName"];
?>

<div class="container">
    <div class="header">
        <div class="logo">
            <img src="../images/Logotxt.png"  height="75px" width="200">
        </div>

        <div class="full">
            <div class="nfull">
                <a href="#"><img src="../images/notification-64.png"  height="40px"width="40px"></a>
            </div>
            <div class="fulln" >

                <a id="pfp" href="#" ><img src="../images/male-user-64.png"  height="40px"width="40px"></a>
                <a id="name" href="#" ><?php echo "<h4>$firstname</h4>";?></a>
                <a id="arrow" href="#" ><img src="../images/sort-down-48.png"  height="25px"width="30px"></a>

            </div>
            <div class="dropdown-container closed">
            <div class="dropdown-content">
                <a href="#">Profile</a>
                <a href="pages/UserDashboard.php">Dashboard</a>
                <a href="includes/logout.inc.php">Log out</a>
            </div>
        </div>
        </div>

    </div>
    <div class="Navibar">
        <div class="naviup">
            <div class="nav-item">
                <a class="nav-link" href="../pages/UserDashboard.php"><img src="../images/dashboard.svg" height="45px" width="45px">Dashboard</a>
            </div>
            <div class="nav-item">

                <a class="nav-link" href="#"><img src="../images/calendar.svg" height="45px" width="45px">Appointments</a>
            </div>
            <div class="nav-item">
                <a class="nav-link" href="#"><img src="../images/report-64.png" height="45px" width="45px">Reports</a>
            </div>
            <?php if($role==1 || $role==2){?>
            <div class="nav-item">
                <a class="nav-link" href="#"> <img src="../images/diet-64.png" height="45px" width="45px">Diet Plans</a>
            </div>
            <?php }?>
            <?php if($role==3){?>
            <div class="nav-item">
                <a class="nav-link" href="#"><img src="../images/patients-64.png" height="45px" width="45px">Patients</a>
            </div>
            <?php }?>
            <?php if($role==4){?>
            <div class="nav-item">
                <a class="nav-link" href="#"><img src="../images/staff-64.png" height="45px" width="45px">Staff</a>
            </div>
        </div>
        <?php }?>

        <div class="navidown">
        <div class="nav-item">
                <a class="nav-link" href="../index.php"><img src="../images/Back-Arrow.png" height="45px" width="45px">Back to Home</a>
            </div>
                <div class="nav-item">
                    <a class="nav-link" href="#"><img src="../images/support-60.png" height="45px" width="45px">Support</a>
                </div>
            
                <div class="nav-item">
                    <a class="nav-link" href="#"><img src="../images/setting-64.png" height="45px" width="45px">Settings</a>
                </div>
        </div>
    </div>
</div>
<script src="../scripts/header.js"></script>