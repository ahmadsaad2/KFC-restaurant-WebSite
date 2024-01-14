<?php
include("database.php");
global $conn;
// Assuming $_POST["product_id"] and $_POST["count"] are sent in the AJAX request
$product_id = $_POST["product_id"];
$count = $_POST["count"];

// Assuming you have a users table with user_id, you can get the user_id from the session
$user_id = 1; // Replace with the actual user_id

// Insert or update the cart_table
$query = "INSERT INTO cart_table (product_id, count, user_id) VALUES ('$product_id', '$count', '$user_id') 
          ON DUPLICATE KEY UPDATE count = count + VALUES(count)";
$result = mysqli_query($conn, $query);

if ($result) {
    $response = ["success" => true];
} else {
    $response = ["success" => false];
}

echo json_encode($response);
?>
<?php
