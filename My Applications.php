<?php
session_start();
include "db.php";

$student_id = 1; // Replace with session later

$sql = "SELECT companies.company_name,
               companies.job_role,
               companies.salary_package,
               applications.status
        FROM applications
        JOIN companies
        ON applications.company_id = companies.id
        WHERE applications.student_id = '$student_id'";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Applications</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>My Applications</h2>

<table border="1" cellpadding="10">
<tr>
    <th>Company</th>
    <th>Role</th>
    <th>Salary</th>
    <th>Status</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['company_name']; ?></td>
    <td><?php echo $row['job_role']; ?></td>
    <td><?php echo $row['salary_package']; ?></td>
    <td><?php echo $row['status']; ?></td>
</tr>
<?php
}
?>

</table>

<br>

<a href="dashboard.php">← Back to Dashboard</a>

</body>
</html>