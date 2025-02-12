<?php 
session_start();
include_once('credentials.php');
ob_start();

if (isset($_POST) && isset($_POST['user']) && isset($_POST['password'])) {
  $_user = @$_POST['user'];
  $secret_pass = @$_POST['password'];

  $password_from_user = $conn->real_escape_string($secret_pass);
  
  $sql = "SELECT user_nick, password FROM users WHERE user_nick = '$_user' AND password = SHA1('$secret_pass')";
  
  $result = $conn->query($sql);

  if(isset($password) && !isset($_GET['v'])) {
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $password = $row['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $_SESSION['admin'] = $row['user_nick'];
      }

      if (password_verify($password, $hashed_password)) {
        header("Location: /megaburguer/menu/index.php?loggedin=true");
      } else {
        header("Location: ../../login/index.php?loggedin=false");
      }
    } else {
      echo "0 results";
      header("Location: ../../login/index.php?loggedin=false");
    }
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
if (isset($_POST['login_employee']) && !isset($_GET['v'])) 
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

$data = json_decode(trim(file_get_contents("php://input")));
if (isset($data) && $data->value == "log_off") { 
  
  if (isset($data->value) && $data->value == "log_off") {
    if (isset($_SESSION['employee_name'])){
      session_destroy();
    }
    $todo = [
      "value"=> 'go'
    ];
    session_destroy();
    header("Location: ./processAdminForm.php?v=".$todo['value']);
  }  
} else if ((!isset($_GET) && !$_GET['loggedin']) || (isset($_GET['go']) && @$_GET['go'] == "off")) { 
  header("Location: /megaburguer/login/index.php?loggedin=false");
}

?>
