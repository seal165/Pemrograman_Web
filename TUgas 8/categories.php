<?php
// Include koneksi ke database
include('koneksi.php');

// Ambil data untuk dropdown Region dan Transportation
$regionsQuery = "SELECT DISTINCT region FROM tb_schedule";
$regionsResult = mysqli_query($koneksi, $regionsQuery);

$transportationQuery = "SELECT DISTINCT transportation FROM tb_schedule";
$transportationResult = mysqli_query($koneksi, $transportationQuery);

// Ambil data filter dari dropdown (jika ada)
$filterRegion = isset($_GET['region']) ? $_GET['region'] : '';
$filterTransportation = isset($_GET['transportation']) ? $_GET['transportation'] : '';

// Query untuk menampilkan data dengan filter
$query = "SELECT * FROM tb_schedule WHERE 1=1";
if (!empty($filterRegion)) {
    $query .= " AND region = '$filterRegion'";
}
if (!empty($filterTransportation)) {
    $query .= " AND transportation = '$filterTransportation'";
}
$result = mysqli_query($koneksi, $query);

// Jika query gagal
if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="asset/icon.png" />
    <link rel="stylesheet" href="admin.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bx-category"></i>
            <span class="logo_name">Logo</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin.php" class="active">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="categories.php">
                    <i class="bx bx-box"></i>
                    <span class="links_name">Categories</span>
                </a>
            </li>
            <li>
                <a href="login.php">
                    <i class="bx bx-log-out"></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
            </div>
        </nav>
        <div class="home-content">
            <form method="GET" action="categories.php">
                <div class="selection-container">
                    <div class="dropdown">
                        <h3>Region</h3>
                        <select name="region" id="region">
                            <option value="">Regions</option>
                            <?php while ($row = mysqli_fetch_assoc($regionsResult)) : ?>
                                <option value="<?= $row['region'] ?>" <?= ($filterRegion == $row['region']) ? 'selected' : '' ?>>
                                    <?= $row['region'] ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>

                    <div class="dropdown">
                        <h3>Transportation</h3>
                        <select name="transportation" id="transportation">
                            <option value="">Transportation</option>
                            <?php while ($row = mysqli_fetch_assoc($transportationResult)) : ?>
                                <option value="<?= $row['transportation'] ?>" <?= ($filterTransportation == $row['transportation']) ? 'selected' : '' ?>>
                                    <?= $row['transportation'] ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-filter">Search</button>
            </form>

            <h3>Data Entries</h3>
            <button type="button" class="btn btn-tambah">
                <a href="data-entry.php">Add Data</a>
            </button>
            <table class="table-data" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Transportation</th>
                        <th scope="col">Region</th>
                        <th scope="col">Date</th>
                        <th scope="col">Name</th>
                        <th scope="col">From</th>
                        <th scope="col">To</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Tampilkan data dari database
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['transportation'] . "</td>";
                        echo "<td>" . $row['region'] . "</td>";
                        echo "<td>" . $row['date'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['from_location'] . "</td>";
                        echo "<td>" . $row['to_location'] . "</td>";
                        echo "<td>" . $row['time'] . "</td>";
                        echo "<td>
                                <a href='categories-edit.php?edit_id=" . $row['id'] . "'><button>Edit</button></a>
                                <a href='categories-delete.php?delete_id=" . $row['id'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'><button>Delete</button></a>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <button type="button" class="btn btn-cetak">
				<a href="schedule-cetak.php">Cetak</a>
			</button>
        </div>
    </section>
    <script src="script-cate.js"></script>
</body>
</html>