<?php
	// require_once('inc/lmsdb.php');
	require_once('.././inc/lmsdb.php');
	$msg = '';
	if(isset($_POST['submit'])){
		$lecturertitle = mysqli_real_escape_string($con, $_POST['lecturertitle']);
		$lecturername = mysqli_real_escape_string($con, $_POST['lecturername']);
		$lecturercontact = mysqli_real_escape_string($con, $_POST['lecturercontact']);
		$lecturerDepartment = mysqli_real_escape_string($con, $_POST['lecturerDepartment']);
		// $courseLevel = mysqli_real_escape_string($con, $_POST['courseLevel']);
		$registrationdate = mysqli_real_escape_string($con, $_POST['registrationdate']);
		// $courseStatus = 'Pending';
		// $agree = mysqli_real_escape_string($con, $_POST['agree']);

		if($lecturertitle == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>LECTURER TITLE CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($lecturername == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>LECTURER NAME CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($lecturercontact == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>LECTURER CONTACT CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($lecturerDepartment == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>LECTURER DEPARTMENT CAN\'T BE EMPTY</strong>  
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
		}else{
			$Image = $_FILES['lecturerimage']['name'];
		$Target = "assets/images/".basename($_FILES['lecturerimage']['name']);
		
		$registerSQL = "INSERT INTO lecturer VALUES('','$lecturertitle','$lecturername','$lecturercontact','$lecturerDepartment','$Image','$registrationdate')";
		$registerResult = mysqli_query($con, $registerSQL);

		move_uploaded_file($_FILES['lecturerimage']['tmp_name'], $Target);

		if($registerResult){
			$msg = '
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>'.$lecturertitle.' ' .$lecturername.'</strong> Registered Successfully
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
<?php require_once('assets/inc/head.php');?>
<body class="ttr-opened-sidebar ttr-pinned-sidebar">
	
	<!-- header start -->
	<?php require_once('assets/inc/header.php');?>
	<!-- header end -->
<!-- Left sidebar menu start -->
<?php require_once('assets/inc/aside.php');?>
<!-- Left sidebar menu end -->

	<!--Main container start -->
	<!--Main container start -->
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Lecture Registration</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>Register A Lecturer</li>
				</ul>
			</div>
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Lecturer</h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" method="POST" action="<?php $_PHP_SELF?>" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-12">
									<?php echo $msg; ?>
								</div>
							</div>
								<div class="">
									<div class="form-group row">
										<div class="col-sm-10  ml-auto">
											<h3>1. Lecturer Details</h3>
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Lecturer Title</label>
										<div class="col-sm-7">
											<input class="form-control" id="lecturertitle" name="lecturertitle" type="text" placeholder="eg. Prof, Dr,Mr, Mrs">
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Lecturer Name</label>
										<div class="col-sm-7">
											<input class="form-control" id="lecturername" name="lecturername" type="text" placeholder="eg. Surname first">
										</div>
									</div>

									<div class="seperator"></div>

									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3>2. Other Detail</h3>
										</div>
									</div>
									
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Lecturer Contact</label>
										<div class="col-sm-7">
											<input class="form-control" id="lecturercontact" name="lecturercontact" type="number" placeholder="0244-###-###">
										</div>
									</div>
									<div class="form-group row form-group">
										<label class="col-sm-2 col-form-label" for="courseImage">Lecturer Department</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" id="lecturerDepartment" name="lecturerDepartment" placeholder="eg. Information Technology">
										</div>
									</div>
									<div class="form-group row form-group">
										<label class="col-sm-2 col-form-label" for="lecturerimage">Lecturer Image</label>
										<div class="col-sm-7">
											<input type="file" class="form-control-file" id="lecturerimage" name="lecturerimage">
										</div>
									</div>
									<div class="form-group  row">
										<label class="col-sm-2 col-form-label ">Registration Date</label>
										<div class="col-sm-7">
											<input class="form-control" id="registrationdate" name="registrationdate" type="date" placeholder="000702">
										</div>
									</div>
									
									<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

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
<?php require_once('assets/inc/externaljs.php');?>
</body>


</html>
<script>
	$(document).ready(function(){
		$('.alert').click(function(){
			window.location.href = 'courses.php';
		})
	})
</script>