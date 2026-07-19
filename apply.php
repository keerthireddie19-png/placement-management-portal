<?php
session_start();
include "db.php";

$student_id = 1; // Replace with session later
$company_id = $_GET['company_id'];

$sql = "INSERT INTO applications(student_id, company_id)
VALUES('$student_id','$company_id')";

if(mysqli_query($conn, $sql))
{
    echo "<script>
    alert('Application Submitted Successfully');
    window.location='companies.php';
    </script>";
}
else
{
    echo mysqli_error($conn);
}
?>