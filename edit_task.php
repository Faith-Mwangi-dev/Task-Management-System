<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<?php
$id = $_GET['id']; // Reads from URL
$result = $conn->query("SELECT * FROM tasks WHERE id = $id"); //Runs an sql query on database
$row = $result->fetch_assoc(); //Fetches one row and returns it as an associative array
?>

<h2>Edit Task</h2>

<form action="actions/update_task.php" method="POST"> // Sends data to update_task.php
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">// sends input again via post

    <label>Title:</label><br>
    <input type="text" name="title" value="<?php echo $row['title']; ?>"><br><br>//Input is pre-filled

    <label>Description:</label><br>
    <textarea name="description"><?php echo $row['description']; ?></textarea><br><br>//Input is pre-filled

    <label>Status:</label><br>
    <select name="status">
        <option value="pending" <?php if($row['status']=='pending') echo 'selected'; ?>>Pending</option>
        <option value="completed" <?php if($row['status']=='completed') echo 'selected'; ?>>Completed</option>
    </select><br><br>

    <button type="submit">Update Task</button>
</form>

<?php include "includes/footer.php"; ?>