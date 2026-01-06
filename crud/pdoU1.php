<?php
require 'db2.php';

$id = 1;
$email = "test@gmail.com";

$stmt = $pdo->prepare("
    UPDATE users
    SET email = :email
    WHERE id = :id
");

$stmt->execute([
    'email' => $email,
    'id' => $id
]);

if ($stmt->rowCount()) {
    echo "User Updated";
} else {
    echo "User Not Updated";
}
?>