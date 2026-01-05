<?php
require 'db2.php';

$name = "di";

$stmt = $pdo->prepare("
    SELECT * FROM users
    WHERE id = :id OR nama LIKE :name 
"); // sama dengan (=) tidak bisa bekerja dengan persen (%) dan hanya bisa menggunakan LIKE
$stmt->execute([
    'id' => $name,
    'name' => "%$name%"
]);

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($users as $user) {
    echo $user['nama'] . " = " . $user['email'] . "<br>";
}
?>