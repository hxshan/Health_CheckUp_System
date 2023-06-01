<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/Dashboard.css">
    <link rel="stylesheet" href="../styles/DashboardIncludes.css">
   
    <title>Dashboard</title>
</head>
<body>
    <main>
    <?php
        include_once "../includes/Head-sidebar.inc.php";
    ?>
    <div class="content-container">
        <h1>Upcoming</h1>   
        <a href="../includes/logout.inc.php">Logout</a>

    </div>
    </main>
    
</body>
</html>