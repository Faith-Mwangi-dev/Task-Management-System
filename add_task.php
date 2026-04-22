<?php "includes/header.php"; ?>
<h2> Add Tasks </h2>

<form action ="actions/insert_task.php" method = "POST">
    <input type = "text", name="title", placeholder="Task" required><br>
    <textarea name = "description", placeholder="Describe your task"></textarea><br>
    <button type = "submit"> Add Task</button>
</form>
<?php "includes/footer.php"; ?>