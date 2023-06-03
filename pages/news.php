<?php
session_start();
require_once '../includes/dbh.inc.php';
require_once '../includes/functions.inc.php';
if(isset($_SESSION["UserId"])){
  $userInfo=getUserInfo($conn,$_SESSION["UserId"]);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../styles/Static_site.css" />
    <title>News</title>
  </head>
  <body>
    <main>
    <div class="top">
        <div class="logo">
        <a href="index.php"><img id="logo"src="../images/logo.jpg"/></a>
        </div>
        
        <div class="log">
          <?php if(isset($_SESSION["UserId"])){?>
            <div class="top-right">
              <div class="prof-info">
                <?php echo "<p>". $userInfo["FirstName"]." ".$userInfo["LastName"]."</p>"?>
                <div class="prof-img">
                  <img src="../images/pfp.jpg" alt="profle pic">
                </div>
              </div>
              <div class="dropdown-container closed">
                  <div class="dropdown-content">
                      <a href="#">Profile</a>
                      <a href="UserDashboard.php">Dashboard</a>
                      <a href="../includes/logout.inc.php">Log out</a>
                  </div>
              </div>
            
            </div>
            
          <?php }else  {?>   
            <a href="signup.php"> <button>Sign up</button></a>
            <a href="login.php"> <button>Log in</button></a>
          <?php }?>
        </div>
      </div>
      <div class="medium">
        
        <a href="../index.php">Home</a>
        <a href="contact.php">Contact Us</a>
        <a href="facility.php">Facilities</a>
        <a href="news.php">News</a>
        <?php if(isset($_SESSION["UserId"])){?>
          <a href="UserDashboard.php">Dashboard</a>
        <?php } ?>
        
</div>
     
      <h1>News <span>and</span> Events</h1>
      <div class="new">
        <div class="one">
      <div class="loc">
        <img src="../images/location.jpg" width="390px" height="250px"/>
        <h2>New location</h2>
        <p>
          We have moved our company to two more new locations around this
          country, so that people can easliy travel to there nearby hospitals
          without strugelling.
        </p>
      </div>
      <div class="Achev">
        <img src="../images/achev.jpg" width="390px" height="250px" />
        <h2>Achievements</h2>
        <p>
          This health checkup & diet planning has since the commencement of
          business provided excellent medical services to the resisdents of sri
          lanka.
        </p>
      </div>
      <div class="rev">
        <img src="../images/review.webp" width="390px"  height="250px"/>
        <h2>Customer reviews</h2>
        <p>
          These reviews are written by satisfied customers from our organisation
        </p>
      </div>
      </div>
      <div class="two">
      <div class="doc">
        <img src="../images/doctor.webp" width="390px" height="250px"/>
        <h2>New doctors</h2>
        <p>
          These are newly appointed doctors to our facilities,who are chosed by
          their excellent skills and achievements.
        </p>
      </div>
      <div class="equi">
        <img src="../images/eqip.avif" width="390px" height="250px"/>
        <h2>New equipments</h2>
        <p>
          Since our advance development of our system, we bought new expensive
          equipmwents to our doctors to handle with.
        </p>
      </div>
      <div class="cel">
        <img src="../images/new year.jpg" width="390px" height="250px"/>
        <h2>New year celebration</h2>
        <p>Our new year celebration with employees</p>
      </div>
      </div>
      </div>
      <div class="last">
      <h2 class="fol">Follow us on</h2>
      <div class="new-icon">
          <button><img src="../images/instagram.svg" width="40px" /></button>
          <button><img src="../images/facebook.svg" width="40px" /></button>
          <button><img src="../images/twitter.svg" width="40px" /></button>
          <button><img src="../images/linkedin.svg" width="40px" /></button>
          </div>
        </div>
    </main>
  </body>
</html>
