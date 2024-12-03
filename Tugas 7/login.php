<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel="icon" href="asset/icon.png" />
  <link rel="stylesheet" href="style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

</head>
<body>
    <div id="cookieConsent">
      This site uses cookies to improve your experience. Do you accept?
      <button id="acceptBtn">Accept</button>
      <button id="declineBtn">Decline</button>
    </div>

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
            <form action="login-proses.php" method="post">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="input-box">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="forgot-password">
                    <a href="#">Forgot password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <br>
                <div class="registrasi-link">
                    <p>Don't have any account? <a href="registrasi.php">Regist here!</a></p>
                </div>
            </form>
            </div>
        </main>
    </div>
    <script src="script-login.js"></script>
</body>
</html>