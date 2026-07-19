<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Registered Students</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Roll Number</th>
    <th>Branch</th>
    <th>CGPA</th>
    <th>Phone</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['fullname']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['roll_no']; ?></td>
    <td><?php echo $row['branch']; ?></td>
    <td><?php echo $row['cgpa']; ?></td>
    <td><?php echo $row['phone']; ?></td>
</tr>
<?php
}
?>

</table>

<br>
<a href="admin_dashboard.php">⬅ Back to Admin Dashboard</a>

</body>
</html>