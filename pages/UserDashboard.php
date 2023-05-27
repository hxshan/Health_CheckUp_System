<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/DashboardIncludes.css">
    <title>Dashboard</title>
</head>
<body>
    <?php
        include "../includes/loggedHeader.php";
        
    ?>
    <main>
        <h1>Dashboard works!</h1>
        <a href="../includes/logout.inc.php">Logout</a>
    </main>
    
</body>
</html>