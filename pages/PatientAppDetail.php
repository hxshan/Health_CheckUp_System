<?php 
session_start();
require_once '../includes/dbh.inc.php';
require_once '../includes/functions.inc.php'; 
$id=$_GET["chkId"];
$chkdata=getCheckUpPlansbyId($conn,$id);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../styles/checkUpPlans.css">

        <title>Appointment Details</title>
        
    </head>

    <body>
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
                                    <img src="../images/sort-down-48.png">
                                    <?php echo "<p>".$test["Test"]."</p>";?>
                                </div>
                        <?php }
         }
                    ?>
    </body>
</html>