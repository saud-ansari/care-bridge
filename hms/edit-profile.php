<?php
session_start();
//error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$gender = $_POST['gender'];

	$sql = mysqli_query($bd, "Update users set fullName='$fname',address='$address',city='$city',gender='$gender' where email='" . $_SESSION['login'] . "'");
	if ($sql) {
		echo "<script>alert('Your Profile updated Successfully');</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>User | Edit Profile</title>
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
			--bg-1: #f3f7f6;
			--bg-2: #eef2f5;
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

		.care-panel {
			border-radius: var(--radius-lg);
			border: 1px solid rgba(15, 29, 43, .08);
			box-shadow: var(--shadow-soft);
			overflow: hidden;
		}

		.care-panel .panel-heading {
			background: linear-gradient(120deg, rgba(15, 138, 122, .08), rgba(58, 178, 131, .08));
			border-bottom: 1px solid rgba(15, 29, 43, .08);
			padding: 16px 20px;
		}

		.care-panel .panel-title {
			font-family: 'Playfair Display', serif;
			font-size: 20px;
		}

		.care-panel .panel-body {
			padding: 24px;
		}

		.care-form .form-control {
			border-radius: 12px;
			border: 1px solid rgba(15, 29, 43, .15);
			box-shadow: none;
		}

		.care-form .form-control:focus {
			border-color: var(--primary);
			box-shadow: 0 0 0 2px rgba(15, 138, 122, .15);
		}

		.care-form label {
			color: var(--muted);
			font-weight: 600;
		}

		.care-btn {
			background: var(--primary);
			color: #fff;
			border: none;
			padding: 10px 22px;
			border-radius: 999px;
			font-weight: 700;
			transition: transform .2s ease, box-shadow .2s ease, background .2s ease;
		}

		.care-btn:hover,
		.care-btn:focus {
			background: var(--primary-2);
			transform: translateY(-2px);
			box-shadow: 0 12px 24px rgba(15, 29, 43, .15);
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
								<h1 class="mainTitle">User | Edit Profile</h1>
							</div>
							<ol class="breadcrumb">
								<li>
									<span>User </span>
								</li>
								<li class="active">
									<span>Edit Profile</span>
								</li>
							</ol>
						</div>
					</section>
					<!-- end: PAGE TITLE -->
					<!-- start: BASIC EXAMPLE -->
					<div class="container-fluid container-fullw bg-white">
						<div class="row">
							<div class="col-md-12">

								<div class="row margin-top-30">
									<div class="col-lg-8 col-md-12">
										<div class="panel panel-white care-panel">
											<div class="panel-heading">
												<h5 class="panel-title">Edit Profile</h5>
											</div>
											<div class="panel-body">
												<?php $sql = mysqli_query($bd, "select * from users where email='" . $_SESSION['login'] . "'");
												while ($data = mysqli_fetch_array($sql)) {
												?>
													<form role="form" name="edit" method="post" class="care-form">


														<div class="form-group">
															<label for="fname">
																User Name
															</label>
															<input type="text" name="fname" class="form-control" value="<?php echo htmlentities($data['fullName']); ?>">
														</div>


														<div class="form-group">
															<label for="address">
																Address
															</label>
															<textarea name="address" class="form-control"><?php echo htmlentities($data['address']); ?></textarea>
														</div>
														<div class="form-group">
															<label for="city">
																City
															</label>
															<input type="text" name="city" class="form-control" required="required" value="<?php echo htmlentities($data['city']); ?>">
														</div>

														<div class="form-group">
															<label for="gender">
																Gender
															</label>
															<input type="text" name="gender" class="form-control" required="required" value="<?php echo htmlentities($data['gender']); ?>">
														</div>

														<div class="form-group">
															<label for="fess">
																User Email
															</label>
															<input type="email" name="uemail" class="form-control" readonly="readonly" value="<?php echo htmlentities($data['email']); ?>">
														</div>




													<?php } ?>


													<button type="submit" name="submit" class="care-btn">
														Update
													</button>
													</form>
											</div>
										</div>
									</div>

								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="panel panel-white">


								</div>
							</div>
						</div>
					</div>

					<!-- end: BASIC EXAMPLE -->
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