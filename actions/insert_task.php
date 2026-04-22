<?php
include "../includes/db.php";

$title = $_POST['title'];
$description = $_POST['description'];

$sql = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";

if($conn->query($sql)) {
    header("Location: ../index.php");
} else {
    echo "Error: " . $conn->error;
}
?>