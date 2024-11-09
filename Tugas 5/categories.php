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
            <div class="selection-container">
                <div class="dropdown">
                    <h3>Region</h3>
                    <select name="region" id="region">
                        <option value="">Select Region</option>
                        <option value="Banyuwangi">Banyuwangi</option>
                        <option value="Malang">Malang</option>
                        <option value="Probolinggo">Probolinggo</option>
                        <option value="Surabaya">Surabaya</option>
                    </select>
                </div>

                <div class="dropdown">
                    <h3>Transportasi</h3>
                    <select name="transportation" id="transportation">
                        <option value="">Select Transportasi</option>
                        <option value="Kereta Api">Kereta Api</option>
                        <option value="Bus">Bus</option>
                        <option value="KRL">KRL</option>
                        <option value="MRT">MRT</option>
                    </select>
                </div>
            </div>
            
            <button type="button" class="btn btn-tambah" onclick="searchSchedule()">
                Search
            </button>

            <h3>Entry Data</h3>
            <button type="button" class="btn btn-tambah">
                <a href="data-entry.php">Add Data</a>
            </button>
            <table class="table-data" id="dataTable">
                <thead>
                    <tr>
                        <th scope="col" style="width: 15%">Date</th>
                        <th scope="col" style="width: 15%">Name</th>
                        <th scope="col" style="width: 15%">From</th>
                        <th scope="col" style="width: 15%">To</th>
                        <th scope="col" style="width: 15%">Time</th>
                        <th scope="col" style="width: 15%">Action</th>
                    </tr>
                </thead>
                <tbody id="dataBody">
                    <!-- Data baru akan ditambahkan di sini -->
                </tbody>
            </table>
        </div>
    </section>
    <script src="script-cate.js"></script>
</body>
</html>