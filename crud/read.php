<?php
require 'db.php';

$sql = "SELECT * FROM users";
$result = $connection->query($sql);
?>

<h2>List Users</h2>

<table border="1" cellpading="8">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
    </tr>

    <?php while ($row = $result->fetch_assoc()) : ?>
        <tr>
            <td><?= $row['id']?></td>
            <td><?= $row['nama']?></td>
            <td><?= $row['email']?></td>
        </tr>
    <?php endwhile; ?>

</table>