<?php
define('ROOT', 'C:\xampp\htdocs\megaburguer');
require(ROOT . '\includes\restricted\processAdminForm.php');

$sql = "SELECT * FROM to_menu";

$result = $conn->query($sql);

if (isset($_SESSION['employee_name']) !== null) 
{
	@$_SESSION['employee_name'];
} else {
	header("Location: ../index.php");
}

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
	<section class="ftco-section">
	<button type="button" onclick="logout()" class="logout">Logout</button>
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
	<script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

