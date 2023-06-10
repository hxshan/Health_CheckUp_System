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
    <title>Facility</title>
  </head>
  <body>
    <main>
    
    <div class="top">
        <div class="logo">
        <a href="../index.php"><img id="logo"src="../images/logo.jpg"/></a>
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
        
        <a href="../index.php">Home</button></a>
        <a href="contact.php">Contact Us</button></a>
        <a href="facility.php">Facilities</a>
        <a href="news.php">News</a>
        <?php if(isset($_SESSION["UserId"])){?>
          <a href="UserDashboard.php">Dashboard</a>
        <?php } ?>
        
    </div>

      <div class="center-fac">
        <h1>Our <span>Facilities</span></h1>
        <div class="container-fac">
        <div class="left-fac">
        <img src="../images/about-img.svg">
        </div>
        <div class="right-fac">
          <div class="right-up">
        <div class="hos">
          <h2>Hospitals</h2>
          <img src="../images/hospital-regular.svg" width="40px" />
          <p>
            A health care institution providing patient treatment with
            specialized health science and auxiliary healthcare staff and
            medical equipment.
          </p>
        </div>
        <div class="dia">
          <h2>Diagnostic Center</h2>
          <img src="../images/stethoscope-solid.svg" width="40px" />
          <p>
            Diagnostic Services facilitates the provision of timely,
            cost-effective, and high quality diagnostic care in safe and secure
            environments.
          </p>
        </div>
        </div>
        <div class="right-bot">
        <div class="well">
          <h2>Wellness Clinics</h2>
          <img src="../images/house-chimney-medical-solid.svg" width="40px" />
          <p>
            A combination of skin care services and body services, such as
            fitness services, personal training and nutrition consulting are
            provided.
          </p>
        </div>
        <div class="lab">
          <h2>Laboratory</h2>
          <img src="../images/flask-vial-solid.svg" width="40px" />
          <p>
            Provides a comprehensive range of diagnostic testing and clinical
            and consultative services
          </p>
        </div>
        </div>
        </div>
        </div>
      </div>
      <div class="bottom">
        <h1>Our <span>Services</span></h1>
        <div class="serv">
        <div class="free-chk">
          <h2>Check-up</h2>
          <img src="../images/user-check-solid.svg" width="50px">
          <ul>
            <li>Free appointment for new members</li>
            <li>Free doctor reviews</li>
            <li>No delays</li>
          </ul>
        </div>
        <div class="ambul">
        <h2>Ambulance</h2>
          <img src="../images/truck-medical-solid.svg" width="50px">
          <ul>
            <li>Fastest and safest vehicals</li>
            <li>5 to 10 mins arival time to spot</li>
            <li>A doctor is provided</li>
          </ul>
        </div>
        <div class="expert">
        <h2>Doctor</h2>
          <img src="../images/user-doctor-solid.svg" width="40px">
          <ul>
            <li>Profesional and skilled doctors</li>
            <li>Every doctor is tested</li>
            <li>20 to 30 years experience</li>
          </ul>
        </div>
        </div>
      </div>
    </main>
  </body>
</html>
