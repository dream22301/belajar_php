<?php
require 'db2.php';

$id = 1;

$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$stmt->execute(['id' => $id]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    echo $user['email'];
} else {
    echo "nuh uh";
}
?>