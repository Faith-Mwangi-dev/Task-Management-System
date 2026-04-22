<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<h2>My Tasks</h2>

<a href="add_task.php">Add Task</a><br><br>

<?php
$result = $conn->query("SELECT * FROM tasks");

while ($row = $result->fetch_assoc()) {
    echo "<p>";
    echo $row['title'] . " - " . $row['status'];
    echo "</p>";
}
?>

<?php include "includes/footer.php"; ?>