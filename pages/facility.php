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
        <a href="index.php"><img id="logo"src="../images/logo.png"/></a>
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
            <a href="pages/signup.php"> <button>Sign up</button></a>
            <a href="pages/login.php"> <button>Log in</button></a>
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

      <div class="center">
        <h1>Our Facilities</h1>
      </div>
      <div class="bottom">
        <div class="hos">
          <h2>Hospitels</h2>
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
            environments. It includes the clinical services of Pathology and
            Laboratory Medicine, Radiology, and Nuclear Medicine .
          </p>
        </div>
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
      <div class="share">
        <img src="../images/instagram.svg" width="40px" />
            <img src="../images/facebook.svg" width="40px" />
            <img src="../images/twitter.svg" width="40px" />
            <img src="../images/linkedin.svg" width="40px" />
            </div>
    </main>
  </body>
</html>
