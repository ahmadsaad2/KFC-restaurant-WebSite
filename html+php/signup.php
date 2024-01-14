<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up-KFC</title>
  <link rel="icon" type="image/x-icon" href="../image/icon.png" />
  <link rel="stylesheet" href="../css/signup.css">

</head>

<body>
<nav>
  <h2 id="webName">
    <img src="../image/icon.png" alt="Logo">
    <a href="mainpage.html">KFC</a>
  </h2>
</nav>


<div id="signup_div">
  <div id="red_lines">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </div>
  <div id="sub_div">


    <form id="signup_form" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
      <h2>CREATE AN ACCOUNT</h2>

      <label>Full Name</label>
      <input id="fullname"  name="fullname" required type="text" placeholder="full name" />

      <label>User Name</label>
      <input id="user_name" name="username" type="text" placeholder="User Name" />


      <label>Password</label>
      <input id="password" type="text" name="password" placeholder="Password" />

      <ul >
        <li><input  type="checkbox"/>agree to our Privacy Policy and Terms of Use.</li>
        <li><input type="checkbox"/> Sign up for Email updates and Promotions.</li>
      </ul>
      <p id="signup_successful"></p>
      <input type="submit" value="Sign Up" />
      <p id="alre">Already a member? <a href="signin.php">Log In</a></p>
    </form>
  </div>
</div>
</body>
</html>

<?php

global $conn;
require 'database.php';

$firstname = filter_input(INPUT_POST, "fullname", FILTER_SANITIZE_SPECIAL_CHARS);
$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

if (!empty($firstname) && !empty($password)) {
    $check_username_sql = "SELECT * FROM `users` WHERE full_name = '$firstname'";
    $result = $conn->query($check_username_sql);

    if ($result->num_rows > 0) {
        // Email already exists, handle accordingly
        echo "Error: name already exists";
    } else {
        // Email doesn't exist, proceed with the insertion
        $insert_sql = "INSERT INTO `users` (full_name, username, password) VALUES ('$firstname','$username','$password')";

        if ($conn->query($insert_sql) === TRUE) {
            echo "Success";
            header("Location:signin.php");
        } else {
            echo "Error: " . $insert_sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
