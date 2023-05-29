<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/appoint.css">
    <title>Make Appointment</title>
</head>
<body>
    <main>
        <h1>Make Appointment</h1>
        <div class="title1">
            <img src="../images/624111.jpg" width="200px">
            <h2>Shaheed wajee</h2>
            <p>Has booked an appointment with our new doctor for testing purposes</p>
            <button class="view">View more</button>
        </div>
        <form>
            <label for="date">Enter date for Appointment:</label>
            <input type="text" id="date" placeholder="mm/dd/yyyy">
</form>
        <a href="../includes/index.php">Home</a>
    </main>
    
</body>
</html>