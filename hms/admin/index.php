<?php
session_start();
error_reporting(0);
include("include/config.php");
if(isset($_POST['submit']))
{
$ret=mysqli_query($bd, "SELECT * FROM admin WHERE username='".$_POST['username']."' and password='".$_POST['password']."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";//
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$_SESSION['errmsg']="Invalid username or password";
$extra="index.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin Login</title>
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

		.care-alert {
			margin: 12px 0 18px;
			color: #c0392b;
			font-weight: 600;
		}

		.care-field {
			position: relative;
			margin-bottom: 14px;
		}

		.care-field input {
			width: 100%;
			padding: 12px 40px 12px 14px;
			border-radius: 12px;
			border: 1px solid rgba(15, 29, 43, .15);
			font-size: 14px;
			color: var(--ink);
			background: #fff;
		}

		.care-field input:focus {
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
			color: #fff;
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

		@media (max-width: 991px) {
			.care-illustration {
				display: none;
			}
		}
	</style>
</head>

<body class="login">
	<div class="care-login">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="care-card">
						<div class="row" style="margin:0;">
							<div class="col-md-7" style="padding:0;">
								<div class="care-brand">
									<img src="../../images/logo.png" alt="Care Bridge logo">
									<div>
										<h2>Care Bridge</h2>
										<span class="text-muted">Admin Portal</span>
									</div>
								</div>
								<div class="care-content">
									<h3>Welcome back</h3>
									<p>Oversee operations, manage providers, and monitor activity from one place.</p>
									<?php if (!empty($_SESSION['errmsg'])) { ?>
										<div class="care-alert"><?php echo $_SESSION['errmsg']; ?><?php echo $_SESSION['errmsg'] = ""; ?></div>
									<?php } ?>
									<form method="post">
										<div class="care-field">
											<input type="text" name="username" placeholder="Username" required>
											<i class="fa fa-user"></i>
										</div>
										<div class="care-field">
											<input type="password" name="password" placeholder="Password" required>
											<i class="fa fa-lock"></i>
										</div>
										<div class="care-actions">
											<button type="submit" class="care-btn" name="submit">
												Login <i class="fa fa-arrow-circle-right"></i>
											</button>
											<a class="care-link" href="../doctor/">Doctor login</a>
										</div>
									</form>
									<div class="care-footer">
										&copy; 2026 Care Bridge Hospital. All rights reserved.
									</div>
								</div>
							</div>
							<div class="col-md-5" style="padding:0;">
								<div class="care-illustration">
									<h4>Operational clarity</h4>
									<p>Track patients, providers, and appointments with a unified admin view.</p>
									<div class="care-badges">
										<span class="care-badge">Staff Ready</span>
										<span class="care-badge">Secure Access</span>
										<span class="care-badge">Insights Live</span>
									</div>
								</div>
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

</body>
<!-- end: BODY -->

</html>
