<?php 
	require_once('../inc/lmsdb.php');
	// require_once('../session.php');
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
	<main class="ttr-wrapper">
		<div class="container-fluid">
			<div class="db-breadcrumb">
				<h4 class="breadcrumb-title">Student Dashboard</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="#"><i class="fa fa-home"></i>Dashboard</a></li>
					<!-- <li>Dashboard</li> -->
				</ul>
			</div>	
			<div class="row">
				<div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 col-12"><marquee>WELCOME TO STUDENT DASHBOARD</marquee></div>
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 col-12">
					<div class="text-center">STUDENT DASHBOARD</div>
					<hr>
				</div>
			</div>
			<!-- Card -->
			<div class="row">
				<?php 
					$level100Show = '';
					$level100SQL = "SELECT * FROM courses WHERE courselevel ='$login_level'";
					$level100Result = mysqli_query($con, $level100SQL);

					if(mysqli_num_rows($level100Result)>0){
						while($level100ROW = mysqli_fetch_array($level100Result)){
							$level100Show .='
							<div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-12">
							<div class="widget-card widget-bg1">					 
								<div class="wc-item">
									<h4 class="wc-title">
										'.$level100ROW['coursetitle'].'
									</h4>
									<span class="wc-des">
										Credit Hours <span class="counter">'.$level100ROW['credithours'].'</span> Hours 
									</span>
									<span class="wc-stats">
										<!-- <span class="counter">113</span>  -->
									</span>		
									<div class="progress wc-progress">
										<div class="progress-bar" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<span class="wc-progress-bx">
										<span class="wc-change">
										Course Code: '.$level100ROW['coursecode'].'
										</span>
										<span class="wc-number ml-auto">
											
										</span>
									</span>
								</div>				      
							</div>
						</div>
							';
						}
					}else{
						$level100Show .= '
						<div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 col-12">
						
						<div class="widget-card widget-bg1">					 
							<div class="wc-item">
								<h4 class="wc-title">
									<marquee>SORRY COURSE AT THE MOMENT ' . mysqli_error($con) . '</marquee>
								</h4>
							</div>			      
						</div>
					</div>
						';
					}
					echo $level100Show;
				?>
			
			</div>
			
			<!-- Card END -->
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-8 m-b30">
					
				</div>
				<!-- Your Profile Views Chart END-->
				
				
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

    <?php require_once('assets/inc/externaljs.php');?>
</body>


</html>