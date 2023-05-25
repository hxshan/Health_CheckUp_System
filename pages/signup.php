<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">

        <link rel="stylesheet" href="../styles/signup.css">

        <title>Sign-Up</title>
        
    </head>

    <body>
        
        <div class="back-btn-div">
            <button class="back-btn" type="button">
                <lord-icon
                    src="https://cdn.lordicon.com/jxwksgwv.json"
                    trigger="hover"
                    colors="primary:#121331"
                    style="width:50px;height:50px;transform: rotate(180deg);">
                    
                </lord-icon>
            </button>
        </div>

        

        <form class="form" action="#" method="post">
            <img class="form-img" src="../images/form-heart.png">
            <div class="title">
                <p class="title-text">Register</p>
            </div>
           
            <p class="message">Sign up and unlock a healthier future.</p>

            <div>
                <div class="name-row">
                        <input class="input1" type="text" name="firstname" placeholder="First Name">
                
                        <input class="input1" type="text" name="lastname" placeholder="Last Name"> 
                </div>

                <input class="input2" type="email" name="email" placeholder="Email"> 
                <input class="input2" type="tel" name="Phone" placeholder="Phone"> 
                <input class="input2" type="password" name="password" placeholder="password">
            </div>

            <button class="submit">Sign up</button>

            <p class="signin">Already have an acount ? <a href="login.php">Sign in</a> </p>
        </form>


        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    </body>
</html>