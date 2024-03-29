
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
        <link rel="stylesheet" href="../styles/signup.css">
        <title>Log-In</title>     
    </head>

    <body>
        <div class="back-btn-div">
            <a href="../index.php"><button class="back-btn" type="button">
                
                <lord-icon
                    src="https://cdn.lordicon.com/jxwksgwv.json"
                    trigger="hover"
                    colors="primary:#121331"
                    style="width:50px;height:50px;transform: rotate(180deg);">
                    
                </lord-icon>
            </button></a>
        </div>

        <?php
       
        
        ?>
        <div class="login-con">
            <form class="login-form" action="../includes/login.inc.php" method="post">
                <!--<img class="form-img" src="../images/form-heart.png">
                <div class="title">
                    <p class="title-text">Log In</p>
                </div>-->
                <div class="login-img">
                    <img src="../images/login.svg" alt="login image">
                </div>
                <!--<p class="message">Step into a world of personalized care.</p>-->
                    <input class="log-input" type="email" name="email" placeholder="Email"> 
                    <input class="log-input" type="password" name="password" placeholder="password">
                    <?php 
                     if(isSet($_GET["error"]) ){
                        $error=$_GET["error"];
                        if($error!=null && $error=="invalidemail"){?>
                        <p style="color:red;font-weight:600;">Email is Invalid!</p>

                        <?php }else if($error="passwordsdontmatch"){?>
                             <p style="color:red;font-weight:600;">Passwords dont match!</p>
                       <?php }
                     } ?>
                    
                   
                <button class="log-submit" type="submit" name="submit">Sign in</button>

                <p class="signin">Don't have an acount ? <a href="signup.php">Sign up</a> </p>
            </form>
        </div>
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    </body>
</html>