<?php session_start(); 
if(isset($_GET) && !isset($_GET['goToLogIn']) && !isset($_GET['loggedIn'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Megaburguer</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="./form_colorlib_files/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="./form_colorlib_files/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="./form_colorlib_files/style.css">
    <style>
	.d-none{
		display: none;
	}
	.form-row-custom {
		width: 50%;
		padding: 0 12px 0 60px;
	}
	body{
		background: #8fb1e7;
	}
	.admin-login input.login {
		padding: 10px;
		background: #fff;
		border-radius: 25px;
		-o-border-radius: 25px;
		-ms-border-radius: 25px;
		-moz-border-radius: 25px;
		-webkit-border-radius: 25px;
		box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
		-o-box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
		-ms-box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
		-moz-box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
		-webkit-box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
		width: 180px;
		border: none;
		margin: 6px 0 50px 0px;
		cursor: pointer;
		color: #333;
		font-weight: 700;
		font-size: 15px;
		background-color: #75e2e9;
		margin-left: 40px;
	}
	/*** Box to around the slider ***/
	/* The switch - the box around the slider */
	.switch {
		position: relative;
		display: inline-block;
		width: 60px;
		height: 34px;
	}

	/* Hide default HTML checkbox */
	.switch input {
		opacity: 0;
		width: 0;
		height: 0;
	}

	/* The slider */
	.slider {
		position: absolute;
		cursor: pointer;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		background-color: #ccc;
		-webkit-transition: .4s;
		transition: .4s;
	}

	.slider:before {
		position: absolute;
		content: "";
		height: 26px;
		width: 26px;
		left: 4px;
		bottom: 4px;
		background-color: white;
		-webkit-transition: .4s;
		transition: .4s;
	}

	input:checked + .slider {
		background-color: #2196F3;
	}

	input:focus + .slider {
		box-shadow: 0 0 1px #2196F3;
	}

	input:checked + .slider:before {
		-webkit-transform: translateX(26px);
		-ms-transform: translateX(26px);
		transform: translateX(26px);
	}

	/* Rounded sliders */
	.slider.round {
		border-radius: 34px;
	}

	.slider.round:before {
		border-radius: 50%;
	}

	.switch-title{
		width: 100px;
	}
	/* Warnings */
	.notice.danger {
		background-color: #f8d7da;
    	border: 1px solid #f5c6cb;
		padding: 2%;
	}
	.notice-title {
		font-weight: bold;
		margin-bottom: 5px;
  	}
	button.logout{
		background: red;
		color: white;
		border: none;
		border-radius: 5px;
		padding: 7px;
		margin: 23px;
		cursor: pointer;
	}
	#login_admin_restricted_arc
	{
		position: relative;
	}
	.login_admin_restricted_arc {
		margin-left: 5%;
	}

	.login_admin_restricted_arc span {
		margin-left: 10px;
		padding: 7% 0%;
	}

	input#login_admin_restricted_arc {
		width: 10px;
	}
	#login_admin_restricted_arc,  .login_admin_restricted_arc{
		height: 32px !important;
		float: left;
	}
	#login_admin_restricted_arc span {
		margin-top: auto;
		margin-bottom: auto;
	}
	#login_admin_restricted_arc input[type='checkbox']{
		width: 16px;
		height: 16px !important;
		box-shadow: #000 0px 0px 1px;
		margin-left: 0px !important;
		margin-right: 10px;
		outline: none;
		height: 20px;
		width: 20px;
		border: 1px solid black;
		color: black;
		background-color: rgb(168, 168, 75);
		box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05);
		display: inline-block;
		position: relative;
	}

	#login_admin_restricted_arc input[type='checkbox'] {
		width: 16px;
		height: 16px !important;
		content: '✓';
		text-align: center;
		vertical-align: middle;
		position: absolute;
		height: 1em;
		width: 1em;
		line-height: 1;
		margin: auto;
		top: 0;
		bottom: 0;
		left: 0;
		right: 0;
	}
	/* The container */
	.container-to-restricted-area {
		display: block;
		position: relative;
		padding-left: 35px;
		margin-bottom: 12px;
		cursor: pointer;
		font-size: 22px;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		margin-left: 55px;
	}

	/* Hide the browser's default checkbox */
	.container-to-restricted-area-to-restricted-area input {
		position: absolute;
		opacity: 0;
		cursor: pointer;
		height: 0;
		width: 0;
	}

	/* Create a custom checkbox */
	.checkmark {
		position: absolute;
		top: 0;
		left: 0;
		height: 25px;
		width: 25px;
		background-color: #eee;
	}

	/* On mouse-over, add a grey background color */
	.container-to-restricted-area-to-restricted-area:hover input ~ .checkmark {
		background-color: #ccc;
	}

	/* When the checkbox is checked, add a blue background */
	.container-to-restricted-area input:checked ~ .checkmark {
		background-color: #2196F3;
	}

	/* Create the checkmark/indicator (hidden when not checked) */
	.checkmark:after {
		content: "";
		position: absolute;
		display: none;
	}

	/* Show the checkmark when checked */
	.container-to-restricted-area input:checked ~ .checkmark:after {
		display: block;
	}

	/* Style the checkmark/indicator */
	.container-to-restricted-area .checkmark:after {
		left: 9px;
		top: 5px;
		width: 5px;
		height: 10px;
		border: solid white;
		border-width: 0 3px 3px 0;
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg);
	}

    </style>
	<meta name="robots" content="noindex, follow">
