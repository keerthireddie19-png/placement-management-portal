<?php
session_start();
include "db.php";

if(!isset($_SESSION['email']))
{
    header("Location: login.php");
    exit();
}

$email = $_SESSION['email'];

$sql = "SELECT * FROM students WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Profile</h2>

<table border="1" cellpadding="10">
<tr>
    <th>Full Name</th>
    <td><?php echo $row['fullname']; ?></td>
</tr>

<tr>
    <th>Email</th>
    <td><?php echo $row['email']; ?></td>
</tr>

<tr>
    <th>Roll Number</th>
    <td><?php echo $row['roll_no']; ?></td>
</tr>

<tr>
    <th>Branch</th>
    <td><?php echo $row['branch']; ?></td>
</tr>

<tr>
    <th>CGPA</th>
    <td><?php echo $row['cgpa']; ?></td>
</tr>

<tr>
    <th>Phone</th>
    <td><?php echo $row['phone']; ?></td>
</tr>

</table>

<br>

<a href="dashboard.php">⬅ Back to Dashboard</a>

</body>
</html>