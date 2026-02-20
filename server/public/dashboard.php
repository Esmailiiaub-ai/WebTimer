<?php
// dashboard.php

// Display current date and time
$date = new DateTime("now", new DateTimeZone('UTC'));
$current_date_time = $date->format('Y-m-d H:i:s');

// Display current user's login
$current_user = 'Esmailiiaub-ai';

// HTML structure for the dashboard
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome to Your Dashboard</h1>
    <p>Current Date and Time (UTC): <?php echo $current_date_time; ?></p>
    <p>Current User's Login: <?php echo $current_user; ?></p>
</body>
</html>
