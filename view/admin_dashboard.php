<?php
		
		session_start();
		 if (!isset($_SESSION['id'])) {
     			
     			header("Location: User_Page.php");	
    	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/Admin_dashboard.js"></script>
</head>
<style>

		*{
			padding: 0%;
			margin: 0%;
		}


		.navbar .navbar-nav{

			width: 100%;  

		}
		.navbar .navbar-nav .nav-item a{

			color: #ffffff;
			padding-left: 5px;
			width: 100%;

		}
		.navbar .navbar-nav li{

			margin-top: 5%;

		}
		table{
			width: 100%;

		}
		table thead tr th {
			border: 1px solid lightgrey;
			padding:5px;
		}
		table tbody tr td {
			border: 1px solid lightgrey;
			padding:5px;
		}
		ul li a {
			outline: none;
		}


</style>
<body>

		<!-- A vertical navbar -->
		<div class="left-navBar-container  bg-primary " style="width: 15%; float: left; height: 100vh; display: block; padding:0%;">

			<div class="profile-container" style="width: 100%; margin-top: 5%; ">

					<img src="../assets/img/defualt-profile.png" style="width: 30%; margin-left: 33%; border-radius: 50pc;">
				
			</div>
			<nav class="navbar" style="width: 100%; padding: 0%; margin-top: 5%; overflow: hidden">

				  <!-- Links -->
				  <ul class="navbar-nav" >
				    <li class="nav-item	input-group-prepend" id="nav1">
				      
				        <img src="../assets/img/attendanceLogo.png" class="input-group-text" style="border: none; background: none; width: 25%; height: 35px; border-radius: 50%; margin-top: 2%;">
				        <a class="nav-link" href="#">Attendance</a>
			
				      
				    </li>
				    <li class="nav-item input-group-prepend" id="nav2">
				      <img src="../assets/img/delete.png" class="input-group-text" style="border: none; background: none; width: 25%; height: 35px; border-radius: 50%; margin-top: 2%;">
				      <a class="nav-link" href="#">Delete</a>
				    </li>
				    <li class="nav-item input-group-prepend" id="nav3">
				      <img src="../assets/img/edit.png" class="input-group-text" style="border: none; background: none; width: 25%; height: 35px; border-radius: 50%; margin-top: 2%;">
				      <a class="nav-link" href="#">Edit</a>
				    </li>
				    <li class="nav-item input-group-prepend" id="nav4">
				      <img src="../assets/img/student.png" class="input-group-text" style="border: none; background: none; width: 25%; height: 35px; border-radius: 50%; margin-top: 2%;">
				      <a class="nav-link" href="#">Student Profiles</a>
				    </li>
				    <li class="nav-item input-group-prepend" id="nav5">
				      <img src="../assets/img/setting.png" class="input-group-text" style="border: none; background: none; width: 25%; height: 35px; border-radius: 50%; margin-top: 2%;">
				      <a class="nav-link" href="#">Admin Settings</a>
				    </li>

				   
				  </ul>

				</nav>
		</div>

		<!-- BUTTON TO CLOSE/OPEN LEFT NAVBAR -->
		<!-- <div class="button" style="float: left;">
										
								<button id="open-close-sideNav">open</button>

		</div> -->

		<!-- HEADER -->
		<div class="container-fluid" style="padding:0%;">
			<div class="row">
				<div class="col-sm-12">
						
						<p class="text-center display-4" style="color: #007bff; margin-top: 2%;" >MICP MANAGEMENT SYSTEM</p>
						
				</div>
				
			</div>
		</div>

		<div class="container-fluid" style="margin-top: 2%; ">
			<div class="row">
				<div class="col-sm-8">

					<p style="margin-left: 8%; font-size: 120%;" class="ddisplay-4"><i style="color:#007bff;">Loged in as:</i> Admin</p>
					
				</div>
				<div class="col-sm-4">

					<button id="change-btn" class="btn btn-primary" style="float: left; font-size: 80%;">Change Admin Login</button>
					<a href="../model/admin_logout.php" id="logout-btn" class="btn btn-danger text-white" style="float: right; font-size: 80%;">Log Out</a>
					
				</div>
			</div>
		</div>

		<div class="container-fluid" style="margin-top: 2%; border-top: 1px ridge lightgrey">
			<div class="row">
				<div class="col-sm-3" style="margin-top: 2%; border: 1px solid lightgrey; margin-left: 6%; border-radius: 5px; height: 150px;">
					<p>NUMBER OF PRESENT STUDENT</p>
				</div>

				<div class="col-sm-3" style="margin-top: 2%; border: 1px solid lightgrey; margin-left: 6%; border-radius: 5px; height: 150px;">
					<p>NUMBER OF PRESENT STUDENT</p>
				</div>

				<div class="col-sm-3" style="margin-top: 2%; border: 1px solid lightgrey; margin-left: 6%; border-radius: 5px; height: 150px;">
					<p>NUMBER OF PRESENT STUDENT</p>
				</div>

				
			</div>
		</div>

		<div class="container-fluid" style="margin-top: 4%;">
			<div class="row">
				<div class="col-sm-11" style="margin:auto;">

					<table>
						<thead class="text-center">
							<tr>
								<th>Student's Name</th>
								<th>Student's ID</th>
								<th>Daily Fare</th>
								<th>Municipality</th>
								<th>Education</th>
								<th>No. of Days Presents</th>
								<th>Allowance</th>
								
							</tr>
						</thead>
						<tbody class="text-center">
								<tr>
									<td>James Ried</td>
									<td>009911</td>
									<td>100</td>
									<td>Mayorga</td>
									<td>Senior High Graduate</td>
									<td>15</td>
									<td>1300</td>
								</tr>
						</tbody>
					</table>
					
				</div>
				
			</div>
			
		</div>

		<div class="change-admin-login-form-container" style="display: none; width: 100%; height: 100vh; background-color: rgba(0,0,0,0.3); position: absolute; top: 0%;">

			<!-- The Modal -->
			<div class="modal" id="myModal" style=" display: block; margin-top: 3%;">
			  <div class="modal-dialog">
			    <div class="modal-content">

			      <!-- Modal Header -->
			      <div class="modal-header bg-primary text-white">
			        <h4 class="modal-title">Change Admin Login</h4>
			        <button type="button" class="close" data-dismiss="modal" id="close-modal">&times;</button>
			      </div>

			      <!-- Modal body -->

			     
					
				      <div class="modal-body" style="padding: 10%;">

				      <form action="../model/change_Admin_Login.php" method="POST">
				      	<div style="border: 1px solid lightgrey; margin-top: 5%;border-radius: 5px; width: 100%; margin: auto; padding: 2%;">
				      		<img src="../assets/img/defualt-profile.png" style="position: absolute; width: 15%; border-radius: 50%; top: 4%; left:43%;">
				      		<div style="margin-top: 15%; width: 100%;">
				      			<label style="float: left; width: 25%; margin-top: 2%;">Username:</label>
				        	    <input type="text" name="username" placeholder="Enter Username" class="text-center form-control" style="width: 75%;">
				      		</div>

				      		<div style="margin-top: 5%; width: 100%;">
						      		<label style="width: 25%; float: left;">Password:</label>
									<input type="password" name="password" placeholder="Enter Password" class="text-center form-control" style="width: 75%;">
				      		</div>

				        	<div style="margin-top: 5%; width: 100%;">
						      	   <label style="width: 25%; float: left;">Re-Type:</label>
							       <input type="password" name="Cpassword" placeholder="Re-Type Password" class="text-center form-control" style="width: 75%;"><br>
				      		</div>

							
						</div>
							
				      </div>

				      <!-- Modal footer -->
				      <div class="modal-footer bg-primary">
				        <button type="submit" class="btn text-white" name="change-Admin-login-btn"style="border: 1px solid #ffffff;">Save Changes</button>
				      </div>
			      </form>
			    </div>
			  </div>
			</div>

		</div>

		<script>
			$(document).ready(function(){

				$("#change-btn").click(function(){
					$(".change-admin-login-form-container").fadeIn(300);
				})
				$("#close-modal").click(function(){
					$(".change-admin-login-form-container").fadeOut(300);
				})
			})
		</script>
	
				
</body>
</html>