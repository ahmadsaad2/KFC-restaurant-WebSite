<?php
global $conn;
include("database.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["add_user"])) {
        // Handle adding a new user
        $full_name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $type = filter_input(INPUT_POST, "type", FILTER_SANITIZE_SPECIAL_CHARS);

        $insert_user_sql = "INSERT INTO `users` (full_name, username, password, type) VALUES ('$full_name', '$username', '$password', '$type')";

        if ($conn->query($insert_user_sql) === TRUE) {
            // User added successfully
            header("Location: admin1.php"); // Redirect to the admin page
            exit();
        } else {
            echo "Error: " . $insert_user_sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST["update_user"])) {
        // Handle updating a user
        $idToUpdate = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
        $idToUpdate = ($idToUpdate !== false && $idToUpdate > 0) ? $idToUpdate : null;
        $full_name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $type = filter_input(INPUT_POST, "type", FILTER_SANITIZE_SPECIAL_CHARS);

        // Check if ID is not empty and valid
        if ($idToUpdate !== null) {
            $update_user_sql = "UPDATE `users` SET full_name='$full_name', username='$username', password='$password', type='$type' WHERE id='$idToUpdate'";

            if ($conn->query($update_user_sql) === TRUE) {
                // User updated successfully
                header("Location: admin1.php"); // Redirect to the admin page
                exit();
            } else {
                echo "Error: " . $update_user_sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error: Invalid or empty ID.";
        }
    } elseif (isset($_POST["delete_user"])) {
        // Handle deleting a user
        $idToDelete = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
        $idToDelete = ($idToDelete !== false && $idToDelete > 0) ? $idToDelete : null;

        // Check if ID is not empty and valid
        if ($idToDelete !== null) {
            $delete_user_sql = "DELETE FROM `users` WHERE id='$idToDelete'";

            if ($conn->query($delete_user_sql) === TRUE) {
                // User deleted successfully
                header("Location: admin1.php"); // Redirect to the admin page
                exit();
            } else {
                echo "Error: " . $delete_user_sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error: Invalid or empty ID.";
        }
    }
    $conn->close();
}
?>
