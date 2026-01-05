<?php
require 'db2.php';

$name = "b";

$stmt = $pdo->prepare("SELECT * FROM users WHERE nama LIKE :name");
$stmt->execute([
    'name' => "%$name%"
]);

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
    echo $user['nama'] . " = " . $user['email'] . "<br>";
}
?>