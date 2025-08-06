<!DOCTYPE html>
<html>
<head>
    <title>Mission 5 - Cookies</title>
</head>
<body>
    <h2>Mission 5: Cookies</h2>
    <?php
    //check if form send
    if($_SERVER['REQUEST_METHOD']== "POST"){
        $username = $_POST["username"] ?? "";
        $password = $_POST["password"] ?? "";

        if($username ==='ofri' && $password=="ofriIsTheBest"){
            //save cookie for one week
            setcookie("username", $username, time() + 7 *24*60*60);
            $message= 'Login successful.Welcome, '. $username;
        }
        else{
            $message = 'Login failed invalid username or password';
        }
    }
    ?>
    <form method="post" action=''>
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
    <p>
        <?php
        if(isset($message)){
            echo $message;
        }
        //check if user exist- there is cookie
        elseif(isset($_COOKIE["username"])){
            echo "You are already logged in as: " . $_COOKIE["username"];
        }
        else{
            echo "You are not logged in.";
        }
        ?>
    </p>
</body>
</html>