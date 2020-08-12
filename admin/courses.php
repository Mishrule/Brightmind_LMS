<?php
	// require_once('inc/lmsdb.php');
	require_once('.././inc/lmsdb.php');
	$msg = '';
	if(isset($_POST['submit'])){
		
		$courseCode = mysqli_real_escape_string($con, $_POST['courseCode']);
		$courseTitle = mysqli_real_escape_string($con, $_POST['courseTitle']);
		$courseDescription = mysqli_real_escape_string($con, $_POST['courseDescription']);
		$creditHours = mysqli_real_escape_string($con, $_POST['creditHours']);
		$courseLevel = mysqli_real_escape_string($con, $_POST['courseLevel']);
		$regDate = mysqli_real_escape_string($con, $_POST['regDate']);
		$courseStatus = 'Pending';
		// $agree = mysqli_real_escape_string($con, $_POST['agree']);

		if($courseCode == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>COURSE CODE CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($courseTitle == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>COURSE TITLE CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($courseDescription == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>COURSE DESCRIPTION CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($creditHours == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>COURSE HOURS CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($courseLevel == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>COURSE LEVEL CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else if($regDate == ''){
			$msg = '
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>REGISTRATION DATE CAN\'T BE EMPTY</strong>  
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			';
		}else{
			$Image = $_FILES['courseImage']['name'];
			$Target = "assets/images/".basename($_FILES['courseImage']['name']);
			
			$registerSQL = "INSERT INTO courses VALUES('$courseCode','$courseTitle','$courseDescription','$creditHours','$courseLevel','$courseStatus','$Image','$regDate')";
			$registerResult = mysqli_query($con, $registerSQL);

			move_uploaded_file($_FILES['courseImage']['tmp_name'], $Target);

			if($registerResult){
				$msg = '
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>'.$courseCode.'</strong> Registered Successfully
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
				<h4 class="breadcrumb-title">Create Course</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
					<li>User Profile</li>
				</ul>
			</div>
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Courses</h4>
						</div>
						<div class="widget-inner">
							<form class="edit-profile m-b30" enctype="multipart/form-data" method="POST" action="<?php $_PHP_SELF ?>">
							<div class="row">
								<div class="col-md-12">
									<?php echo $msg; ?>
								</div>
							</div>
								<div class="">
									<div class="form-group row">
										<div class="col-sm-10  ml-auto">
											<h3>1. Course Details</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Course Code</label>
										<div class="col-sm-7">
											<input class="form-control" id="courseCode" name="courseCode" type="text" placeholder="eg. ITE 111">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Course Title</label>
										<div class="col-sm-7">
											<input class="form-control" id="courseTitle" name="courseTitle" type="text" placeholder="eg. Foundamentals of Programming">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Course Description</label>
										<div class="col-sm-7">
											<textarea class="form-control" name="courseDescription" id="courseDescription" placeholder="A brief Description about the course" rows=3></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Credit Hours</label>
										<div class="col-sm-7">
											<input class="form-control" id="creditHours" name="creditHours" type="text" placeholder="3">
										</div>
									</div>

									<div class="seperator"></div>

									<div class="form-group row">
										<div class="col-sm-10 ml-auto">
											<h3>2. Other Detail</h3>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">course Level</label>
										<div class="col-sm-7">
											<select class="form-control text-black" id="courseLevel" name="courseLevel">
												
												<option value="Level_100">Level 100</option>
												<option value="Level_200">Level 200</option>
												<option value="Level_300">Level 300</option>
												<option value="Level_400">Level 400</option>
											</select>
											<!-- <input class="form-control" type="text" placeholder="5-S2-20 Dummy City, UK"> -->
										</div>
									</div>
									
									<div class="form-group row form-group">
										<label class="col-sm-2 col-form-label" id="courseImage" name="courseImage" for="courseImage">Course Image</label>
										<div class="col-sm-7">
											<input type="file" class="form-control-file" id="courseImage" name="courseImage">
										</div>
									</div>
									<div class="form-group  row">
										<label class="col-sm-2 col-form-label ">Registration Date</label>
										<div class="col-sm-7">
											<input class="form-control" id="regDate" name="regDate" type="date">
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
	<?php require_once('assets/inc/externaljs.php'); ?>
</body>


</html>
<script>
	$(document).ready(function(){
		$('.alert').click(function(){
			window.location.href = 'courses.php';
		})
	})
</script>