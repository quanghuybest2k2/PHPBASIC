<?php
session_start();

if (!isset($_SESSION['luser'])) {
    echo "Please Login again";
    echo "<a href='./login.php'>Click Here to Login</a>";
} else {
    $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['expire']) {
        session_destroy();
        echo "Your session has expired! <a href='./login.php'>Login here</a>";
    } else { //Starting this else one [else1]
?>
        <!-- From here all HTML coding can be done -->
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Welcome</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z5G5C5skw5/mUoWrFVvBfGJjz3ISq2tMOFPSw2" crossorigin="anonymous">
        </head>

        <body>
            <div class="container">
                <h1>Welcome <?php echo $_SESSION['luser']; ?></h1>
                <p id="session-time">Session expires in: <?php echo date("H:i:s", $_SESSION['expire'] - time()); ?></p>
                <a href="./logout.php" class="btn btn-danger">Log out</a>
            </div>

            <script>
                // Update session time every second
                var sessionTime = <?php echo $_SESSION['expire'] - time(); ?>;
                var countdownInterval = setInterval(function() {
                    sessionTime--;
                    var hours = Math.floor(sessionTime / 3600);
                    var minutes = Math.floor((sessionTime % 3600) / 60);
                    var seconds = sessionTime % 60;

                    document.getElementById("session-time").innerText = "Session expires in: " + hours.toString().padStart(2, '0') + ":" + minutes.toString().padStart(2, '0') + ":" + seconds.toString().padStart(2, '0');

                    // If session time is 0, clear interval
                    if (sessionTime <= 0) {
                        clearInterval(countdownInterval);
                        // Optionally, you can redirect user to login page here
                        // window.location.href = "./login.php";
                    }
                }, 1000);
            </script>

        </body>

        </html>
<?php
    }
}
?>