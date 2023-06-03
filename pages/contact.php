
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
    <title>Contact us</title>
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
      <div class="container">
      <div class="location">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12671.607067819505!2d79.85332911024612!3d6.923960700464002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2596aaa8742d9%3A0xced655398fd4d621!2sSLIIT%20Metropolitan%20Campus!5e0!3m2!1sen!2slk!4v1684504938539!5m2!1sen!2slk"
              width="600"
              height="390"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
          </div>
          <div class="box">
            <div class="con-img">
              <img src="../images/book-img.svg" >
        </div>
        <div class="contact">
          <h1>Contact Us</h1>
          <form>
            <h3>Name</h3>
            <input type="text" id="fname" name="fname" placeholder="First Name" />
            <input type="text" id="lname" name="lname" placeholder="Last Name" />
            <h3>Email</h3>
            <input
              type="text"
              id="email"
              name="email"
              placeholder="Eg:-someone@gmail.com"
            />
            <h3>Phone</h3>
            <input
              type="text"
              id="phone"
              name="phone"
              placeholder="Eg:-07# ### ####"
            />
            <h3>Message subject</h3>
            <input
              type="text"
              id="subject"
              name="subject"
              placeholder="subject"
            />
            <h3>Message</h3>
            <textarea id="message" name="message"cols="30" rows="10" placeholder="Type Message"></textarea>
            <input id="send" type="submit" value="send" />
          </form>
        </div>
        </div>
          <div class="info">
            <h2>Contact info</h2>
            <p>General Line :(+94)33 1234567</p>
            <p>Fax :(+94)30 1234567</p>
            <p>Email :checkupz@gmail.com</p>
            <div class="icons">
          <button><img src="../images/instagram.svg" width="40px" /></button>
          <button><img src="../images/facebook.svg" width="40px" /></button>
          <button><img src="../images/twitter.svg" width="40px" /></button>
          <button><img src="../images/linkedin.svg" width="40px" /></button>
          </div>
          </div>
      </div>
    </main>
  </body>
</html>
