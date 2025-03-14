<?php
require_once("../includes/restricted/credentials.php");

if (isset($_POST["send_burguer_information"])) {
    $target_dir = "products_img/";
    $target_dir = $target_dir . basename( $_FILES["fileUpload"]["name"]);
    $uploadOk = 1;
    
    if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_dir)) {
        echo "The file ". basename( $_FILES["fileUpload"]["name"]). " has been uploaded.";

        $name = $_POST['item_name'];
        $price = $_POST['price'];
        $total_available = $_POST['product_in_stock'];
        $image_location = $target_dir;
        $description = $_POST['description'];
        $ingredients = $_POST['ingredients'];


        $sql_query = "INSERT INTO to_menu (id_item, name_of_item, price, total_available, img_product, description, ingredients) 
        VALUES 
        (NULL, '$name', '$price', '$total_available', '$image_location', '$description', '$ingredients')";

        if ($conn->query($sql_query) === TRUE) {
            define('ROOT', 'http://localhost/megaburguer/admin_area/');
            header('Location: '. ROOT . '\?admin_from_christ=true'); 
        } else {
            echo "Error: " . $sql_query . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>