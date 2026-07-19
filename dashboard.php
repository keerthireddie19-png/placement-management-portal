<?php
session_start();

if(!isset($_SESSION['email'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome to Student Dashboard</h1>
    <p>Login Successful!</p>
</body>
</html>
<a href = "profile.php">
    <button>My Profile</button>
</a>
<a href="companies.php">
    <button>View Companies</button>
</a>
<a href = "applications.php">
    <button>My Applications</button>
</a>
<a href = "logout.php">
    <button>Logout</button></a>