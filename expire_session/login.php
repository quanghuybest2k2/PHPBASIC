<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z5G5C5skw5/mUoWrFVvBfGJjz3ISq2tMOFPSw2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <form name="form1" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="text">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="pwd">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Sign In</button>
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $v1 = "huy";
    $v2 = "huy";
    $v3 = $_POST['text'];
    $v4 = $_POST['pwd'];
    if ($v1 == $v3 && $v2 == $v4) {
        $_SESSION['luser'] = $v1;
        $_SESSION['start'] = time(); // Taking now logged in time.
        // Ending a session in 1 minutes from the starting time.
        $_SESSION['expire'] = $_SESSION['start'] + (1 * 60);
        header('Location: index.php');
    } else {
        echo "Please enter the username or password again!";
    }
}
?>