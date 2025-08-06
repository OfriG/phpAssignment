<!DOCTYPE html>
<html>

<head>
    <title>Mission 12 - Session Login</title>
</head>

<body>
    <h2 style="direction: ltr;">Mission 12: Session Login</h2>
    <?php
    session_start();

    //instead of get this info from db
    $validUserName = 'ofri';
    $validPassword = 'theBest';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        //check if the details correct
        if ($userName === $validUserName && $password === $validPassword) {
            $_SESSION['userName'] = $userName;
            echo 'Login successfully';
        } else {
            echo 'invalid password';
        }
    }
    ?>

    <form method="post" action="" style="direction: ltr;">
        userName:<input type="text" name="userName" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>

</html>