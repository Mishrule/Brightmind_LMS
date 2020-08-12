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
				<h4 class="breadcrumb-title">External Resources</h4>
				<ul class="db-breadcrumb-list">
					<li><a href="dashboard.php"><i class="fa fa-home"></i>Home</a></li>
					<li>External Resources</li>
				</ul>
			</div>
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>External Resources</h4>
						</div>
						<div class="widget-inner">
							<div class="card-courses-list admin-review">
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>Coursera</h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											
											<li class="card-courses-review">
												<h5>5 Review</h5>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
												</ul>
											</li>
											<li class="card-courses-categories">
												<h5>Date</h5>
												<h4>10/12/2019</h4>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Best Quality Product</h6>
											<p>Coursera is a website that partners with universities and organizations around the world. This brings a wide variety of topics and perspectives to one searchable database.
												Coursera is a powerful tool for free online education, and includes courses from many top universities, museums and trusts. This gives the site an extremely wide range of in-depth courses.. </p>
										</div>
										<div class="col-md-12">
											<a href="http://www.coursera.org" target="_blank" class="btn">Study From Coursera</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-courses-list admin-review">
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>Khan Academy</h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											
											<li class="card-courses-review">
												<h5>5 Review</h5>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
												</ul>
											</li>
											<li class="card-courses-categories">
												<h5>Date</h5>
												<h4>10/12/2020</h4>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Best Quality Product</h6>
											<p>Partnering with many post secondary schools, Khan Academy offers a useable, well organized interface. Also curating many courses from around the web, Khan Academy offers impressive depth on many different subjects.

												Among the more well known educational sites, Khan Academy is also incredibly useable, which may make it easier to keep learning goals. </p>
										</div>
										<div class="col-md-12">
											<a href="https://www.khanacademy.org" target="_blank" class="btn">Learn From Khan Academy</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-courses-list admin-review">
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>Open Culture Online Courses</h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											
											<li class="card-courses-review">
												<h5>5 Review</h5>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
												</ul>
											</li>
											<li class="card-courses-categories">
												<h5>Date</h5>
												<h4>10/12/2020</h4>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Best Quality Product</h6>
											<p>If you are struggling to find exactly the material you are looking for, try Open Culture’s listing of free online education courses. The page highlights 1000 lectures, videos and podcasts from universities around the world. The site features a lot of material found only on universities private sites, all in easy to browse categories. This means you can find hundreds of university courses, without having to visit and search each university’s own site.

												Open Culture’s list features courses from England, Australia, Wales and many state universities around the United States. A very helpful resource for finding many courses in one area of study. </p>
										</div>
										<div class="col-md-12">
											<a href="www.openculture.com/freeonlinecourses" target="_blank" class="btn">Open Culture Online Courses</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-courses-list admin-review">
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>Udemy</h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											
											<li class="card-courses-review">
												<h5>5 Review</h5>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
												</ul>
											</li>
											<li class="card-courses-categories">
												<h5>Date</h5>
												<h4>10/12/2020</h4>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Best Quality Product</h6>
											<p>Udemy’s free courses are similar in concept to Coursera’s but additionally allows users to build custom courses from lessons.

												Working with many top professors and schools, the site mixes the customizable platform of other sites with a heavy emphasis on top quality content. This is another site however, that mixes free and paid content. </p>
										</div>
										<div class="col-md-12">
											<a href="https://www.udemy.com" target="_blank" class="btn">Learn From Udemy</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-courses-list admin-review">
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>Academic Earth</h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											
											<li class="card-courses-review">
												<h5>5 Review</h5>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
												</ul>
											</li>
											<li class="card-courses-categories">
												<h5>Date</h5>
												<h4>10/12/2020</h4>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Best Quality Product</h6>
											<p>Another site with courses from many different schools is Academic Earth. Much like the three sites above, Academic Earth brings together top notch courses from many different sources, and focuses on offering a wide variety of subjects.

												Academic Earth lists courses by subject and school, so it might be easier to find what you’re looking for. </p>
										</div>
										<div class="col-md-12">
											<a href="www.academicearth.org" target="_blank" class="btn">Learn From Academic Earth</a>
										</div>
									</div>
								</div>
							</div>
							<div class="card-courses-list admin-review">
								<div class="card-courses-full-dec">
									<div class="card-courses-title">
										<h4>edX</h4>
									</div>
									<div class="card-courses-list-bx">
										<ul class="card-courses-view">
											
											<li class="card-courses-review">
												<h5>5 Review</h5>
												<ul class="cours-star">
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
													<li class="active"><i class="fa fa-star"></i></li>
												</ul>
											</li>
											<li class="card-courses-categories">
												<h5>Date</h5>
												<h4>10/12/2020</h4>
											</li>
										</ul>
									</div>
									<div class="row card-courses-dec">
										<div class="col-md-12">
											<h6 class="m-b10">Best Quality Product</h6>
											<p>Another great option for free online education is edX. Also bringing together courses from many different schools, the site has impressive, quality information for everyone. edX covers a great range of topics. </p>
										</div>
										<div class="col-md-12">
											<a href="www.edx.org" target="_blank" class="btn">Learn From edX</a>
										</div>
									</div>
								</div>
							</div>
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