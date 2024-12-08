<?php
session_start();
if (isset($_SESSION['admin'])):
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin area</title>
</head>
<body>
    <h2>Add a new menu burguer</h2>
    <p class="lead">No Plugins <b>Just Javascript</b></p>
    <!-- Upload  -->
    <form id="file-upload-form" class="uploader">
    <input id="file-upload" type="file" name="fileUpload" accept="image/*" />

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
        <!-- <progress class="progress" id="file-progress" value="0">
            <span>0</span>%
        </progress> -->
        </div>
    </label>
    </form>
    <script src="script.js" type="text/javascript"></script>
</body>
</html>
<?php
endif;
if (!isset($_SESSION['admin'])):
    header("Location: ../");
endif;
?>