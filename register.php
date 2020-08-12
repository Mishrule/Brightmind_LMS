<?php
	require_once('inc/lmsdb.php');
	require_once('inc/datetime.php');
	$msg = '';
	if(isset($_POST['submit'])){
		$fName = mysqli_real_escape_string($con, $_POST['fName']);
		$indexNumber = mysqli_real_escape_string($con, $_POST['indexNumber']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$pass_word = mysqli_real_escape_string($con, $_POST['pass_word']);
		$pos = mysqli_real_escape_string($con, $_POST['pos']);
		$studentLevel = mysqli_real_escape_string($con, $_POST['studentLevel']);
		// $studentImage = mysqli_real_escape_string($con, $_POST['studentImage']);
		// $agree = mysqli_real_escape_string($con, $_POST['agree']);
		$Image = $_FILES['studentImage']['name'];
		if($fName == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>NAME CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($indexNumber == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>INDEX NUMBER CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($email == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>EMAIL CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($pass_word == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>PASSWORD CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($pos == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>PROGRAM OF STUDY CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($studentLevel == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>STUDENT LEVEL CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($Image == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>IMAGE CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else{
			$Target = "assets/images/".basename($_FILES['studentImage']['name']);
		
		$registerSQL = "INSERT INTO student VALUES('$indexNumber','$fName','$email','$pass_word','$pos','$studentLevel','$Image','$DateTime')";
		$registerResult = mysqli_query($con, $registerSQL);

		move_uploaded_file($_FILES['studentImage']['tmp_name'], $Target);

		if($registerResult){
			$msg = '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>'.$fName.'</strong> Registered Successfully
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
			
		}else{
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>'.mysqli_error($con).'</strong>  Failed Try again
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}
		}

	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="BrigthMinds" />

	<!-- OG -->
	<meta property="og:title" content="BrigthMinds" />
	<meta property="og:description" content="BrigthMinds" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>Bright Minds LMS | Sign UP </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">

</head>

<body id="bg">
	<div class="page-wraper">
		<div id="loading-icon-bx"></div>
		<div class="account-form">
			<div class="account-head" style="background-image:url(assets/images/background/bg2.jpg);">
				<a href="index.html"><img src="assets/images/logo-white-2.png" alt=""></a>
			</div>
			<div class="account-form-inner">
				<div class="account-container">
					<div class="heading-bx left">
						<h2 class="title-head">Sign Up <span>Now</span></h2>
						<p>Login Your Account <a href="login.php">Click here</a></p>
					</div>
					<form class="contact-bx" enctype="multipart/form-data" method="POST" action="<?php $_PHP_SELF?>">
					<div class = "row">
						<div class="col-md-12 col-lg-12">
						   <?php echo $msg; ?>
						</div>
					</div>
						<div class="row placeani">
							<div class="col-lg-12">
								<div class="form-group">
									<div class="input-group">
										<label>Fullname</label>
										<input id="fName" name="fName" type="text" required="" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<div class="input-group">
										<label>Index Number</label>
										<input name="indexNumber" id="indexNumber" type="text" required="" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<div class="input-group">
										<label>Your Email Address</label>
										<input name="email" id="email" type="email" required="" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<div class="input-group">
										<label>Your Password</label>
										<input name="pass_word" id="pass_word" type="password" class="form-control" required="">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<div class="input-group">
										<label>Program of Study</label>
										<input name="pos" id="pos" type="text" required="" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<div class="input-group">
										<label>Level</label>
										<select class="form-control col-md-12" id="studentLevel" name="studentLevel" >
											<option value="level_100">Level 100</option>
											<option value="level_200">Level 200</option>
											<option value="level_300">Level 300</option>
											<option value="level_400">Level 400</option>
										</select>

									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<div class="input-group">
										<label></label>
										<input name="studentImage" id="studentImage" type="file" required="" class="form-control">
									</div>
								</div>
							</div>
							<!-- <div class="col-lg-12">
								<input class="form-check-input" type="checkbox" placeholder="" id="agree">
								<label class="form-check-label" for="agree">
									Agree with Terms and conditions
								</label>
							</div> -->
							<div class="col-lg-12 m-b30">
								<button name="submit" id="submit" type="submit" value="Submit" class="btn col-md-12 button-md">Sign Up</button>
							</div>
							
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- External JavaScripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
	<script src="assets/vendors/counter/waypoints-min.js"></script>
	<script src="assets/vendors/counter/counterup.min.js"></script>
	<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
	<script src="assets/vendors/masonry/masonry.js"></script>
	<script src="assets/vendors/masonry/filter.js"></script>
	<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
	<script src="assets/js/functions.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src='assets/vendors/switcher/switcher.js'></script>
</body>

</html>
<script>
	$(document).ready(function(){
		$('.alert').click(function(){
			window.location.href = 'index.php';
		})
	})
</script>