<?php include "../includes/db.php"; ?>

<?php
//collectinf data from the form
$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$status = $_POST['status'];

$conn->query("UPDATE tasks SET 
    title='$title',
    description='$description',
    status='$status'
    WHERE id=$id
");
//After updating, goes back to tasklist. Prevents resubmission
header("Location: ../index.php");
?>