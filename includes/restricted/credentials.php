<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "hamburguers_bd";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

if (!$conn) {
  header("Location: index.php");
} else if ($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
}
?>