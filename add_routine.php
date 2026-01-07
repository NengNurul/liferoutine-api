<?php
include 'config.php';

$title = $_POST['title'];
$category = $_POST['category'];
$note = $_POST['note'];

$conn->query("INSERT INTO routines (title, category, note)
VALUES ('$title', '$category', '$note')");

echo json_encode(["status" => "success"]);
?>
