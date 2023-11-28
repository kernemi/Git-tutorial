<?php
// Start the session to access session variables
session_start();

// Check if the user is logged in, redirect to login page if not
if (!isset($_SESSION["logged_in"]) || !$_SESSION["logged_in"]) {
    header("Location: login.php");
    exit();
}

// Display the dashboard content
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome to Your Dashboard</h1>

    <!-- Placeholder content for the dashboard -->
    <div>
        <h2>Recent Activity</h2>
        <ul>
            <li>Logged in on [Date]</li>
            <li>Updated profile information</li>
            <!-- Add more items based on user activity -->
        </ul>
    </div>

    <div>
        <h2>Quick Links</h2>
        <ul>
            <li><a href="profile.php">Edit Profile</a></li>
            <li><a href="tasks.php">View Tasks</a></li>
            <!-- Add more links based on your application features -->
        </ul>
    </div>

    <div>
        <h2>Notifications</h2>
        <p>No new notifications.</p>
    </div>

    <div>
        <h2>Statistics</h2>
        <p>Total tasks: [Number]</p>
        <p>Completed tasks: [Number]</p>
        <!-- Add more statistics based on your application data -->
    </div>

    <div>
        <h2>Logout</h2>
    <p><a href="logout.php">Logout</a></p>
</div>
</body>
</html>
