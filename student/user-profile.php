<?php require_once('.././inc/lmsdb.php'); ?>
<?php $msg = '';
// $loginsession = 'Albert Finn';
include('../session.php');
if (isset($_POST['submit'])) {
		
	
	$indexNumber = mysqli_real_escape_string($con, $_POST['indexNumber']);
	$fullName = mysqli_real_escape_string($con, $_POST['fullName']);
	$studentemail = mysqli_real_escape_string($con, $_POST['studentemail']);
	$pass_word = mysqli_real_escape_string($con, $_POST['pass_word']);
	$progOfStudy = mysqli_real_escape_string($con, $_POST['progOfStudy']);
	$studentlevel = mysqli_real_escape_string($con, $_POST['studentlevel']);
	$userregistrationdate = mysqli_real_escape_string($con, $_POST['userregistrationdate']);
	// $userregistrationdate = mysqli_real_escape_string($con, $_POST['userregistrationdate']);

	$UpdateProfileSQL = "UPDATE student SET fullname = '$fullName' , studentemail = '$studentemail', studentpassword = '$pass_word' , programofstudy = '$progOfStudy'  WHERE indexnumber = '$login_indexnumber' AND studentlevel='$login_level' ";

	$UpdateProfileResult = mysqli_query($con, $UpdateProfileSQL);

	if ($UpdateProfileResult) {
		$msg = '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>' . $fullName . '</strong> Records Updated Sucessfully
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
	} else {
		$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>' . mysqli_error($con) . '</strong>  Failed Try again
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<?php require_once('assets/inc/head.php'); ?>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	
	<!-- header start -->
	<?php require_once('assets/inc/header.php'); ?>
	<!-- header end -->
	<!-- Left sidebar menu start -->
	<?php require_once('assets/inc/aside.php'); ?>
	<!-- Left sidebar menu end -->

	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">User Profile</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>User Profile</li>
				</ul>
			</div>
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Profile</h4>
						</div>
						<div class="row">
							<div class="col-md-12">
								<?php echo $msg; ?>
							</div>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" method="POST" action="<?php $_PHP_SELF ?>" enctype="multipart/form-data">
								<?php
								// $loginsession = 'd';
								$userProfileSQL = "SELECT * FROM student WHERE indexnumber = '$login_indexnumber' AND studentlevel = '$login_level'";
								$userProfileResult = mysqli_query($con, $userProfileSQL);
								if (mysqli_num_rows($userProfileResult) == 1) {
									$profileRow = mysqli_fetch_array($userProfileResult);
								}
								?>
								<div class="">
									<div class="form-group row">
										<div class="col-sm-10  ml-auto">
											<h3>1. Personal Details</h3>
										</div>
									</div>

									<div class="form-group row" hidden>
										<label class="col-sm-2 col-form-label" for="indexNumber">Index Number</label>
										<div class="col-sm-7">
											<input class="form-control" id="indexNumber" name="indexNumber" type="text" value="<?php echo $profileRow['indexnumber']; ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Full Name</label>
										<div class="col-sm-7">
											<input class="form-control" id="fullName" name="fullName" type="text" value="<?php echo $profileRow['fullname']; ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Student Email</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" id="studentemail" name="studentemail" value="<?php echo $profileRow['studentemail']; ?>">

										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Password</label>
										<div class="col-sm-7">
											<input class="form-control" id="pass_word" name="pass_word" type="number" value="<?php echo $profileRow['studentpassword']; ?>">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Program Of Study.</label>
										<div class="col-sm-7">
											<input class="form-control" id="progOfStudy" name="progOfStudy" type="progOfStudy" value="<?php echo $profileRow['programofstudy']; ?>">
										</div>
									</div>

									<div class="seperator"></div>

									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3>2. User Info</h3>
										</div>
									</div>
									<div class="form-group  row">
										<label class="col-sm-2 col-form-label ">Level</label>
										<div class="col-sm-7">
											<input class="form-control" id="studentlevel" name="studentlevel" type="text" value="<?php echo $profileRow['studentlevel']; ?>" disabled>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Registration Date</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" id="userregistrationdate" name="userregistrationdate" value="<?php echo $profileRow['registrationdate']; ?>">
										</div>
									</div>
									
									<!-- <div class="form-group  row">
										<label class="col-sm-2 col-form-label "></label>
										<div class="col-sm-7">
											<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
											<label class="form-check-label" for="defaultCheck1">
												Agree with Terms and conditions
											</label>
										</div>
									</div> -->
								</div>
								<div class="">
									<div class="">
										<div class="row">
											<div class="col-sm-2">
											</div>
											<div class="col-sm-7">
												<button type="submit" id="submit" name="submit" value="submit" class="btn">Update Changes</button>
												<!-- <button type="reset" class="btn-secondry">Cancel</button> -->
											</div>
										</div>
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>
				<!-- Your Profile Views Chart END-->
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

<!-- External JavaScripts -->
<?php require_once('assets/inc/externaljs.php'); ?>
</body>

</html>