<?php
include("database.php");
global $conn;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["add_category"])) {
        $id = filter_input(INPUT_POST, "id1", FILTER_SANITIZE_SPECIAL_CHARS);
        $name = filter_input(INPUT_POST, "name1", FILTER_SANITIZE_SPECIAL_CHARS);
        $image = filter_input(INPUT_POST, "image", FILTER_SANITIZE_SPECIAL_CHARS);
        $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_SPECIAL_CHARS);
        $status = filter_input(INPUT_POST, "serves", FILTER_SANITIZE_SPECIAL_CHARS);

        $insert_category_sql = "INSERT INTO `category` (id, title, image_name, featured, active) VALUES ('$id', '$name', '$image', '$description', '$status')";

        if ($conn->query($insert_category_sql) === TRUE) {
            // Redirect back to the admin page
            header("Location: admin1.php");
            exit();
        } else {
            echo "Error: " . $insert_category_sql . "<br>" . $conn->error;
        }
    }elseif (isset($_POST["update_category"])) {
        // Handle updating a category
        $idToUpdate = filter_input(INPUT_POST, "id1", FILTER_SANITIZE_SPECIAL_CHARS);
        $name = filter_input(INPUT_POST, "name1", FILTER_SANITIZE_SPECIAL_CHARS);
        $image = filter_input(INPUT_POST, "image", FILTER_SANITIZE_SPECIAL_CHARS);
        $description = filter_input(INPUT_POST, "description", FILTER_SANITIZE_SPECIAL_CHARS);
        $status = filter_input(INPUT_POST, "serves", FILTER_SANITIZE_SPECIAL_CHARS);

        $update_category_sql = "UPDATE `category` SET title='$name', image_name='$image', featured='$description', active='$status' WHERE id='$idToUpdate'";

        if ($conn->query($update_category_sql) === TRUE) {
            // Update successful
            header("Location: admin1.php"); // Redirect to the admin page
            exit();
        } else {
            echo "Error: " . $update_category_sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST["delete_category"])) {
        // Handle deleting a category
        $idToDelete = filter_input(INPUT_POST, "id1", FILTER_SANITIZE_SPECIAL_CHARS);

        $delete_category_sql = "DELETE FROM `category` WHERE id='$idToDelete'";

        if ($conn->query($delete_category_sql) === TRUE) {
            // Delete successful
            header("Location: admin1.php"); // Redirect to the admin page
            exit();
        } else {
            echo "Error: " . $delete_category_sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
}
?>
