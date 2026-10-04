<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$roll_no = $_POST['roll_no'];
$email = $_POST['email'];
$course = $_POST['course'];

$sql = "UPDATE students SET 
        name='$name',
        roll_no='$roll_no',
        email='$email',
        course='$course'
        WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Student updated successfully!');
        window.location.href='students.php';
    </script>";
} else {
    echo "Error updating student";
}

if($result) {
    header("Location: students.php");
} else {
    echo "Update Failed!";
}
?>