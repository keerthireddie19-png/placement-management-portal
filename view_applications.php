<?php
include "db.php";

$sql = "SELECT
applications.id,
students.fullname,
students.roll_no,
companies.company_name,
companies.job_role,
applications.application_date,
applications.status

FROM applications

JOIN students
ON applications.student_id = students.id

JOIN companies
ON applications.company_id = companies.id";

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Applications</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Applications</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Student Name</th>
    <th>Roll No</th>
    <th>Company</th>
    <th>Role</th>
    <th>Applied On</th>
    <th>Status</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['fullname']; ?></td>
    <td><?php echo $row['roll_no']; ?></td>
    <td><?php echo $row['company_name']; ?></td>
    <td><?php echo $row['job_role']; ?></td>
    <td><?php echo $row['application_date']; ?></td>
    <td><?php echo $row['status']; ?></td>
</tr>
<?php
}
?>

</table>

<br><br>

<a href="admin_dashboard.php">Back to Admin Dashboard</a>

</body>
</html>