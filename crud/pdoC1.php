<?php
require 'db3.php';

class Database {
    private PDO $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function create_user(string $nama, string $email, string $password):bool {
        $stmt = $this->pdo->prepare("
                INSERT INTO user_data(nama, email, user_password)
                VALUES (:nama, :email, :user_password)
            ");

        return $stmt->execute([
            'nama' => $nama,
            'email' => $email,
            'user_password' => $password,
        ]);
    }
}

?>
