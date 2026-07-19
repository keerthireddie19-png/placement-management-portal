<?php
session_start();
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM companies");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Companies</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Available Companies</h2>

<table border="1" cellpadding="10">
<tr>
    <th>Action</th>
    <th>ID</th>
    <th>Company Name</th>
    <th>Role</th>
    <th>CGPA</th>
    <th>Location</th>
    <th>Salary</th>
    <th>Last Date</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['company_name']; ?></td>
    <td><?php echo $row['job_role']; ?></td>
    <td><?php echo $row['eligibility_cgpa']; ?></td>
    <td><?php echo $row['location']; ?></td>
    <td><?php echo $row['salary_package']; ?></td>
    <td><?php echo $row['last_date']; ?></td>
    <!---Apply Button--->
    <td>
        <a href = "apply.php?company_id=<?php echo $row['id']; ?>">
            <button>Apply</button>
</a>
</td>
</tr>
<?php } ?>

</table>

<br>

<a href="dashboard.php">Back to Dashboard</a>


</body>
</html>