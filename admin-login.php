<?php
	require_once('inc/lmsdb.php');
	
	session_start();
    $error = '';
    if(isset($_POST['submit'])){
        $indexnumber = mysqli_real_escape_string($con, $_POST['dzName']);
        $password = mysqli_real_escape_string($con, $_POST['dzPass']);
        // $studentlevel = mysqli_real_escape_string($con, $_POST['dzLevel']);
        
        // if($studentlevel == 'level_100'){
            $loginSQL = "SELECT * FROM useraccount WHERE username = '$indexnumber' AND password = '$password'";
			$loginResult = mysqli_query($con, $loginSQL);
			$row = mysqli_fetch_array($loginResult);
            if(mysqli_num_rows($loginResult)==1){
                $_SESSION['login_user'] = $indexnumber;
                header('Location:admin/index.php');
            }else{
                $error = "INVALID USERNAME OR PASSWORD";
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
	<meta name="description" content="Bright_Minds" />
	
	<!-- OG -->
	<meta property="og:title" content="Bright_Minds" />
	<meta property="og:description" content="Bright_Minds" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Bright Minds LMS | Login </title>
	
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
					<h2 class="title-head">Login to your <span>Account</span></h2>
					<p>Don't have an account? <a href="register.php">Create one here</a></p>
                </div>	
                <h4 class="title-head text-red"><?php echo $error; ?></h4>
				<form class="contact-bx" method="POST" action="<?php $_SELF_PHP ?>">
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Index Number</label>
									<input name="dzName" id="dzName" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Your Password</label>
									<input name="dzPass" id="dzPass" type="password" class="form-control" required="">
								</div>
							</div>
						</div>
						<!-- <div class="col-lg-12">
							<div class="form-group form-forget">
								<div class="col-lg-12">
									<select class="form-control" id="dzLevel" name="dzLevel">
                                        <option value="level_100">Level 100</option>
                                        <option value="level_200">Level 200</option>
                                        <option value="level_300">Level 300</option>
                                        <option value="level_400">Level 400</option>
                                    </select>
							
							</div>
						</div> -->
						<div class="col-lg-12 m-b30">
							<button name="submit" id="submit" type="submit" value="Submit" class="btn button-md col-md-12">Login</button>
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
