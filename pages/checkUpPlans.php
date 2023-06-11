<?php 
session_start();
require_once '../includes/dbh.inc.php';
require_once '../includes/functions.inc.php';
if(isset($_SESSION["UserId"])){
  $checkUpInfo=getCheckUpPlans($conn);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale= 1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="../styles/checkUpPlans.css">

        <title>Check Up Plans</title>
        
    </head>

    <body>
        <main>
        <div class="wrapper">
        <?php
        while($row=mysqli_fetch_assoc($checkUpInfo) ) {?>
            <div class="title1">
                <img src="../images/624111.jpg">
                <?php echo "<h2>".$row["Name"]."</h2>" ?>
                <?php echo "<p>".$row["Description"]."</p>";?>
                <?php echo "<a href=\"CheckUpDetail.php?chkId=".$row["Id"]."\""."> View More </a>"?>
            </div>
       <?php } ?>
       </div>
        </main>
        
    </body>
</html>