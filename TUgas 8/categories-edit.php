<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit;
}

// Include koneksi ke database
include('koneksi.php');

// Mendapatkan id edit dari URL
$editId = $_GET['edit_id'];

// Query untuk mengambil data yang akan diedit
$queryEdit = "SELECT * FROM tb_schedule WHERE id = '$editId'";
$resultEdit = mysqli_query($koneksi, $queryEdit);
$editData = mysqli_fetch_assoc($resultEdit);

if (isset($_POST['update'])) {
    // Ambil data dari form
    $transportation = $_POST['transportation'];
    $region = $_POST['region'];
    $date = $_POST['date'];
    $name = $_POST['name'];
    $from_location = $_POST['from_location'];
    $to_location = $_POST['to_location'];
    $time = $_POST['time'];

    // Query untuk update data
    $queryUpdate = "UPDATE tb_schedule SET transportation='$transportation', region='$region', date='$date', name='$name', from_location='$from_location', to_location='$to_location', time='$time' WHERE id='$editId'";

    if (mysqli_query($koneksi, $queryUpdate)) {
        header('location:categories.php');
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="form-container">
        <h3>Edit Data</h3>
        <form action="categories-edit.php?edit_id=<?= $editId ?>" method="POST">
            <input type="hidden" name="id" value="<?= $editData['id'] ?>" />
            
            <label for="transportation">Transportation</label>
            <input type="text" name="transportation" value="<?= $editData['transportation'] ?>" required />

            <label for="region">Region</label>
            <input type="text" name="region" value="<?= $editData['region'] ?>" required />

            <label for="date">Date</label>
            <input type="date" name="date" value="<?= $editData['date'] ?>" required />

            <label for="name">Name</label>
            <input type="text" name="name" value="<?= $editData['name'] ?>" required />

            <label for="from_location">From</label>
            <input type="text" name="from_location" value="<?= $editData['from_location'] ?>" required />

            <label for="to_location">To</label>
            <input type="text" name="to_location" value="<?= $editData['to_location'] ?>" required />

            <label for="time">Time</label>
            <input type="time" name="time" value="<?= $editData['time'] ?>" required />

            <button type="submit" name="update" class="btn btn-simpan">Update</button>
        </form>
    </div>
</body>
</html>