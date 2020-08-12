<?php require_once('.././inc/lmsdb.php'); ?>
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
				<h4 class="breadcrumb-title">Manage Lecturer</h4>
				<ul class="db-breadcrumb-list">
					<li><a href=dashboard.php><i class="fa fa-home"></i>Dashboard</a></li>
					<li>Manage Lecturer</li>
				</ul>
			</div>
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Manage Lecturer</h4>
						</div>
						<div class="widget-inner">
							
							<div class="row">

								<div class="col-md-8">
									<input class="form-control col-md-4" type="text" placeholder="Search by course code/Title" id="searchCode" name="searchCode" />
								</div>
								<div class="col-md-4">
									<div class="col-md-12">

										<select class="col-md-12" id="lim" name="lim">
											<option value="10">10</option>
											<option value="20">20</option>
											<option value="50">50</option>
											<option value="100">100</option>
											<option value="250">250</option>
											<option value="1000000">All</option>
										</select>
									</div>
									</select>
								</div>

							</div><br>
							<div class="row">
								<div class="col-md-12">
									<div id="showTable" class="table table-responsive"></div>

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
<script>
	$(document).ready(function() {
		show();
		// ----------------- Populate database table
		function show() {
			var lim = $('#lim').val();
			var show = 'show';
			$.ajax({
				url: 'inc/lecturerScript.php',
				method: 'POST',
				data: {
					show,
					lim
				},
				success: function(data) {
					$('#showTable').html(data);
				}

			})
		}

		// -----------------Search from databasae
		$('#searchCode').keyup(function() {
			var search = $('#searchCode').val();
			$.ajax({
				url: 'inc/lecturerScript.php',
				method: 'POST',
				data: {
					search
				},
				success: function(data) {
					$('#showTable').html(data);
				}

			})
		})
		// -----------------LIMIT VIEW
		$('#lim').change(function() {
			var Viewlim = $('#lim').val();

			$.ajax({
				url: 'inc/lecturerScript.php',
				method: 'POST',
				data: {
					Viewlim
				},
				success: function(data) {
					$('#showTable').html(data);
				}

			})
		})
		// ================ EDIT BUTTON CLICK
		$(document).on('click', '.edit', function() {
			var coursecode = $(this).attr('id');
			// alert(coursecode);
			var courseid = coursecode;
			// console.log(courseid);
			$.ajax({
				url: 'inc/lecturerScript.php',
				method: 'POST',
				data: {
					courseid
				},
				dataType: 'json',
				success: function(data) {
					$('#updatecoursecode').val(data.coursee_code);
					$('#currentStatus').val(data.updateStatus);
					console.log(data);
				}

			})
		})
		// ---------------------Update status
		// $('#save').click(function() {
		// 	var updatecoursecode = $('#updatecoursecode').val();
		// 	var change_Status = $('#change_Status').val();
		// 	var save = $('#save').val();
		// 	$.ajax({
		// 		url: 'inc/lecturerScript.php',
		// 		method: 'POST',
		// 		data: {
		// 			updatecoursecode,
		// 			change_Status,
		// 			save
		// 		},
		// 		success: function(data) {
		// 			$('.showUpdateStatus').html(data);
		// 			setTimeout(() => {
		// 				window.location.reload();
		// 			}, 3000);
		// 			console.log(data);
		// 		}

		// 	})
		// })
		// ================ DELETE STATUS
		$(document).on('click', '.del', function() {
			var deleteCourse = $(this).attr('id');

			if (confirm('ARE YOU SURE YOU WANT TO DELETE THIS COURSE')) {
				$.ajax({
					url: 'inc/lecturerScript.php',
					method: 'POST',
					data: {
						deleteCourse
					},
					// dataType: 'json',
					success: function(data) {
						alert(data);
						window.location.reload();
					}

				})
			}


		})
	})
</script>

