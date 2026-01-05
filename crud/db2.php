<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "belajar_php";

$pdo = new PDO(
    "mysql:host=$host;dbname=$db;charset=utf8",
    $user,
    $pass,
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
    );
?>