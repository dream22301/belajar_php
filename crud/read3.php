<?php
require 'db.php';
?>

<form method="GET">
    <h1>Cari Menggunakan Nama:</h1>
    <input type="text" name="key" required>
    <button type="submit">Let's go mencari</button>
</form>

<?php
if (isset($_GET['key'])) {
    $kata = $connection->real_escape_string($_GET['key']);

    $sql = "SELECT * FROM users WHERE nama LIKE '%$kata%'";
    $hasil = $connection->query($sql);

    if ($hasil->num_rows > 0) {
        echo "<h1>Hasil Dari pencarian</h1>";

        while ($row = $hasil->fetch_assoc()) {
            echo "ID: {$row['id']}<br>";
            echo "Nama: {$row['nama']}<br>";
            echo "Email: {$row['email']}<br>";
        }
    } else {
        echo "Tidak Ketemu e :(";
    }
}
?>