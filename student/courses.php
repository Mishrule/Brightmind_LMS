<?php
require_once('../inc/lmsdb.php');
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
				<h4 class="breadcrumb-title">Courses</h4>
				<ul class="db-breadcrumb-list">
					<li><a href=dashboard.php><i class="fa fa-home"></i>Dashboard</a></li>
					<li>Courses</li>
				</ul>
			</div>
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>First and Second Semester Courses</h4>
						</div>
						<div class="widget-inner">
							
								
								<?php
								$level100CourseShow = '';
								$level100CourseSQL = "SELECT * FROM courses WHERE courselevel = '$login_level'";
								$level100CourseResult = mysqli_query($con, $level100CourseSQL);

								if (mysqli_num_rows($level100CourseResult) > 0) {
									while ($level100CourseRow = mysqli_fetch_array($level100CourseResult)) {
										$level100CourseShow .= '
										<div class="card-courses-list admin-courses">
											<div class="card-courses-media">
												<img src="../admin/assets/images/'.$level100CourseRow['courseImage'].'" alt="" />
											</div>
											<div class="card-courses-full-dec">
											<div class="card-courses-title">
												<h4>'.$level100CourseRow['coursetitle'].'</h4>
											</div>
											<div class="card-courses-list-bx">
												<ul class="card-courses-view">
													<li class="card-courses-user">
														
														<div class="card-courses-user-info">
															<h5>'.$level100CourseRow['coursecode'].'</h5>
															<h4>Course Code</h4>
														</div>
													</li>
													<li class="card-courses-categories">
														<h5>'.$level100CourseRow['credithours'].'</h5>
														<h4>CREDIT HOURS</h4>
													</li>
													<!--<li class="card-courses-review">
														<h5>3 Review</h5>
														<ul class="cours-star">
															<li class="active"><i class="fa fa-star"></i></li>
															<li class="active"><i class="fa fa-star"></i></li>
															<li class="active"><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
															<li><i class="fa fa-star"></i></li>
														</ul>
													</li>-->
													<li class="card-courses-stats">
														<a href="#" class="btn button-sm green radius-xl">'.$level100CourseRow['coursestatus'].'</a>
													</li>
													
												</ul>
											</div>
											<div class="row card-courses-dec">
												<div class="col-md-12">
													<h6 class="m-b10">Course Description</h6>
													<p>'.$level100CourseRow['coursedescription'].' </p>	
												</div>
												
											</div>
											
										</div>
										</div>
											';
									}
								}else{
									$level100CourseShow .= '
									<div><marquee>SORRY NO COURSES AT THE MOMENT</marquee></div>
									
									';
								}
									
								 echo $level100CourseShow;
								?>

							
							
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