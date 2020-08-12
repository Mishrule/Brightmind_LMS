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
				<h4 class="breadcrumb-title">Manage Student</h4>
				<ul class="db-breadcrumb-list">
					<li><a href=dashboard.php><i class="fa fa-home"></i>Dashboard</a></li>
					<li>Manage Student</li>
				</ul>
			</div>
			<div class="row">
				<!-- Your Profile Views Chart -->
				<div class="col-lg-12 m-b30">
					<div class="widget-box">
						<div class="wc-title">
							<h4>Manage Student</h4>
						</div>
						<div class="widget-inner">
							
							<div class="row">

								<div class="col-md-8">
									<input class="form-control col-md-4" type="text" placeholder="Search by Index number/Fullname" id="searchCode" name="searchCode" />
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
				url: 'inc/studentScript.php',
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
				url: 'inc/studentScript.php',
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
				url: 'inc/studentScript.php',
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
			var indexnumber = $(this).attr('id');
			// alert(indexnumber);
			var studentIndex = indexnumber;
			// console.log(studentIndex);
			$.ajax({
				url: 'inc/studentScript.php',
				method: 'POST',
				data: {
					studentIndex
				},
				dataType: 'json',
				success: function(data) {
					
// change_Level
					$('#updateindexnumber').val(data.stdindex);
					$('#currentLevel').val(data.updatelevel);
					console.log(data);
				}

			})
		})
		// ---------------------Update status
		$('#save').click(function() {
			var updateSindexnumber = $('#updateindexnumber').val();
			var studentLevel = $('#change_Level').val();
			var save = $('#save').val();
			$.ajax({
				url: 'inc/studentScript.php',
				method: 'POST',
				data: {
					updateSindexnumber,
					studentLevel,
					save
				},
				success: function(data) {
					$('.showUpdateStatus').html(data);
					setTimeout(() => {
						window.location.reload();
					}, 3000);
					console.log(data);
				}

			})
		})
		// ================ DELETE STATUS
		$(document).on('click', '.del', function() {
			var deleteStudent = $(this).attr('id');

			if (confirm('ARE YOU SURE YOU WANT TO DELETE THIS STUDENT')) {
				$.ajax({
					url: 'inc/studentScript.php',
					method: 'POST',
					data: {
						deleteStudent
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

<!-- Modal -->
<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">CHANGE COURSE STATUS</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12 showUpdateStatus"></div>
				</div>

				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Index number</label>

					<div class="col-sm-7">
						<input class="form-control" id="updateindexnumber" name="updateindexnumber" type="text" placeholder="3" disabled>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Current Level</label>
					<div class="col-sm-7">
						<input class="form-control" id="currentLevel" name="currentLevel" type="text" placeholder="3" disabled>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Change Level To</label>
					<div class="col-sm-7">
						<select class="form-control text-black" id="change_Level" name="change_Level">
							<option value="level_100">Level 100</option>
							<option value="level_200">Level 200</option>
							<option value="level_300">Level 300</option>
							<option value="level_400">Level 400</option>
						</select>
						<!-- <input class="form-control" type="text" placeholder="5-S2-20 Dummy City, UK"> -->
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" id="save" name="save" value="save" class="btn btn-primary">Save changes</button>
			</div>
			<div class="col-md-12 showUpdateStatus"></div>
		</div>

	</div>
</div>