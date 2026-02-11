<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>User | Dashboard</title>
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
	<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
	<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
	<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
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
			--surface: #ffffff;
			--shadow: 0 16px 36px rgba(15, 29, 43, 0.12);
			--shadow-soft: 0 10px 24px rgba(15, 29, 43, 0.08);
			--radius-lg: 18px;
			--radius-md: 12px;
		}

		body,
		#app {
			font-family: 'Manrope', sans-serif;
		}

		#page-title h1 {
			font-family: 'Playfair Display', serif;
			letter-spacing: .3px;
		}

		.care-card {
			border-radius: var(--radius-lg);
			border: 1px solid rgba(15, 29, 43, .08);
			box-shadow: var(--shadow-soft);
			transition: transform .2s ease, box-shadow .2s ease;
		}

		.care-card:hover {
			transform: translateY(-4px);
			box-shadow: var(--shadow);
		}

		.care-card .fa-stack .fa-square {
			color: var(--primary) !important;
		}

		.care-link a {
			color: var(--primary);
			font-weight: 600;
		}


		.navbar-brand {
			display: flex;
			align-items: center;
			gap: 12px;
		}

		.navbar .navbar-header .menu-toggler {
			margin-right: 0px;
		}

		@media (min-width: 768px) {
			.care-sidebar-brand {
				display: none;
			}
		}
	</style>


</head>

<body>
	<div id="app">
		<?php include('include/sidebar.php'); ?>
		<div class="app-content">

			<?php include('include/header.php'); ?>

			<!-- end: TOP NAVBAR -->
			<div class="main-content">
				<div class="wrap-content container" id="container">
					<!-- start: PAGE TITLE -->
					<section id="page-title">
						<div class="row">
							<div class="col-sm-8">
								<h1 class="mainTitle">User | Dashboard</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>User</span>
								</li>
								<li class="active">
									<span>Dashboard</span>
								</li>
							</ol>
						</div>
					</section>
					<!-- end: PAGE TITLE -->
					<!-- start: BASIC EXAMPLE -->
					<div class="container-fluid container-fullw bg-white">
						<div class="care-banner">
							<h3>Welcome to Care Bridge</h3>
							<p>Manage your profile, appointments, and care updates in one place.</p>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<div class="panel panel-white no-radius text-center care-card">
									<div class="panel-body">
										<span class="fa-stack fa-2x">
											<i class="fa fa-square fa-stack-2x text-primary"></i>
											<i class="fa fa-user fa-stack-1x fa-inverse"></i>
										</span>
										<h2 class="StepTitle">My Profile</h2>

										<p class="links cl-effect-1 care-link">
											<a href="edit-profile.php">
												Update Profile
											</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="panel panel-white no-radius text-center care-card">
									<div class="panel-body">
										<span class="fa-stack fa-2x">
											<i class="fa fa-square fa-stack-2x text-primary"></i>
											<i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
										</span>

										<h2 class="StepTitle">My Appointments</h2>

										<p class="cl-effect-1 care-link">
											<a href="appointment-history.php">
												View Appointment History
											</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="panel panel-white no-radius text-center care-card">
									<div class="panel-body">
										<span class="fa-stack fa-2x">
											<i class="fa fa-square fa-stack-2x text-primary"></i>
											<i class="fa fa-user-md fa-stack-1x fa-inverse"></i>
										</span>

										<h2 class="StepTitle"> Book Appointment</h2>

										<p class="links cl-effect-1 care-link">
											<a href="book-appointment.php">
												Book Appointment
											</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>






					<!-- end: SELECT BOXES -->

				</div>
			</div>
		</div>
		<!-- start: FOOTER -->
		<?php include('include/footer.php'); ?>
		<!-- end: FOOTER -->

		<!-- start: SETTINGS -->
		<?php include('include/setting.php'); ?>
		<!-- end: SETTINGS -->
	</div>
	<!-- start: MAIN JAVASCRIPTS -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/modernizr/modernizr.js"></script>
	<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script src="vendor/switchery/switchery.min.js"></script>
	<!-- end: MAIN JAVASCRIPTS -->
	<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
	<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
	<script src="vendor/autosize/autosize.min.js"></script>
	<script src="vendor/selectFx/classie.js"></script>
	<script src="vendor/selectFx/selectFx.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
	<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
	<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	<!-- start: CLIP-TWO JAVASCRIPTS -->
	<script src="assets/js/main.js"></script>
	<!-- start: JavaScript Event Handlers for this page -->
	<script src="assets/js/form-elements.js"></script>
	<script>
		jQuery(document).ready(function() {
			Main.init();
			FormElements.init();
		});
	</script>
	<!-- end: JavaScript Event Handlers for this page -->
	<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>

</html>