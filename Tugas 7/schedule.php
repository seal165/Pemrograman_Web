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
                
                <!-- Dropdowns for selection and search button -->
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

                    <div class="dropdown">
                        <h3>From</h3>
                        <select name="from" id="from">
                            <option value="">Select From</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>

                    <div class="dropdown">
                        <h3>To</h3>
                        <select name="to" id="to">
                            <option value="">Select To</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                </div>
                
                <button type="button" class="btn btn-tambah" onclick="searchSchedule()">
                    Search
                </button>

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
                        <!-- Schedule data will be dynamically populated here -->
                    </tbody>
                </table>
            </div>
        </main>
    </div>

    <script src="script-sche.js"></script>
</body>
</html>