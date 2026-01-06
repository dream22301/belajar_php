<?php
require 'db2.php';

$id = 1;

$stmt = $pdo->prepare("
    DELETE from users
    WHERE id = :id
");

$stmt->execute([
    'id' => $id
]);

if ($stmt->rowCount()) {
    echo "User have been Deleted";
} else {
    echo "User not deleted";
}
?>