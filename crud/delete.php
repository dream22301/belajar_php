<?php
require 'db.php';

$id = 3;

$sql = "DELETE from users WHERE id = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "users deleted";
} else {
    echo "users not deleted";
}
?>