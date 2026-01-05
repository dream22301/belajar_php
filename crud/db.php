<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "belajar_php";

$connection = new mysqli($host, $user, $pass, $db);

if ($connection->connect_error) {
    die("Koneksi gagal: " . $connection->connect_error);
}
?>