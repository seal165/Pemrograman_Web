<?php
// Koneksi ke database
include('koneksi.php');

// Pastikan data diterima melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $transportation = $_POST['transportation'];
    $region = $_POST['region'];
    $date = $_POST['date'];
    $name = $_POST['name'];
    $from_location = $_POST['from_location'];
    $to_location = $_POST['to_location'];
    $time = $_POST['time'];

    // Query untuk memasukkan data ke database
    $query = "INSERT INTO tb_schedule (transportation, region, date, name, from_location, to_location, time) 
              VALUES ('$transportation', '$region', '$date', '$name', '$from_location', '$to_location', '$time')";

    if (mysqli_query($koneksi, $query)) {
        // Redirect kembali ke halaman categories setelah berhasil
        header("Location: categories.php");
        exit();
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }
}
?>