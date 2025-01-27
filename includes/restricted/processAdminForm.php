<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db = "hamburguers_bd";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST)) {
  $secret_pass = @$_POST['password'];

  $password = $secret_pass;
  
  $sql = "SELECT admin, password FROM users";
  
  $result = $conn->query($sql);
}

if(isset($password)){
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $password = $row['password'];
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      $_SESSION['admin'] = $row['admin'];
    }

    if (password_verify($password, $hashed_password)) {
      header("Location: ../../menu/index.php?loggedin=true&user=".$_POST['user']);
    } else if (!password_verify($password, $hashed_password)) {
      header("Location: ../../login/index.php?loggedin=false");
    }
  } else {
    echo "0 results";
  }
}

if(isset($_POST['name']) && isset($_POST['your_email']) && isset($_POST['password_employee']) && isset($_POST['customer_no']) && !isset($_POST['login_employee'])) 
{
  $name = $_POST['name'];
  $your_email = $_POST['your_email'];
  $password = $_POST['password_employee'];
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  $customer_no = $_POST['customer_no'];

  $sqlToTest = "SELECT employee_email, password FROM employee WHERE employee_email = '{$email}'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
      // output data of each row
      header("Location: ../../login/index.php?loggedin=false&user_duplicated=true");
    } else {
      $sql = "INSERT INTO employee (name, employee_email, password, actual_customer_id) VALUES ('{$name}', '{$your_email}', '{$hashed_password}', '{$customer_no}')";

      if ($conn->query($sql) === TRUE) {
        header("Location: ../../menu/index.php?loggedin=true&employee=".$name);
        $_SESSION['employee_name'] = $name;
        $_SESSION['customer_no'] = $customer_no;
      } 
      else if ($conn->query($sql) != TRUE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      else {
        header("Location: ../../menu/index.php?loggedin=false");
      }
  }
}

// ONLY here
if (isset($_POST['login_employee'])) 
{
  $secret_pass = @$_POST['password'];
  $customer_no = $_POST['customer_no'];
  $email = $_POST['your_email'];

  $password = $secret_pass;

  $sql = "SELECT employee_email, password, name FROM employee WHERE employee_email = '{$email}'";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
      // output data of each row
        while($row = $result->fetch_assoc()) {
          $password = $row['password'];
          $hashed_password = password_hash($password, PASSWORD_DEFAULT);
          if (password_verify($password, $hashed_password)) {
            $_SESSION['employee_name'] = $row['name'];
            $_SESSION['customer_no'] = $customer_no;
            header("Location: ../../menu/index.php?loggedin=true&employee=".$name);
          } else {
            header("Location: ../../login/index.php?loggedin=false");
          }
        }
    } else {
    echo "0 results";
  }
}

if (!isset($_POST['login_employee']) && isset($_POST['login_admin_restricted_arc'])) {
  
} else {
  $_POST = json_decode(file_get_contents('php://input'), true);
  if (isset($_POST['value']) && $_POST['value'] == "log_off") {
    if (isset($_SESSION['employee_name'])){
      session_destroy();
    }
    $todo = [
      "value"=> 'go'
    ];
    echo json_encode($todo);
  }  
}

?>