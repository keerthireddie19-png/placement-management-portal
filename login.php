<?php
include "db.php";

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    $row = mysqli_fetch_assoc($result);

    if($row['password'] == $password)
    {
       session_start();
$_SESSION['email'] = $email;
header("Location: dashboard.php");
exit();
    }
    else
    {
        echo "<script>alert('Wrong Password');</script>";
    }
}
else
{
    echo "<script>alert('Email not found');</script>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Login</h2>

<form method="post">

Email:<br>
<input type="email" name="email" required><br><br>

Password:<br>
<input type="password" name="password" required><br><br>

<input type="submit" name="login" value="Login">

</form>

</body>
</html>