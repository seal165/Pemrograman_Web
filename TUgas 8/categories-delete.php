<?php
include('koneksi.php');

if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    $deleteQuery = "DELETE FROM tb_schedule WHERE id = $deleteId";

    if (mysqli_query($koneksi, $deleteQuery)) {
        echo "<script>alert('Data berhasil dihapus!');</script>";
    } else {
        echo "<script>alert('Gagal menghapus data: " . mysqli_error($koneksi) . "');</script>";
    }
}

// Redirect kembali ke halaman categories
echo "<script>window.location.href = 'categories.php';</script>";
?>