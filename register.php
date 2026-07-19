<?php
include "db.php";

if(isset($_POST['submit']))
{
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $roll_no = $_POST['roll_no'];
    $branch = $_POST['branch'];
    $cgpa = $_POST['cgpa'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO students(fullname,email,password,roll_no,branch,cgpa,phone)
            VALUES('$fullname','$email','$password','$roll_no','$branch','$cgpa','$phone')";

    if(mysqli_query($conn,$sql))
    {
        echo "<h3>Registration Successful!</h3>";
    }
    else
    {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Student Registration Form</h2>

    <form action="" method="POST">

        Full Name:<br>
        <input type="text" name="fullname" required><br><br>

        Email:<br>
        <input type="email" name="email" required><br><br>

        Password:<br>
        <input type="password" name="password" required><br><br>

        Roll Number:<br>
        <input type="text" name="roll_no" required><br><br>

        Branch:<br>
        <input type="text" name="branch" required><br><br>

        CGPA:<br>
        <input type="number" step="0.01" name="cgpa" required><br><br>

        Phone:<br>
        <input type="text" name="phone" required><br><br>

        <input type="submit" name="submit" value="Register">

    </form>

</body>
</html>