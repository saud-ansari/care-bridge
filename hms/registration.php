<?php
include_once('include/config.php');
if (isset($_POST['submit'])) {
	$fname = $_POST['full_name'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$query = mysqli_query($bd, "insert into users(fullname,address,city,gender,email,password) values('$fname','$address','$city','$gender','$email','$password')");
	if ($query) {
		echo "<script>alert('Successfully Registered. You can login now');</script>";
		//header('location:user-login.php');
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>User Registration</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="mobile-web-app-capable" content="yes">
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
	<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
	<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
	<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
	<style>
		:root {
			--ink: #0f1d2b;
			--muted: #5c6b7a;
			--primary: #0f8a7a;
			--primary-2: #0b6b5f;
			--accent: #3AB283;
			--surface: #ffffff;
			--bg-1: #f3f7f6;
			--bg-2: #eef2f5;
			--shadow: 0 18px 40px rgba(15, 29, 43, 0.12);
			--shadow-soft: 0 10px 24px rgba(15, 29, 43, 0.08);
			--radius-lg: 18px;
			--radius-md: 12px;
		}

		body.login {
			font-family: 'Manrope', sans-serif;
			background:
				radial-gradient(1200px 600px at 80% -10%, rgba(15, 138, 122, .12), transparent 60%),
				radial-gradient(900px 500px at 0% 10%, rgba(246, 200, 106, .18), transparent 55%),
				linear-gradient(180deg, var(--bg-1), var(--bg-2));
			color: var(--ink);
			min-height: 100vh;
		}

		.care-login {
			min-height: 100vh;
			display: flex;
			align-items: center;
			padding: 40px 16px;
		}

		.care-card {
			background: var(--surface);
			border-radius: var(--radius-lg);
			box-shadow: var(--shadow);
			border: 1px solid rgba(15, 29, 43, .08);
			overflow: hidden;
		}

		.care-brand {
			display: flex;
			align-items: center;
			gap: 12px;
			padding: 24px 28px;
			border-bottom: 1px solid rgba(15, 29, 43, .08);
			background: linear-gradient(120deg, rgba(15, 138, 122, .08), rgba(58, 178, 131, .08));
		}

		.care-brand img {
			width: 48px;
			height: 48px;
		}

		.care-brand h2 {
			font-family: 'Playfair Display', serif;
			margin: 0;
			font-size: 24px;
		}

		.care-content {
			padding: 28px;
		}

		.care-content h3 {
			font-family: 'Playfair Display', serif;
			margin: 0 0 8px;
			font-size: 26px;
		}

		.care-content p {
			color: var(--muted);
			margin-bottom: 18px;
		}

		.care-field {
			position: relative;
			margin-bottom: 14px;
		}


		.care-field input,
		.care-field textarea,
		.care-field select {
			width: 100%;
			padding: 12px 40px 12px 14px;
			border-radius: 12px;
			border: 1px solid rgba(15, 29, 43, .15);
			font-size: 14px;
			color: var(--ink);
			background: #fff;
		}

		.care-field textarea {
			min-height: 90px;
			resize: vertical;
		}

		.care-field input:focus,
		.care-field textarea:focus,
		.care-field select:focus {
			outline: 2px solid rgba(15, 138, 122, .2);
			border-color: var(--primary);
		}

		.care-field i {
			position: absolute;
			right: 12px;
			top: 50%;
			transform: translateY(-50%);
			color: var(--primary);
		}

		.care-actions {
			display: flex;
			align-items: center;
			justify-content: space-between;
			gap: 12px;
			margin-top: 6px;
		}

		.care-btn {
			background: var(--primary);
			color: #fff;
			border: none;
			padding: 12px 22px;
			border-radius: 999px;
			font-weight: 700;
			letter-spacing: .3px;
			transition: transform .2s ease, box-shadow .2s ease, background .2s ease;
		}

		.care-btn:hover,
		.care-btn:focus {
			background: var(--primary-2);
			transform: translateY(-2px);
			box-shadow: 0 12px 24px rgba(15, 29, 43, .15);
		}

		.care-link {
			color: var(--primary);
			font-weight: 600;
		}

		.care-illustration {
			background: linear-gradient(160deg, var(--primary), var(--primary-2));
			color: #fff;
			padding: 32px;
			min-height: 100%;
			display: flex;
			flex-direction: column;
			justify-content: center;
		}

		.care-illustration h4 {
			font-family: 'Playfair Display', serif;
			font-size: 28px;
			margin: 0 0 12px;
		}

		.care-illustration p {
			opacity: .9;
			margin-bottom: 20px;
		}

		.care-badges {
			display: flex;
			gap: 10px;
			flex-wrap: wrap;
		}

		.care-badge {
			background: rgba(255, 255, 255, .18);
			border: 1px solid rgba(255, 255, 255, .3);
			padding: 8px 12px;
			border-radius: 999px;
			font-weight: 600;
			font-size: 12px;
		}

		.care-footer {
			text-align: center;
			color: var(--muted);
			font-size: 12px;
			margin-top: 18px;
		}

		.care-radio-field {
			margin: 20px 0 14px;
			display: flex;
			gap: 16px;
			align-items: center;
			flex-wrap: wrap;
		}

		.care-radio {
			display: flex;
			gap: 10px;
			align-items: center;
			flex-wrap: wrap;
		}

		.care-radio label {
			margin: 0 8px 0 4px;
			font-weight: 600;
			color: var(--muted);
		}

		@media (max-width: 991px) {
			.care-illustration {
				display: none;
			}
		}
	</style>

</head>

<body class="login">
	<!-- start: REGISTRATION -->
	<div class="care-login">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-8 col-md-offset-1">
					<div class="care-card">

						<div class="care-brand">
							<img src="../images/logo.png" alt="Care Bridge logo">
							<div>
								<h2>Care Bridge</h2>
								<span class="text-muted">Patient Registration</span>
							</div>
						</div>
						<div class="care-content">
							<h3>Create your account</h3>
							<p>Join Care Bridge to manage appointments and stay connected with your care team.</p>
							<form name="registration" id="registration" method="post">
								<div class="care-field">
									<input type="text" name="full_name" placeholder="Full Name" required>
								</div>
								<div class="care-field">
									<input type="text" name="address" placeholder="Address" required>
								</div>
								<div class="care-field">
									<input type="text" name="city" placeholder="City" required>
								</div>
								<div class="care-radio-field">
									<span class="text-muted">Gender</span>
									<div class="care-radio">
										<input type="radio" id="rg-female" name="gender" value="female">
										<label for="rg-female">Female</label>
										<input type="radio" id="rg-male" name="gender" value="male">
										<label for="rg-male">Male</label>
									</div>
								</div>
								<div class="care-field">
									<input type="email" name="email" id="email" onBlur="userAvailability()" placeholder="Email" required>
									<i class="fa fa-envelope"></i>
								</div>
								<span id="user-availability-status1" style="font-size:12px;"></span>
								<div class="care-field">
									<input type="password" id="password" name="password" placeholder="Password" required>
									<i class="fa fa-lock"></i>
								</div>
								<div class="care-field">
									<input type="password" name="password_again" placeholder="Password Again" required>
									<i class="fa fa-lock"></i>
								</div>
								<div class="care-actions">
									<div class="checkbox clip-check check-primary">
										<input type="checkbox" id="agree" value="agree">
										<label for="agree">I agree</label>
									</div>
									<button type="submit" class="care-btn" id="submit" name="submit">
										Submit <i class="fa fa-arrow-circle-right"></i>
									</button>
								</div>
								<p style="margin-top:12px;">
									Already have an account?
									<a class="care-link" href="user-login.php">Log-in</a>
								</p>
							</form>
							<div class="care-footer">
								&copy; 2026	 Care Bridge Hospital. All rights reserved.
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/modernizr/modernizr.js"></script>
	<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="vendor/switchery/switchery.min.js"></script>
	<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="assets/js/login.js"></script>
	<script>
		jQuery(document).ready(function() {
			Main.init();
			Login.init();
		});
	</script>

	<script>
		function userAvailability() {
			$("#loaderIcon").show();
			jQuery.ajax({
				url: "check_availability.php",
				data: 'email=' + $("#email").val(),
				type: "POST",
				success: function(data) {
					$("#user-availability-status1").html(data);
					$("#loaderIcon").hide();
				},
				error: function() {}
			});
		}
	</script>

</body>
<!-- end: BODY -->

</html>