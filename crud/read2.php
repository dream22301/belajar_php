<?php
require 'db.php';
?>

<form method="GET">
    <h1 style="text-align: center;">test</h1>
    <input type="number" name="id" required>
    <button type="submit">Cari in dong</button>
</form>

<?php
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = $id";
    $hasil = $connection->query($sql);

    if ($hasil->num_rows > 0) {
        $user = $hasil->fetch_assoc();

        echo "<h1>Hasil:</h1>";
        echo "ID:" . $user['id'] . "<br>";
        echo "Nama:" . $user['nama'] . "<br>";
        echo "Email:" . $user['email'] . "<br>";
    } else {
        echo "User gak ketemu e ?";
    }
}
?>