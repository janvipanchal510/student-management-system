<?php
include "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Student deleted successfully!');
        window.location.href='students.php';
    </script>";
} else {
    echo "Error deleting student";
}
?>