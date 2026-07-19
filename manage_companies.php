<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM companies");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Companies</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Manage Companies</h2>

<a href="add_company.php">+ Add New Company</a>
<br><br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Company</th>
    <th>Role</th>
    <th>CGPA</th>
    <th>Location</th>
    <th>Salary</th>
    <th>Last Date</th>
    <th>Action</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['company_name']; ?></td>
    <td><?php echo $row['job_role']; ?></td>
    <td><?php echo $row['eligibility_cgpa']; ?></td>
    <td><?php echo $row['location']; ?></td>
    <td><?php echo $row['salary_package']; ?></td>
    <td><?php echo $row['last_date']; ?></td>

    <td>
        <a href="edit_company.php?id=<?php echo $row['id']; ?>">Edit</a> |
        <a href="delete_company.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php
}
?>

</table>

<br>
<a href="admin_dashboard.php">Back to Dashboard</a>

</body>
</html>