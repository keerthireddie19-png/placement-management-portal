<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Welcome Admin</h1>

<br>

<a href="view_students.php">
    <button>View Students</button>
</a>

<br><br>

<a href="manage_companies.php">
    <button>Manage Companies</button>
</a>

<br><br>

<a href="view_applications.php">
    <button>View Applications</button>
</a>

<br><br>

<a href="add_company.php">
    <button>Add Company</button>
</a>

<br><br>

<a href="logout.php">
    <button>Logout</button>
</a>

</body>
</html>
<a href = "view_students.php">
    <button>View Students</button>
</a>
<a href = "manage_companies.php">Manage Companies</a>
<a href = "view_applications.php">View Applications</a>
<br><br>
<a href = "logout.php"></a>