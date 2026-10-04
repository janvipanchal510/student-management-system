<?php
include "db.php";

if(isset($_GET['search']) && $_GET['search'] != "") {

    $search = $_GET['search'];

    $sql = "SELECT * FROM students 
            WHERE name LIKE '%$search%' 
            OR roll_no LIKE '%$search%'";

} else {

    $sql = "SELECT * FROM students";

}

$result = mysqli_query($conn, $sql);
$total = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Student List</h1>
<p>Total Students: <?php echo $total; ?></p>
<a href="index.php">Add New Student</a>

<a href="home.php">Home</a>

<br><br>
<form method="GET">
    <input type="text" name="search" placeholder="Search by Name or Roll No">

    <input type="submit" value="Search">

    <a href="students.php">Clear Search</a>
</form>
<br><br>

<a href="home.php">Home</a>
<a href="students.php">View Students</a>

<br>

<table border="1" cellpadding="10">

    <tr>
        <th>s.no.</th>
        <th>ID</th>
        <th>Name</th>
        <th>Roll No</th>
        <th>Email</th>
        <th>Course</th>
        <th>Action</th>
    </tr>

<?php
if(mysqli_num_rows($result) > 0) {

    $serial = 1;

    while($row = mysqli_fetch_assoc($result)) {
?>

    <tr>
        <td><?php echo $serial; ?></td>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['roll_no']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['course']; ?></td>

        <td>
            <a href="edit_student.php?id=<?php echo $row['id']; ?>">Edit</a>
             <a href="delete_student.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Are you sure you want to delete this student?')">
Delete
</a>
        </td>

        <?php $serial++; ?>
    </tr>

<?php
    }
} else {
?>
    <tr>
        <td colspan="6">No Student Found!</td>
    </tr>
<?php
}
?>

</table>

<br>

<a href="index.php">Back to Home</a>

</bod>
</html>
