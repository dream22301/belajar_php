<?php
require 'db.php';
$id = 2;
$email = "asek123@gmail.com";

$sql = "UPDATE users SET email = ? WHERE id = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("si", $email, $id);
$stmt->execute();
if ($stmt->affected_rows > 0) {
    echo "user updated";
} else {
    echo "user not updated";
}
?>

