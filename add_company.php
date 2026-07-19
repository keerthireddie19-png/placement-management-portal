<?php
include "db.php";

if(isset($_POST['add']))
{
    $company = $_POST['company_name'];
    $role = $_POST['job_role'];
    $cgpa = $_POST['eligibility_cgpa'];
    $location = $_POST['location'];
    $salary = $_POST['salary_package'];
    $lastdate = $_POST['last_date'];

    $sql = "INSERT INTO companies
    (company_name, job_role, eligibility_cgpa, location, salary_package, last_date)
    VALUES
    ('$company', '$role', '$cgpa', '$location', '$salary', '$lastdate')";

    if(mysqli_query($conn, $sql))
    {
        echo "<script>
        alert('Company Added Successfully');
        window.location='manage_companies.php';
        </script>";
    }
    else
    {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Company</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>

<h2>Add Company</h2>

<form method="post">

Company Name:<br>
<input type="text" name="company_name" required><br><br>

Job Role:<br>
<input type="text" name="job_role" required><br><br>

Minimum CGPA:<br>
<input type="number" step="0.01" name="eligibility_cgpa" required><br><br>

Location:<br>
<input type="text" name="location" required><br><br>

Salary Package:<br>
<input type="text" name="salary_package" required><br><br>

Last Date:<br>
<input type="date" name="last_date" required><br><br>

<input type="submit" name="add" value="Add Company">

</form>

<br>

<a href="manage_companies.php">Back</a>

</body>
</html>