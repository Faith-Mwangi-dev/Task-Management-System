<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<h2>My Tasks</h2>

<a href="add_task.php">Add Task</a><br><br>

<?php
$result = $conn->query("SELECT * FROM tasks");

/* Loop through each record (task) from the database result */
while ($row = $result->fetch_assoc()) {

   $class = $row['status'] == 'completed' ? 'completed' : '';
   $statusClass = $row['status'] == 'completed' ? 'status completed' : 'status pending';

   echo "<div class='task $class'>";

   echo "<div class='task-header'>";
   echo "<div class='title'>" . $row['title'] . "</div>";
   echo "<span class='$statusClass'>" . $row['status'] . "</span>";
   echo "</div>";

   echo "<p>" . $row['description'] . "</p>";

   echo "<a class='delete-btn' href='actions/delete_task.php?id=".$row['id']."'>Delete</a>";
   echo "<a class='edit-btn' href= 'edit_task.php?id=".$row['id']."'>Edit</a>";
   
   echo "</div>";

   
}
?>

<?php include "includes/footer.php"; ?>