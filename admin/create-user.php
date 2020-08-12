<?php
require_once('.././inc/lmsdb.php');
$msg = '';
if (isset($_POST['submit'])) {

	$username = mysqli_real_escape_string($con, $_POST['username']);
	$fName = mysqli_real_escape_string($con, $_POST['fName']);
	$occupation = mysqli_real_escape_string($con, $_POST['occupation']);
	$companyName = mysqli_real_escape_string($con, $_POST['companyName']);
	$phone = mysqli_real_escape_string($con, $_POST['phone']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$registrationdate = mysqli_real_escape_string($con, $_POST['registrationdate']);

	$userpassword = mysqli_real_escape_string($con, $_POST['userpassword']);
	// $registrationdate = mysqli_real_escape_string($con, $_POST['registrationdate']);

	if($username == ''){
		$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>USERNAME CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
	}else if($fName == ''){
		$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>NAME CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
	}else if($occupation == ''){
		$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>OCCUPATION CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
	}else if($companyName == ''){
		$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>COMPANY NAME CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
	}else if($phone == ''){
		$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>PHONE NUMBER CAN\'T BE EMPTY</strong>  
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
	}else if($registrationdate == ''){
		$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>REGISTRATION DATE CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
	}else if($userpassword == ''){
		$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>PASSWORD CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
	}else{
		$Image = $_FILES['userimage']['name'];
		$Target = "assets/images/" . basename($_FILES['userimage']['name']);

	$registerSQL = "INSERT INTO useraccount VALUES('$username','$fName','$occupation','$companyName','$phone','$email','$userpassword','$Image','$registrationdate')";
	$registerResult = mysqli_query($con, $registerSQL);

	move_uploaded_file($_FILES['userimage']['tmp_name'], $Target);

	if ($registerResult) {
		$msg = '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>' . $username . '</strong> Registered Successfully
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
				<h4 class="breadcrumb-title">Register User</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>User Registration</li>
				</ul>
			</div>
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Registration</h4>
						</div>
						<div class="row">
							<div class="col-md-12">
								<?php echo $msg; ?>
							</div>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" method="POST" action="<?php $_PHP_SELF?>" enctype="multipart/form-data">

								<div class="">
									<div class="form-group row">
										<div class="col-sm-10  ml-auto">
											<h3>1. Personal Details</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label" for="fName">Full Name</label>
										<div class="col-sm-7">
											<input class="form-control" id="fName" name="fName" type="text" placeholder="Mark Anthony">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Occupation</label>
										<div class="col-sm-7">
											<input class="form-control" id="occupation" name="occupation" type="text" placeholder="CTO">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Company Name</label>
										<div class="col-sm-7">
											<input class="form-control" type="text" id="companyName" name="companyName" placeholder="Softech">

										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Phone No.</label>
										<div class="col-sm-7">
											<input class="form-control" id="phone" name="phone" type="number" placeholder="+120 012345 6789">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Email.</label>
										<div class="col-sm-7">
											<input class="form-control" id="email" name="email" type="email" placeholder="abc@somewhere.com">
										</div>
									</div>

									<div class="seperator"></div>

									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3>2. User Info</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Username</label>
										<div class="col-sm-7">
											<input class="form-control" id="username" name="username" type="text" placeholder="any username">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Password</label>
										<div class="col-sm-7">
											<input class="form-control" type="password" id="userpassword" name="userpassword" placeholder="**************************">
										</div>
									</div>
									<div class="form-group row form-group">
										<label class="col-sm-2 col-form-label" for="userimage">User Image</label>
										<div class="col-sm-7">
											<input type="file" class="form-control-file" id="userimage" name="userimage">
										</div>
									</div>
									<div class="form-group  row">
										<label class="col-sm-2 col-form-label ">Registration Date</label>
										<div class="col-sm-7">
											<input class="form-control" id="registrationdate" name="registrationdate" type="date" placeholder="">
										</div>
									</div>
									
								</div>
								<div class="">
									<div class="">
										<div class="row">
											<div class="col-sm-2">
											</div>
											<div class="col-sm-7">
												<button type="submit" id="submit" name="submit" value="submit" class="btn">Save changes</button>
												<button type="reset" class="btn-secondry">Cancel</button>
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
<script>
	$(document).ready(function() {
		$('.alert').click(function() {
			window.location.href = 'create-user.php';
		})
	})
</script>