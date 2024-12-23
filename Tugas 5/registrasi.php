<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="icon" href="asset/icon.png" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
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
            <div class="wrapper">
                <form id="registerForm">
                    <h1>Register</h1>
                    <div class="input-box">
                        <input type="text" id="username" placeholder="Username or Email" required>
                    </div>
                    <div class="input-box">
                        <input type="password" id="password" placeholder="New Password" required>
                    </div>
                    <div class="input-box">
                        <input type="password" id="confirmPassword" placeholder="Confirm Password" required>
                    </div>
                    <button type="submit" class="btn">Registrasi</button>
                </form>
            </div>
        </main>
    </div>
    
    <div id="snackbar">Registrasi berhasil!</div>
    <script src="script-regis.js"></script>
</body>
</html>