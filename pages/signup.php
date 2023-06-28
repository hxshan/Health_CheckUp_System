<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../styles/signup.css">

        <title>Sign-Up</title>
        
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

        
        <div class="form-container">
           <!-- <div class="form-top">
                <img class="form-img" src="../images/form-heart.png">
                <div class="title">
                    <p class="title-text">Register</p>
                </div>
            </div>-->
            <p class="message">Sign up and unlock a healthier future.</p>
            <div class="form-bottom">               
                <form action="../includes/signup.inc.php" method="post" class="form">
                    
                    <div class="section1">                     
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input class="input2" type="text" id="firstname" name="firstname" placeholder="First Name"> 
                        </div>
                        <div class="form-group" id="lastname-con">    
                            <label for="lastname">Last Name</label>    
                            <input class="input2" id="lastname" type="text" name="lastname" placeholder="Last Name"> 
                        </div>
                        
                        <div class="form-group">    
                                <label for="Address">Address</label>    
                                <input class="input2" id="address" type="text" name="Address" placeholder="Address"> 
                        </div>
                        <div class="form-group"> 
                            <label for="date">Date of Birth</label>
                            <input class="input2" type="date" id="date" name="DOB">
                        </div>
                        <div class="form-group">
                            <label for="Gender">Gender</label>
                            <select class="Gender" id="gender" name="Gender">
                                <option value="">Select...</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>  
                        </div>
                        <button type="button" class="next" name="next">Next</button>
                    </div>
                    <div class="section2 hidden">
                        <div class="form-group"> 
                            <label for="date">Email</label>
                            <input class="input2" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group"> 
                            <label for="date">Phone Number</label> 
                            <input class="input2" type="tel" name="Phone" placeholder="Phone Number"> 
                        </div>
                        <div class="form-group"> 
                            <label for="password">Password</label>
                            <input  id="password" class="input2" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">     
                            <label for="reppassword">Confirm Password</label>
                            <input  id="reppassword" class="input2" type="password" name="reppassword" placeholder="Confirm Password">
                        </div>
                        <?php
                        if(isset($_GET["error"])){
                            $error=$_GET["error"];
                            if($error=="wrongpwd"){
                        }

                    }?>
                        <button type="submit" class="submit" name="submit">Sign up</button>
                    </div>
                    <p style="color:red;font-size:1.2rem;font-weight:600" class="error-msg hidden">ALL FIELDS SHOUD BE FILLED!!</p>
                    <p class="signin">Already have an acount ? <a href="login.php">Sign in</a> </p>
                </form>
                <div class="form-side-img">
                    <img  src="../images/formimg.svg" alt="image">
                </div>
                </div>
            
            </div>
        </div>
        
<footer style="margin:200px 0 0 0;">
    <a href="https://storyset.com/online" style="text-decoration:none;color:black;margin:200px 0;">Online illustrations by Storyset</a>
</footer>
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <script src="../scripts/signupform.js"></script>
    </body>
</html>