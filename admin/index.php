<?php require_once('.././inc/lmsdb.php'); ?>
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
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Dashboard</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Home</a></li>
					<li>Dashboard</li>
				</ul>
			</div>
			<!-- Card -->
			<div class="row">
				<?php
					$level100Show = 0;
					$countLevel100SQL = "SELECT COUNT(studentlevel) AS level100 FROM student WHERE studentlevel='level_100'";
					$countLevel100Result = mysqli_query($con, $countLevel100SQL);
					if(mysqli_num_rows($countLevel100Result)>0){
						while($level100Row = mysqli_fetch_array($countLevel100Result)){
							$level100Show = $level100Row['level100'];
						}
					}else{
						$level100Show = 0;
					}
					
				?>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg1">
						<div class="wc-item">
							<h4 class="wc-title">
								Total 
							</h4>
							<span class="wc-des">
								Level 100 Students
							</span>
							<span class="wc-stats">
								<span class="counter"><?php echo $level100Show; ?></span>
							</span>
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: <?php echo $level100Show .'%'; ?>;" aria-valuenow="50"
									aria-valuemin="0" aria-valuemax="<?php echo $level100Show; ?>"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Enrolled
								</span>
								<span class="wc-number ml-auto">
								<?php echo $level100Show; ?>%
								</span>
							</span>
						</div>
					</div>
				</div>
				<?php
					$level200Show = 0;
					$countLevel200SQL = "SELECT COUNT(studentlevel) AS level200 FROM student WHERE studentlevel='level_200'";
					$countLevel200Result = mysqli_query($con, $countLevel200SQL);
					if(mysqli_num_rows($countLevel200Result)>0){
						while($level200Row = mysqli_fetch_array($countLevel200Result)){
							$level200Show = $level200Row['level200'];
						}
					}else{
						$level200Show = 0;
					}
					
				?>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg2">
						<div class="wc-item">
							<h4 class="wc-title">
								Total
							</h4>
							<span class="wc-des">
								Level 200 Students
							</span>
							<span class="wc-stats counter">
							<?php echo $level200Show; ?>
							</span>
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: <?php echo $level200Show .'%'; ?>;" aria-valuenow="50"
									aria-valuemin="0" aria-valuemax="<?php echo $level200Show; ?>"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Enrolled
								</span>
								<span class="wc-number ml-auto">
								 <?php echo $level200Show; ?>%
								</span>
							</span>
						</div>
					</div>
				</div>
				<?php
					$level300Show = 0;
					$countLevel300SQL = "SELECT COUNT(studentlevel) AS level300 FROM student WHERE studentlevel='level_300'";
					$countLevel300Result = mysqli_query($con, $countLevel300SQL);
					if(mysqli_num_rows($countLevel300Result)>0){
						while($level300Row = mysqli_fetch_array($countLevel300Result)){
							$level300Show = $level300Row['level300'];
						}
					}else{
						$level300Show = 0;
					}
					
				?>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg3">
						<div class="wc-item">
							<h4 class="wc-title">
								Total
							</h4>
							<span class="wc-des">
								Level 300 Students
							</span>
							<span class="wc-stats counter">
							<?php echo $level300Show; ?>
							</span>
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: <?php echo $level300Show .'%'; ?>;" aria-valuenow="50"
									aria-valuemin="0" aria-valuemax=" <?php echo $level300Show; ?>"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Enrolled
								</span>
								<span class="wc-number ml-auto">
								<?php echo $level300Show; ?>%
								</span>
							</span>
						</div>
					</div>
				</div>
				<?php
					$level400Show = 0;
					$countLevel400SQL = "SELECT COUNT(studentlevel) AS level400 FROM student WHERE studentlevel='level_400'";
					$countLevel400Result = mysqli_query($con, $countLevel400SQL);
					if(mysqli_num_rows($countLevel400Result)>0){
						while($level400Row = mysqli_fetch_array($countLevel400Result)){
							$level400Show = $level400Row['level400'];
						}
					}else{
						$level400Show = 0;
					}
					
				?>
				<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
					<div class="widget-card widget-bg4">
						<div class="wc-item">
							<h4 class="wc-title">
								Total
							</h4>
							<span class="wc-des">
								Level 400 Students
							</span>
							<span class="wc-stats counter">
							<?php echo $level400Show; ?>
							</span>
							<div class="progress wc-progress">
								<div class="progress-bar" role="progressbar" style="width: <?php echo $level400Show .'%'; ?>;" aria-valuenow="50"
									aria-valuemin="0" aria-valuemax=" <?php echo $level400Show; ?>"></div>
							</div>
							<span class="wc-progress-bx">
								<span class="wc-change">
									Enrolled
								</span>
								<span class="wc-number ml-auto">
								<?php echo $level400Show; ?>%
								</span>
							</span>
						</div>
					</div>
				</div>
			</div>
			<!-- Card END -->
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-8 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Number of Registered Courses</h4>
						</div>
						<?php
						// Count Level 100 Courses
							$level100CourseShow = 0;
							$countLevel100CourseSQL = "SELECT COUNT(courselevel) AS level100Course FROM courses WHERE courselevel='Level_100'";
							$countLevel100CourseResult = mysqli_query($con, $countLevel100CourseSQL);
							if(mysqli_num_rows($countLevel100CourseResult)>0){
								while($level100CourseRow = mysqli_fetch_array($countLevel100CourseResult)){
									$level100CourseShow = $level100CourseRow['level100Course'];
								}
							}else{
								$level100CourseShow = 0;
							}

							// Count Level 400 Courses
							$level400CourseShow = 0;
							$countLevel400CourseSQL = "SELECT COUNT(courselevel) AS level400Course FROM courses WHERE courselevel='Level_400'";
							$countLevel400CourseResult = mysqli_query($con, $countLevel400CourseSQL);
							if(mysqli_num_rows($countLevel400CourseResult)>0){
								while($level400CourseRow = mysqli_fetch_array($countLevel400CourseResult)){
									$level400CourseShow = $level400CourseRow['level400Course'];
								}
							}else{
								$level400CourseShow = 0;
							}

							// Count Level 200 Courses
							$level200CourseShow = 0;
							$countLevel200CourseSQL = "SELECT COUNT(courselevel) AS level200Course FROM courses WHERE courselevel='Level_200'";
							$countLevel200CourseResult = mysqli_query($con, $countLevel200CourseSQL);
							if(mysqli_num_rows($countLevel200CourseResult)>0){
								while($level200CourseRow = mysqli_fetch_array($countLevel200CourseResult)){
									$level200CourseShow = $level200CourseRow['level200Course'];
								}
							}else{
								$level200CourseShow = 0;
							}

							// Count Level 300 Courses
							$level300CourseShow = 0;
							$countLevel300CourseSQL = "SELECT COUNT(courselevel) AS level300Course FROM courses WHERE courselevel='Level_300'";
							$countLevel300CourseResult = mysqli_query($con, $countLevel300CourseSQL);
							if(mysqli_num_rows($countLevel300CourseResult)>0){
								while($level300CourseRow = mysqli_fetch_array($countLevel300CourseResult)){
									$level300CourseShow = $level300CourseRow['level300Course'];
								}
							}else{
								$level300CourseShow = 0;
							}
							
						?>
						<div class="widget-inner">
							<div class="new-user-list">
								<ul>
									<li>
										<span class="new-users-text">
											<a href="#" class="new-users-name">Level 100 </a>
											<span class="new-users-info">Registered Courses </span>
										</span>
										<span class="new-users-btn">
											<a href="#" class="badge outline"><?php echo $level100CourseShow; ?></a>
										</span>
									</li>
									<li>
										<span class="new-users-text">
											<a href="#" class="new-users-name"> Level 200 </a>
											<span class="new-users-info">Registered Courses </span>
										</span>
										<span class="new-users-btn">
											<a href="#" class="badge outline"><?php echo $level200CourseShow; ?></a>
										</span>
									</li>
									<li>
										<span class="new-users-text">
											<a href="#" class="new-users-name"> Level 300 </a>
											<span class="new-users-info">Registered Courses </span>
										</span>
										<span class="new-users-btn">
											<a href="#" class="badge outline"><?php echo $level300CourseShow; ?></a>
										</span>
									</li>
									<li>
										<span class="new-users-text">
											<a href="#" class="new-users-name"> Level 400 </a>
											<span class="new-users-info">Registered Courses </span>
										</span>
										<span class="new-users-btn">
											<a href="#" class="badge outline"><?php echo $level400CourseShow; ?></a>
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				

				 <div class="col-lg-6 m-b30">
					
				</div> 
				<div class="col-lg-6 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Lecturers</h4>
						</div>
						<div class="widget-inner">
							<div class="new-user-list">
							<ul>
								<?php 
									// Count Level 100 Courses
									$lecturersShow = '';
									$lecturersSQL = "SELECT * FROM lecturer ";
									$lecturersResult = mysqli_query($con, $lecturersSQL);
									if(mysqli_num_rows($lecturersResult)>0){
										while($lecturersRow = mysqli_fetch_array($lecturersResult)){
											$lecturersShow .= '
											<li>
												<span class="new-users-pic">
													<img src="assets/images/'.$lecturersRow['lecturerimage'].'" alt="lecturer Image here" />
												</span>
												<span class="new-users-text">
													<a href="#" class="new-users-name">'.$lecturersRow['lecturername'].' </a>
													<span class="new-users-info">'.$lecturersRow['lecturerdepartment'].' </span>
												</span>
												<span class="new-users-btn">
													<a href="#" class="btn button-sm outline">'.$lecturersRow['lecturercontact'].'</a>
												</span>
											</li>
											';
										}
									}else{
										$lecturersShow .= '
										<li>
											
											<span class="new-users-text">
												<a href="#" class="new-users-name">No LECTURER HAS BEEN REGISTERED YET </a>
											</span>
											
										</li>
										';
									}
									echo $lecturersShow;
								?>
								
									
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Basic Calendar</h4>
						</div>
						<div class="widget-inner">
							<div id="calendar"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<div class="ttr-overlay"></div>

	<!-- External Javascript -->
	<?php require_once('assets/inc/externaljs.php');?>
</body>


</html>