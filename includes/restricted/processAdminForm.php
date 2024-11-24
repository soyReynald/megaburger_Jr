<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "hamburguers_bd";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$secret_pass = $_POST['password'];

$password = $secret_pass;
$hashed_password = password_hash($password, PASSWORD_DEFAULT);;

if (password_verify($password, $hashed_password)) {
    header("Location: ../../login/index.php?loggedin=true");
} else {
  header("Location: ../../login/index.php?loggedin=false&user=".$_POST['user']);
}

?>