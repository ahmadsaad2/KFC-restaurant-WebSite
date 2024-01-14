<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In-KFC</title>
    <link rel="icon" type="image/x-icon" href="../image/icon.png" />
    <link rel="stylesheet" href="../css/signup.css">
</head>

<body>
<nav>
    <h2 id="webName">
        <img src="../image/icon.png" alt="Logo">
        <a href="../html+php/mainpage.php">KFC</a>
    </h2>
</nav>

<div id="signup_div">
    <div id="red_lines">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <div id="sub_div">
        <form id="signin_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h2>Log In To KFC</h2>
            <label>Username</label>
            <input id="username" name="username" type="text" placeholder="username" />
            <p id="wrong_email"></p>
            <label>Password</label>
            <input id="password" name="password" type="password" placeholder="Password" />

            <p id="small_font">
                By logging in or proceeding as a guest, you agree
                to our <span>Privacy Policy</span> and <span>Terms of Use</span>.
            <p id="login_successful"></p>
            <input type="submit" value="log in" />
            <p>Don't have an account? <a href="signup.php">Join Now</a></p>

        </form>
    </div>
</div>
</body>

<?php
session_start();

global $conn;
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    $check_user_sql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = $conn->query($check_user_sql);

    if ($result->num_rows == 1) {
        $user_data = $result->fetch_assoc();
        $user_type = $user_data['type'];

        if ($user_type === 'admin') {
            header("Location: admin1.php"); // Redirect to the admin page
            exit();
        } else {

            header("Location: mainpage.php"); // Redirect to the main page
            exit();
        }
    } else {
        echo "Incorrect password or username";
    }
}

$conn->close();
?>

