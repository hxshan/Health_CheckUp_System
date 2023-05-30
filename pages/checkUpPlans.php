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

        <title>Check Up plans</title>
        
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
                <a class="view">View more</a>
            </div>
       <?php } ?>
       </div>
        </main>
        
    </body>
</html>