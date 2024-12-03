<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="asset/icon.png" />
    <link rel="stylesheet" href="admin.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Entry</title>
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
            <h3>Entry Data</h3>
            <div class="form-login">
                <form id="dataForm">
                    <label for="date">Transportation</label>
                    <input class="input" type="text" name="transportation" id="transportation" placeholder="Transportation" required />
					
					<label for="date">Region</label>
                    <input class="input" type="text" name="region" id="region" placeholder="Region" required />

					<label for="date">Date</label>
                    <input class="input" type="text" name="date" id="date" placeholder="Date, dd/mm/yyyy" required />
                    
                    <label for="name">Name</label>
                    <input class="input" type="text" name="name" id="name" placeholder="Name" required />
                    
                    <label for="from">From</label>
                    <input class="input" type="text" name="from" id="from" placeholder="From" required />
                    
                    <label for="to">To</label>
                    <input class="input" name="to" id="to" placeholder="To" required />
                    
                    <label for="time">Time</label>
                    <input class="input" name="time" id="time" placeholder="Time" required />
                    
                    <button type="submit" class="btn btn-simpan">Simpan</button>
                </form>
            </div>
        </div>
    </section>
	<script src="script-enty.js"></script>
</body>
</html>