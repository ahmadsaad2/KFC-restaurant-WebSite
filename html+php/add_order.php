<?php

include("database.php");
global $conn;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["confirm_b"])) {
        $name = filter_input(INPUT_POST, "namec", FILTER_SANITIZE_SPECIAL_CHARS);
        $address = filter_input(INPUT_POST, "addressc", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "emailc", FILTER_SANITIZE_SPECIAL_CHARS);

        $insert_order_sql = "INSERT INTO `order` (food, price, qty, total, order_date, stauts, customer_name, customer_contact, customer_address)
                             VALUES ('', '', '', '', NOW(), 'Pending', '$name', '', '$address')";

        if ($conn->query($insert_order_sql) === TRUE) {

        } else {
            echo "Error: " . $insert_order_sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();

