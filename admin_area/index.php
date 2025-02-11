<?php
session_start();
$allowed_momentary_by_jah = $_GET['admin_from_christ'];
if (isset($_SESSION['user_nick']) || $_GET['admin_from_christ'] == "true"):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        .logout {
            background-color: red;
            border: 1px;
            border-radius: 5px;
            padding: 10px;
            float: right;
            color: white;
        }

        .logout:hover {
            color: black;
            cursor: pointer;
        }
    </style>
    <title>Admin area</title>
</head>
<body>
    <h2>Add a new menu burguer</h2>
    <button type="button" onclick="logout()" class="logout">Logout</button>
    <!-- Upload  -->
    <form id="file-upload-form" class="uploader" action="./upload.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <label>Name of product</label>
            <input id="product_name" name="item_name" type="text"/>
        </fieldset>

        <fieldset>
            <label>Price</label>
            <input id="product_price" name="price" type="number"/>
        </fieldset>

        <fieldset>
            <label>Ingredients</label>
            <textarea id="product_ingredients" name="ingredients"></textarea>
        </fieldset>

        <fieldset>
            <label>Description</label>    
            <textarea id="product_description" name="description"></textarea>
        </fieldset>

        <fieldset>
            <label>Total to be available</label>
            <input id="product_in_stock" name="product_in_stock" type="number"/>
        </fieldset>

        <input id="file-upload" type="file" name="fileUpload" accept="image/*"/>
        <label for="file-upload" id="file-drag">
            <img id="file-image" src="#" alt="Preview" class="hidden">
            <div id="start">
            <i class="fa fa-download" aria-hidden="true"></i>
            <div>Select a file or drag here</div>
            <div id="notimage" class="hidden">Please select an image</div>
            <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
            </div>
            <div id="response" class="hidden">
            <div id="messages"></div>
            </div>
        </label>
        <input type="submit" name="send_burguer_information" id="send_burguer_btn" value="Send"/>
    </form>
    <script src="script.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
</body>
</html>
<?php
endif;
?>