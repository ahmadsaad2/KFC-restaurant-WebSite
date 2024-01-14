<?php
global $conn;
include("database.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["add_food"])) {
        // Handle adding a new food item
        $name = filter_input(INPUT_POST, "name2", FILTER_SANITIZE_SPECIAL_CHARS);
        $description = filter_input(INPUT_POST, "desciption2", FILTER_SANITIZE_SPECIAL_CHARS); // Corrected the field name
        $price = filter_input(INPUT_POST, "price2", FILTER_SANITIZE_SPECIAL_CHARS);
        $image = filter_input(INPUT_POST, "image2", FILTER_SANITIZE_SPECIAL_CHARS);
        $category_id = filter_input(INPUT_POST, "category_id2", FILTER_SANITIZE_SPECIAL_CHARS);
        $featured = filter_input(INPUT_POST, "featured2", FILTER_SANITIZE_SPECIAL_CHARS);

        $insert_food_sql = "INSERT INTO `food` (title, description, price, image_name, category_id, featured) VALUES ('$name', '$description', '$price', '$image', '$category_id', '$featured')";

        if ($conn->query($insert_food_sql) === TRUE) {
            // Food item added successfully
            header("Location: admin1.php"); // Redirect to the admin page
            exit();
        } else {
            echo "Error: " . $insert_food_sql . "<br>" . $conn->error;
        }}
    elseif (isset($_POST["update_food"])) {
        // Handle updating a food item
        $idToUpdate = filter_input(INPUT_POST, "id2", FILTER_SANITIZE_SPECIAL_CHARS);
        $name = filter_input(INPUT_POST, "name2", FILTER_SANITIZE_SPECIAL_CHARS);
        $description = filter_input(INPUT_POST, "v/nv2", FILTER_SANITIZE_SPECIAL_CHARS); // Corrected the field name
        $price = filter_input(INPUT_POST, "price2", FILTER_SANITIZE_SPECIAL_CHARS);
        $image = filter_input(INPUT_POST, "image2", FILTER_SANITIZE_SPECIAL_CHARS);
        $category_id = filter_input(INPUT_POST, "category_id", FILTER_SANITIZE_SPECIAL_CHARS);
        $featured = filter_input(INPUT_POST, "featured", FILTER_SANITIZE_SPECIAL_CHARS);
        $active = filter_input(INPUT_POST, "active", FILTER_SANITIZE_SPECIAL_CHARS);

        $update_food_sql = "UPDATE `food` SET title='$name', description='$description', price='$price', image_name='$image', category_id='$category_id', featured='$featured', active='$active' WHERE id='$idToUpdate'";

        if ($conn->query($update_food_sql) === TRUE) {
            // Food item updated successfully
            header("Location: admin1.php"); // Redirect to the admin page
            exit();
        } else {
            echo "Error: " . $update_food_sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST["delete_food"])) {
        // Handle deleting a food item
        $idToDelete = filter_input(INPUT_POST, "id2", FILTER_SANITIZE_SPECIAL_CHARS);

        $delete_food_sql = "DELETE FROM `food` WHERE id='$idToDelete'";

        if ($conn->query($delete_food_sql) === TRUE) {
            // Food item deleted successfully
            header("Location: admin1.php"); // Redirect to the admin page
            exit();
        } else {
            echo "Error: " . $delete_food_sql . "<br>" . $conn->error;
        }
    }
    $conn->close();
}


?>
