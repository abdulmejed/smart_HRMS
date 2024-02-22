<?php 
	session_start();
	error_reporting(0);
	include_once('includes/config.php');
	include_once("includes/functions.php");
	if(strlen($_SESSION['userlogin'])==0){
		header('location:login.php');
	}elseif (isset($_GET['delid'])) {
		$rid=intval($_GET['delid']);
	  $sql="DELETE from holidays where id=:rid";
	  $query=$dbh->prepare($sql);
	  $query->bindParam(':rid',$rid,PDO::PARAM_STR);
	  $query->execute();
	   echo "<script>alert('Holiday deleted Successfully');</script>"; 
	   echo "<scirpt>window.location.href='holidays.php';</script>";
	}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Smarthr - Bootstrap Admin Template">
		<meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, management, minimal, modern, accounts, invoice, html5, responsive, CRM, Projects">
        <meta name="author" content="Dreamguys - Bootstrap Admin Template">
        <meta name="robots" content="noindex, nofollow">
        <title>Holidays - HRMS admin template</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Lineawesome CSS -->
        <link rel="stylesheet" href="assets/css/line-awesome.min.css">
		
		<!-- Datetimepicker CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>
	<div class="container">

<br><br>

<h1>Edit or Update Data Using PHP & MySQL Ajax</h1>

<br><br>

<div class="row">
	<div class="col-md-4">
		<h3>Add New Employee</h3>

		<form action="save.php" id="form">
			<div class="form-group">
				<label for="email">Email</label>
				<input class="form-control" type="text" name="email">
			  </div>
			  <div class="form-group">
				<label for="first_name">First Name</label>
				<input class="form-control" type="text" name="first_name">
			  </div>
			  <div class="form-group">
				<label for="last_name">Last Name</label>
				<input class="form-control" type="text" name="last_name">
			  </div>
			  <div class="form-group">
				<label for="address">Address</label>
				<textarea class="form-control" type="text" name="address" rows="3"></textarea>
			  </div>
			  <button type="button" class="btn btn-primary" id="btnSubmit">Submit</button>
		</form>
	</div>

	<div class="col-md-8">
		<h3>List of Employees</h3>
		<div id="employees-list"></div>
	</div>
</div>
</div>

<!-- The Modal -->
<div class="modal" id="edit-employee-modal">
  <div class="modal-dialog">
	<div class="modal-content">

		  <!-- Modal Header -->
		  <div class="modal-header">
			<h4 class="modal-title">Edit Employee</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
		  </div>

		  <!-- Modal body -->
		  <div class="modal-body">
			<form action="update.php" id="edit-form">
				<input class="form-control" type="hidden" name="id">
				<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control" type="text" name="email">
				  </div>
				  <div class="form-group">
					<label for="first_name">First Name</label>
					<input class="form-control" type="text" name="first_name">
				  </div>
				  <div class="form-group">
					<label for="last_name">Last Name</label>
					<input class="form-control" type="text" name="last_name">
				  </div>
				  <div class="form-group">
					<label for="address">Address</label>
					<textarea class="form-control" type="text" name="address" rows="3"></textarea>
				  </div>
				  <button type="button" class="btn btn-primary" id="btnUpdateSubmit">Update</button>
				  <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
			</form>


		  </div>

	</div>
  </div>
</div>


<!-- Must put our javascript files here to fast the page loading -->

<!-- jQuery library -->
<	<?php include_once("includes/modals/holidays/add_holiday.php"); ?>
				<!-- /Add Holiday Modal -->
				
				<!-- Edit Holiday Modal -->
				<?php include_once("includes/modals/holidays/edit_holiday.php"); ?>
				<!-- /Edit Holiday Modal -->

				<!-- Delete Holiday Modal -->
				<?php include_once("includes/modals/holidays/delete_holiday.php"); ?>
				<!-- /Delete Holiday Modal -->
				
            </div>
			<!-- /Page Wrapper -->
			
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		
		<!-- Datetimepicker JS -->
		<script src="assets/js/moment.min.js"></script>
		<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/app.js"></script>
		
    </body>
</html>