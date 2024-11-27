<?php session_start(); ?>
<!DOCTYPE html>
<!-- saved from url=(0053)https://colorlib.com/etc/regform/colorlib-regform-36/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
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
		padding: 12.5px;
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
    </style>
<meta name="robots" content="noindex, follow">
</head>
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail admin-login" action="../includes/restricted/processAdminForm.php" method="post" id="myform">
				<div class="form-left" id="form_login">
					<?php 
					if(!isset($_GET["loggedin"])) 
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
                    <div class="form-row-last">
						<input type="submit" name="login" class="login" value="Login">
					</div>
					
					<?php
					} else {

					?>
					
					<div class="form-row-last">
						<?php 
							if($_GET['user'] != 'undefined')
							{
								echo "<h2> Welcome Admin.:".@$_SESSION['admin']."</h2>";
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
<script type="text/javascript" async="" src="./form_colorlib_files/analytics.js.descarga"></script><script async="" src="./form_colorlib_files/js"></script>
<script>
  if (document.querySelector("#form_registry").classList[1] !== null && document.querySelector("#form_registry").classList[1] !== "")
  {
    document.querySelector("#form_registry").innerHTML = "";
  }
  if (document.location.href.includes("loggedin=true")) {
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
  }

  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}

function turnLoginOn() {
	// Get the checkbox
	var checkBox = document.getElementById("turnOnLogin-Checkbox");
	// Get the output text
	var text = document.getElementById("text");

	// If the checkbox is checked, display the output text
	if (checkBox.checked == true)
	{
		document.querySelector("#terms-and-rights").style.display = "none";
		document.querySelector("#name-row").style.display = "none";
		document.querySelector("#title-to-registry-of-employee").innerHTML = "Login the Employee";
		document.querySelector("#name").setAttribute("required", "false");
		document.querySelector("#name").noValidate;
		// Button to login
		const btn_for_login = document.createElement("input");
		btn_for_login.setAttribute("type", "submit");
		btn_for_login.setAttribute("name", "login_employee");
		btn_for_login.setAttribute("value", "Login");
		btn_for_login.setAttribute("class", "login");
		

		document.querySelector(".register").remove();

		document.querySelector("#form_registry .form-row-last").appendChild(btn_for_login);
	} 
	else 
	{
		document.querySelector("#terms-and-rights").style.display = "block";
		document.querySelector("#name-row").style.display = "block";
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
<script defer="" src="./form_colorlib_files/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon="{&quot;rayId&quot;:&quot;8e7b65e8ee1d1375&quot;,&quot;serverTiming&quot;:{&quot;name&quot;:{&quot;cfExtPri&quot;:true,&quot;cfL4&quot;:true,&quot;cfSpeedBrain&quot;:true,&quot;cfCacheStatus&quot;:true}},&quot;version&quot;:&quot;2024.10.5&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;}" crossorigin="anonymous"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) --></html>