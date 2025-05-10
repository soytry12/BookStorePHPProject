<?php
require_once 'db_connect.php';

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$id = $_GET['id'];
$sql = "DELETE FROM books WHERE id=$id";
$conn->query($sql);
header("Location: index.php");
exit();

$conn->close();
?>