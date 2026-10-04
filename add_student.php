<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $roll_no = $_POST["roll_no"];
    $email = $_POST["email"];
    $course = $_POST["course"];

    $sql = "INSERT INTO students (name, roll_no, email, course)
            VALUES ('$name', '$roll_no', '$email', '$course')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Student added successfully!');
            window.location.href='students.php';
        </script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Add Student</h1>

    <form action="add_student.php" method="POST">

        <label>Student Name:</label><br>
        <input type="text" name="name" placeholder="Enter student name" required>

        <br><br>

        <label>Roll Number:</label><br>
        <input type="text" name="roll_no" placeholder="Enter roll number" required>

        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email" placeholder="Enter email" required>

        <br><br>

        <label>Course:</label><br>
        <input type="text" name="course" placeholder="Enter course" required>

        <br><br>

        <button type="submit">Add Student</button>

    </form>

    <br>

    <a href="index.php">Back to Home</a>

</body>
</html>