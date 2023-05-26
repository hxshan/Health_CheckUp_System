<?php
session_start();
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
        <a href="../index.php"><img src="../images/logo.png" width="250px" /></a>
        <div class="log">
          <?php if(isset($_SESSION["UserId"])){?>
            <a href="../includes/logout.inc.php"> <button>Log out</button></a>
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
     
      <h1>News and Events</h1>
      <div class="new">
        <div class="one">
      <div class="loc">
        <img src="../images/location.jpg" width="400px" height="250px"/>
        <h2>New location</h2>
        <p>
          We have moved our company to two more new locations around this
          country, so that people can easliy travel to there nearby hospitals
          without strugelling.
        </p>
      </div>
      <div class="Achev">
        <img src="../images/achev.jpg" width="400px" height="250px" />
        <h2>Achievements</h2>
        <p>
          This health checkup & diet planning has since the commencement of
          businss provided excellent medical services to the resisdents of sri
          lanka. Since its operation,HC&DP has consistently produced greater
          than expected quality of services to our clients.
        </p>
      </div>
      <div class="rev">
        <img src="../images/review.webp" width="400px"  height="250px"/>
        <h2>Customer reviews</h2>
        <p>
          These reviews are written by satisfied customers from our organisation
        </p>
      </div>
      </div>
      <div class="two">
      <div class="doc">
        <img src="../images/doctor.webp" width="400px" height="250px"/>
        <h2>New doctors</h2>
        <p>
          These are newly appointed doctors to our facilities,who are chosed by
          their excellent skills and achievements.
        </p>
      </div>
      <div class="equi">
        <img src="../images/eqip.avif" width="400px" height="250px"/>
        <h2>New equipments</h2>
        <p>
          since our advance development of our system, we bought new expensive
          equipmwents to our doctors to handle with.
        </p>
      </div>
      <div class="cel">
        <img src="../images/new year.jpg" width="400px" height="250px"/>
        <h2>New year celebration</h2>
        <p>our new year celebration with employees</p>
      </div>
      </div>
      </div>
      <h2 class="fol">Follow us on</h2>
      <div class="share">
        <img src="../images/instagram.svg" width="40px" />
            <img src="../images/facebook.svg" width="40px" />
            <img src="../images/twitter.svg" width="40px" />
            <img src="../images/linkedin.svg" width="40px" />
            </div>
    </main>
  </body>
</html>
