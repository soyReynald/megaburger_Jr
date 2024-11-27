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

$sql = "SELECT * FROM to_menu";

$result = $conn->query($sql);
$_SESSION['employee_name'];

?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Menu to employees</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<buton type="button" onclick="logout()" class="logout">Logout</button>
	<section class="ftco-section">
		
		<div class="container">	
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Welcome <?php @$_SESSION['employee_name']; ?></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h4 class="text-center mb-4">Choose what the customer wants / Selecciona lo que el cliente desea</h4>
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>Item ID</th>
					        <th>Name of Item</th>
							<th>Price</th>
							<th>Total available</th>
					      </tr>
					    </thead>
					    <tbody>
						<?php
							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									echo "
									<tr>
										<th scope='row' class='scope'>{$row['id_item']}</th>
										<td>{$row['name_of_item']}</td>
										<td>{$row['price']}</td>
										<td>{$row['total_available']}</td>
										<td><a href='#' class='btn btn-primary'>Select</a></td>
									</tr>	
									";

								}
							} else {
								echo "0 results";
							}
					      
						?>
					    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		async function logout() {
			const logout = {
				"value": "off"
			}

			let params = {
				"method": "POST",
				"headers": {
					"Content-Type": "application/json; charset=utf-8"
				},
				"body": JSON.stringify(logout)
			}
			
			await fetch("../includes/processAdminForm.php", params);
		}
	</script>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

