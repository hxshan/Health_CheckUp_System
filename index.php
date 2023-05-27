<?php
  session_start();
  require_once 'includes/dbh.inc.php';
  require_once 'includes/functions.inc.php';
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
    <link rel="stylesheet" type="text/css" href="styles/Static_site.css" />
    <title>Health Check ups</title>

  </head>
  <body>
    
    <main>
      <div class="top">
        <div class="logo">
        <a href="index.php"><img id="logo"src="images/logo.jpg"/></a>
        </div>
        
        <div class="log">
          <?php if(isset($_SESSION["UserId"])){?>
            <div class="top-right">
              <div class="prof-info">
                <?php echo "<p>". $userInfo["FirstName"]." ".$userInfo["LastName"]."</p>"?>
                <div class="prof-img">
                  <img src="images/pfp.jpg" alt="profle pic">
                </div>
              </div>
              <div class="dropdown-container closed">
                  <div class="dropdown-content">
                      <a href="#">Profile</a>
                      <a href="pages/UserDashboard.php">Dashboard</a>
                      <a href="includes/logout.inc.php">Log out</a>
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
        
        <a href="index.php">Home</a>
        <a href="pages/contact.php">Contact Us</a>
        <a href="pages/facility.php">Facilities</a>
        <a href="pages/news.php">News</a>
        <?php if(isset($_SESSION["UserId"])){?>
          <a href="pages/UserDashboard.php">Dashboard</a>
        <?php } ?>
      </div>
      <div class="center">
        <h1>Welcome To our Health check-up & Diet System</h1>
        <div class="appointment-btns">
          <?php if(isset($_SESSION["UserId"])){?>
            <a href="#">Make Appointment</a>
            <a href="#">Get Diet Plan</a>
          <?php } else { ?>
            <a href="pages/login.php">Make Appointment</a>
            <a href="pages/login.php">Get Diet Plan</a>
          <?php }?>
        </div>
       
      </div>
      <section>
        <h1 class="title">FAQ</h1>
        <div class="faq">
          <div class="question">
            <h3>What is a health and diet system?</h3>
            <svg width="30" height="30" viewBox="0 0 42 25">
              <path
                d="M3 3L21 21L39 3"
                stroke="black"
                stroke-width="7"
                stroke-linecap="round"
              />
            </svg>
          </div>
          <div class="answer">
            <p>
              A health and diet system refers to a structured approach or
              program designed to promote overall health and wellbeing through
              the integration of proper nutrition, exercise, and lifestyle
              choices. These systems often include guidelines, strategies, and
              tools to help individuals achieve their health and weight goals.
            </p>
          </div>
        </div>
        <div class="faq">
          <div class="question">
            <h3>How can a health and diet system benefit me?</h3>
            <svg width="30" height="30" viewBox="0 0 42 25">
              <path
                d="M3 3L21 21L39 3"
                stroke="black"
                stroke-width="7"
                stroke-linecap="round"
              />
            </svg>
          </div>
          <div class="answer">
            <p>
              A health and diet system can offer numerous benefits, such as
              weight management, improved energy levels, enhanced physical
              fitness, reduced risk of chronic diseases, better mental health,
              improved digestion, and increased overall well-being
            </p>
          </div>
        </div>
        <div class="faq">
          <div class="question">
            <h3>Can a health check system detect all diseases?</h3>
            <svg width="30" height="30" viewBox="0 0 42 25">
              <path
                d="M3 3L21 21L39 3"
                stroke="black"
                stroke-width="7"
                stroke-linecap="round"
              />
            </svg>
          </div>
          <div class="answer">
            <p>
              While a health check system aims to identify potential health
              issues, it may not detect all diseases or conditions. Some
              diseases may require specific tests or screenings not typically
              included in routine health check-ups. Additionally, the accuracy
              of tests and screenings can vary, and false negatives or positives
              are possible. Consult with your healthcare provider for a
              comprehensive understanding of the tests and screenings
              appropriate for you.
            </p>
          </div>
        </div>
        <div class="faq">
          <div class="question">
            <h3>Are health check systems covered by insurance?</h3>
            <svg width="30" height="30" viewBox="0 0 42 25">
              <path
                d="M3 3L21 21L39 3"
                stroke="black"
                stroke-width="7"
                stroke-linecap="round"
              />
            </svg>
          </div>
          <div class="answer">
            <p>
              The coverage for health check systems varies depending on the type
              of insurance and the specific policy. Some insurance plans may
              partially or fully cover routine health check-ups, while others
              may require additional premiums or have limitations on coverage.
              It is advisable to review your insurance policy or consult with
              your insurance provider to understand the extent of coverage for
              health check systems
            </p>
          </div>
        </div>
      </section>
      <div class="share">
      <img src="images/instagram.svg" width="40px" />
          <img src="images/facebook.svg" width="40px" />
          <img src="images/twitter.svg" width="40px" />
          <img src="images/linkedin.svg" width="40px" />
          </div>
    </main>
    <script src="scripts/home.js"></script>
  </body>
</html>
