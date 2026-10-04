<?php
include "db.php";

$sql = "SELECT COUNT(*) AS total FROM students";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
$total_students = $row['total'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
     
    <div class="home-container">

    <h1>Student Management System</h1>

    <p>Welcome to Student Management System</p>

    <p>Total Students: <?php echo $total_students; ?></p>

    <p>
    Current Date and Time:
    <?php echo date("d-m-Y h:i:s A"); ?>
</p>

    <div class="home-buttons">
        <a href="index.php">Add New Student</a>
        <a href="students.php">View Students</a>
    </div>

</div>

</body>
</html>