</head>
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail admin-login" action="../includes/restricted/processAdminForm.php" method="post" id="myform">
				<div class="form-left" id="form_login">
					<?php
					if(isset($_GET["goToLogIn"]) && (!isset($_GET["loggedin"]) || $_GET["loggedin"] == "false") || !isset($_COOKIE['allowed']))
					{
					?>
						<h2>Admin Login</h2>
						<div class="form-group">
							<div class="form-row form-row-1">
								<input type="text" name="user" id="user" class="input-text" placeholder="Admin user" required="">
							</div>
						</div>
						<div class="form-row form-row-custom">
							<input type="password" placeholder="Password" name="password" class="password" id="password" required="true">
						</div>
						<div class="form-row-last check-mark-container" style="position: relative;">
							<label class="container-to-restricted-area">Restricted
								<input type="checkbox" checked="checked">
								<span class="checkmark"></span>
							</label>
							<input type="submit" name="login" id="loginUser" class="login" value="Login">
						</div>
						<?php if(isset($_GET["user_duplicated"]) && $_GET["user_duplicated"] == "true") { ?>
							<div class="notice danger">
								<div class="notice-title">DANGER</div>
								<p>The user which you tried to create, is already created.</p>
							</div>
						<?php
						}
						?>
					<?php
					} else if (isset($_GET['user'])) {
					?>
					
					<div class="form-row-last">
						<button type="button" onclick="logout()" class="logout">Logout</button>
						<?php 
							if($_GET['user'] != 'undefined')
							{
								echo "<h2> Welcome Admin.:".@$_SESSION['user_nick']."</h2>";
								echo '
								<span style="margin-left: 6%" class="switch-title">Switch to LOG IN an Employee with the right.</span>
								<br/>
								<label style="margin-left: 6%; margin-top: 4%;" class="switch">
								  	<input type="checkbox" id="turnOnLogin-Checkbox" onclick="turnLoginOn()"/>
								  	<span class="slider round"></span>
								</label>';
							}
						?>
					</div>
					<?php
					}
					?>
				</div>
				<div class="form-right d-none" id="form_registry">
				</div>
			</form>
		</div>
	</div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script type="text/javascript">
	window.addEventListener("load", function() {
		var button = document.querySelector("#form_login > div.form-row-last.check-mark-container > label > input[type=checkbox]");
		button.addEventListener("change", function(event) {
			if (document.querySelector("#form_login > div.form-row-last.check-mark-container > label > input[type=checkbox]").checked == false && document.location.href.includes("?!restrictedUse")) {
				document.location.href.replace("?!restrictedUse", "");
				document.querySelector("#form_login > div.form-row-last.check-mark-container > label > input[type=checkbox]").checked = false
				document.location.href = "http://localhost/megaburguer/login/index.php?goToLogIn=!21";
			} else if(!document.location.href.includes("?!restrictedUse")) {
				document.location.href += "?!restrictedUse";
				document.querySelector("#form_login > div.form-row-last.check-mark-container > label > input[type=checkbox]").checked = false;
			} else {
				document.location.href.replace("?!restrictedUse", "");
				document.location.href = "http://localhost/megaburguer/login/index.php?goToLogIn=!21";
			}
		});
	});

	let itemToHide = document.querySelector(".notice.danger");
	if(window.location.href.includes("user_duplicated") == true) {
		setTimeout(() => {
			itemToHide.style.display = "none";
		}, 4000);
	};
