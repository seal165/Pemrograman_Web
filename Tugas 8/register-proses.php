<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? null;
    $username = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;

    if ($email && $username && $password) {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO tb_admin (email, username, password) VALUES (?, ?, ?)";
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("sss", $email, $username, $hashedPassword);

        if ($stmt->execute()) {
            echo "Registrasi berhasil!";
        } else {
            echo "Gagal registrasi: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Semua data harus diisi!";
    }
}

$koneksi->close();
?>