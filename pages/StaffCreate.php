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
            <p class="message">Sign up and unlock a healthier future.</p>
            <div class="form-bottom">               
                <form action="../includes/staffCreate.inc.php" method="post" class="form">
                    
                    <div class="section1">    
                        <div class="form-group">
                        <label for="staffType">Account type</label>
                        <select class="StaffType" id="staffType" name="StaffType">
                                <option value="">Select...</option>
                                <option value="3">Dietitian</option>
                                <option value="4">Admin</option>
                        </select>
                        </div>                 
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
                        <button type="submit" class="submit" name="submit">Create</button>
                    </div>
                    <p style="color:red;font-size:1.2rem;font-weight:600" class="error-msg hidden">ALL FIELDS SHOUD BE FILLED!!</p>
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