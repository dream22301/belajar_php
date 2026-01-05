<?php
require 'db.php';

if (isset($_POST['kumpulkan'])) {
    $nama = $connection->real_escape_string($_POST['nama']);
    $email = $connection->real_escape_string($_POST['email']);

    $sql = "INSERT INTO users(nama, email) VALUES ('$nama', '$email')";

    if ($connection->query($sql)) {
        echo "Wow bisa masuk database<br>";
    } else {
        echo "Tidak Masuk Database error ini" . $connection->error;
    }
}
?>

<form method="POST">
    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <button type="submit" name="kumpulkan">Tambahkan User</button>
</form>