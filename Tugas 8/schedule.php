<?php
// Include koneksi ke database
include('koneksi.php');

// Ambil data unik untuk dropdown
$regionQuery = "SELECT DISTINCT region FROM tb_schedule";
$regionResult = mysqli_query($koneksi, $regionQuery);

$transportationQuery = "SELECT DISTINCT transportation FROM tb_schedule";
$transportationResult = mysqli_query($koneksi, $transportationQuery);

$fromQuery = "SELECT DISTINCT from_location FROM tb_schedule";
$fromResult = mysqli_query($koneksi, $fromQuery);

$toQuery = "SELECT DISTINCT to_location FROM tb_schedule";
$toResult = mysqli_query($koneksi, $toQuery);

// Ambil filter data dari dropdown (jika ada)
$filterRegion = isset($_GET['region']) ? $_GET['region'] : '';
$filterTransportation = isset($_GET['transportation']) ? $_GET['transportation'] : '';
$filterFrom = isset($_GET['from']) ? $_GET['from'] : '';
$filterTo = isset($_GET['to']) ? $_GET['to'] : '';

// Query untuk menampilkan data dengan filter
$query = "SELECT * FROM tb_schedule WHERE 1=1";
if (!empty($filterRegion)) {
    $query .= " AND region = '$filterRegion'";
}
if (!empty($filterTransportation)) {
    $query .= " AND transportation = '$filterTransportation'";
}
if (!empty($filterFrom)) {
    $query .= " AND from_location = '$filterFrom'";
}
if (!empty($filterTo)) {
    $query .= " AND to_location = '$filterTo'";
}
$result = mysqli_query($koneksi, $query);

// Jika query gagal
if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Schedule</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <img src="assets/logo.png" class="logo">
            <nav>
                <ul>
                    <li><a href="index.php"><b>Home</b></a></li>
                    <li><a href="schedule.php"><b>Schedule</b></a></li>
                    <li><a href="login.php"><b>Login</b></a></li>
                </ul>
            </nav>
        </div>
        <main>
            <div class="home-content">
                <h1>Check Schedule</h1>
                
                <!-- Dropdowns untuk filter -->
                <form method="GET" action="schedule.php">
                    <div class="selection-container">
                        <div class="dropdown">
                            <h3>Region</h3>
                            <select name="region" id="region">
                                <option value="">All Regions</option>
                                <?php while ($row = mysqli_fetch_assoc($regionResult)) : ?>
                                    <option value="<?= $row['region'] ?>" <?= ($filterRegion == $row['region']) ? 'selected' : '' ?>>
                                        <?= $row['region'] ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>
                        </div>

                        <div class="dropdown">
                            <h3>Transportation</h3>
                            <select name="transportation" id="transportation">
                                <option value="">All Transportation</option>
                                <?php while ($row = mysqli_fetch_assoc($transportationResult)) : ?>
                                    <option value="<?= $row['transportation'] ?>" <?= ($filterTransportation == $row['transportation']) ? 'selected' : '' ?>>
                                        <?= $row['transportation'] ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>
                        </div>

                        <div class="dropdown">
                            <h3>From</h3>
                            <select name="from" id="from">
                                <option value="">All From</option>
                                <?php while ($row = mysqli_fetch_assoc($fromResult)) : ?>
                                    <option value="<?= $row['from_location'] ?>" <?= ($filterFrom == $row['from_location']) ? 'selected' : '' ?>>
                                        <?= $row['from_location'] ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>
                        </div>

                        <div class="dropdown">
                            <h3>To</h3>
                            <select name="to" id="to">
                                <option value="">All To</option>
                                <?php while ($row = mysqli_fetch_assoc($toResult)) : ?>
                                    <option value="<?= $row['to_location'] ?>" <?= ($filterTo == $row['to_location']) ? 'selected' : '' ?>>
                                        <?= $row['to_location'] ?>
                                    </option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-tambah">
                        Search
                    </button>
                </form>

                <div class="content-text">
                    <h4>Schedule</h4>
                </div>
                
                <table class="table-data">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Time</th>
                            <th>From</th>
                            <th>To</th>
                        </tr>
                    </thead>
                    <tbody id="scheduleData">
                        <?php
                        // Tampilkan data dari database
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['date'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['time'] . "</td>";
                            echo "<td>" . $row['from_location'] . "</td>";
                            echo "<td>" . $row['to_location'] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>