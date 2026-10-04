<?php
include "db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id=$id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Edit Student</h1>

<form action="update_student.php" method="POST">

    <input type="hidden" name="id" 
           value="<?php echo $row['id']; ?>">

    <label>Name:</label>
    <input type="text" name="name" 
           value="<?php echo $row['name']; ?>" required>

    <br><br>

    <label>Roll No:</label>
    <input type="text" name="roll_no" 
           value="<?php echo $row['roll_no']; ?>" required>

    <br><br>

    <label>Email:</label>
    <input type="email" name="email" 
           value="<?php echo $row['email']; ?>" required>

    <br><br>

    <label>Course:</label>
    <input type="text" name="course" 
           value="<?php echo $row['course']; ?>" required>

    <br><br>

    <input type="submit" value="Update Student">

</form>

<br>

<a href="students.php">Back to Student List</a>
<a href="home.php">Home</a>

</body>
</html>