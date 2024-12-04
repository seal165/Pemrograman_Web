<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="asset/icon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="navbar">
            <img src="assets/logo.png" class="logo" alt="Logo">
            <nav>
                <ul>
                    <li><a href="index.php"><b>Home</b></a></li>
                    <li><a href="schedule.php"><b>Schedule</b></a></li>
                    <li><a href="login.php"><b>Login</b></a></li>
                </ul>
            </nav>
        </div>
        <main>
            <div class="wrapper">
                <h1>Registrasi</h1>
                <form id="registerForm" action="register-proses.php" method="post">
                    <div class="input-box">
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-box">
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="input-box">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit">Registrasi</button>
                </form>
            </div>
        </main>
    </div>
</body>
</html>