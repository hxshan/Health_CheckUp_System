<?php 
session_start();
require_once '../includes/dbh.inc.php';
require_once '../includes/functions.inc.php';

$id=$_GET["chkId"];
$chkdata=getCheckUpPlansbyId($conn,$id);
$data=getCheckUpDetails($conn,$id);


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../styles/checkUpPlans.css">

        <title>Check Up Details</title>
        
    </head>

    <body>
        <main>
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
            <div class="checkup-info-con">
                <div class="checkup-img">
                    <img src="../images/CheckUp.jpg" alt="image">
                </div>
                <div class="check-up-test">
                    <?php  
                        $checkuprow=mysqli_fetch_assoc($chkdata);?>
                        <div class="description">
                                <?php echo "<p>".$checkuprow["Description"]."</p>";?>
                        </div>
                       <?php while($row=mysqli_fetch_assoc($data))
                        {
                            
                             $testData=getTestbyId($conn,$row["TestId"]);
                            while($test=mysqli_fetch_assoc($testData)){?>
                               <div class="test">
                                    <img src="../images/ -down-48.png">
                                    <?php echo "<p>".$test["Test"]."</p>";?>
                                </div>
                        <?php }
                        }
                    ?>
                </div>
            </div>
            <div class="appointment-con">
                <h2>Make an Appointment</h2>
                <form>
                    <div class="input-con">
                        <label for="date">Date:</label>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="input-con">
                        <label for="time">Time:</label>
                        <input type="time" id="time" name="time" required>
                    </div>
                    <input id="submit-btn" name="submit" type="submit" value="Submit Appointment">
                </form>
        </div>
            
        </main>
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
    </body>
</html>