</script>
<script>
  if (document.querySelector("#form_registry").classList[1] !== null && document.querySelector("#form_registry").classList[1] !== "")
  {
    document.querySelector("#form_registry").innerHTML = "";
  }
  else if (document.location.href.includes("loggedin=true")) {
	document.querySelector("#form_registry").classList.remove("d-none");
    document.querySelector("#form_registry").innerHTML = `
                <h2 id="title-to-registry-of-employee">Registry an employee</h2>
					<div class="form-row" id="name-row">
						<input type="text" name="name" class="name" id="name" placeholder="Name" required="true">
					</div>
					<div class="form-row"id="email-row">
						<input type="text" name="your_email" id="your_email" class="input-text" required="" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Employee Email">
					</div>
					<div class="form-row" id="password-row">
						<input type="password" name="password_employee" class="password" id="password" placeholder="Password" Information" required="true">
					</div>
					<div class="form-group">
						<div class="form-row">
							<select name="customer_no"> <!-- In the db: actual_customer_id -->
							    <option value="1">Customer no1</option>
							    <option value="2">Customer no2</option>
							    <option value="3">Customer no3</option>
							    <option value="4">Customer no4</option>
							    <option value="5">Customer no5</option>
							    <option value="6">Customer no6</option>
							    <option value="7">Customer no7</option>
							    <option value="8">Customer no8</option>
							    <option value="9">Customer no9</option>
							    <option value="10">Customer no10</option>
							    <option value="11">Customer no11</option>
							    <option value="12">Customer no12</option>
							    <option value="13">Customer no13</option>

							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>
					<div class="form-checkbox" id="terms-and-rights">
						<label class="container"><p>I do accept the <a href="https://colorlib.com/etc/regform/colorlib-regform-36/#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox">
						  	<span class="checkmark"></span>
						</label>
					</div>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Register Employee">
					</div>
    `;
  } else { 
	// Job 38:1,2 / With the permission of HIM.
	if(document.location.href.includes("loggedin=admin_restricted")){
		window.location.replace("../admin_area/index.php");
	}
  }

  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}

function turnLoginOn() {
	// Get the checkbox
	var checkBox = document.getElementById("turnOnLogin-Checkbox");
	let checkbox_2 = document.getElementById("login_admin_restricted_arc");

	// If the checkbox is checked, display the output text
	if (checkbox.checked == true || checkbox_2.checked == false)
	{
		document.querySelector("#terms-and-rights").style.display = "none";
		document.querySelector("#name-row").style.display = "none";
		document.querySelector("#title-to-registry-of-employee").innerHTML = "Login the Employee";
		document.querySelector("#name").setAttribute("required", "false");
		document.querySelector("#name").setAttribute("type", "hidden");
		// Button to login
		const btn_for_login = document.createElement("input");
		btn_for_login.setAttribute("type", "submit");
		
		
		btn_for_login.setAttribute("value", "Login");
		btn_for_login.setAttribute("class", "login");
		
		if(hasAfter(".container-to-restricted-area > span.checkmark")) {
			btn_for_login.setAttribute("name", "login_admin_restricted_arc");
		} else {
			btn_for_login.setAttribute("name", "login_employee");
		}
		document.querySelector(".register").remove();

		document.querySelector("#form_registry .form-row-last").appendChild(btn_for_login);
	} else if(checkbox_2.checked == true) 
	{
		document.querySelector("#terms-and-rights").style.display = "none";
		document.querySelector("#name-row").style.display = "none";
		document.querySelector("#title-to-registry-of-employee").innerHTML = "Login the Admin";
		document.querySelector("#name").setAttribute("required", "false");
		document.querySelector("#name").setAttribute("type", "hidden");
		// Button to login
		const btn_for_login = document.createElement("input");
		btn_for_login.setAttribute("type", "submit");
		
		btn_for_login.setAttribute("value", "Login");
		btn_for_login.setAttribute("class", "login");
		
		btn_for_login.setAttribute("name", "login_admin_restricted_arc");
		document.querySelector(".register").remove();

		document.querySelector("#form_registry .form-row-last").appendChild(btn_for_login);
	}
	else 
	{
		document.querySelector("#terms-and-rights").style.display = "block";
		document.querySelector("#name-row").style.display = "block";
		document.querySelector("#name").setAttribute("type", "text");
		document.querySelector("#title-to-registry-of-employee").innerHTML = "Registry an employee";

		// If not set, remove current and re-create
		document.querySelector(".login").remove();

		const btn_for_register = document.createElement("input");
		btn_for_register.setAttribute("type", "submit");
		btn_for_register.setAttribute("name", "register");
		btn_for_register.setAttribute("value", "Register Employee");
		btn_for_register.setAttribute("class", "register");

		document.querySelector("#form_registry .form-row-last").appendChild(btn_for_register);
	}
}

gtag('js', new Date());

gtag('config', 'UA-23581568-13');

</script>
<script src="../menu/js/main.js"></script>
<script src="./resources/resources.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) --></html>
<?php
	if(isset($_SESSION['user_nick']) && !isset($_GET['goToLogIn'])):
		header("Location: ../admin_area/");
	endif;
	if(!isset($_SESSION)){
		header("Location: ../index.php");
	}
?>