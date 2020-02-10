<?php
		session_start();
   
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.js"></script>
	<script src="../assets/js/jquery.js"></script>
  <!-- <script src="../assets/js/userPageTimer.js"></script> -->


	<style>
		#save-familyBg-btn:hover{

			background-color: red;
		}

		 * input{
    text-align: center;
    border: none;
    border-bottom: 1px solid lightgrey;
  }
  .StudentName input{
    border: none;
    border-bottom: 1px solid lightgrey;
  }
  .ASSR-container input{
    border: none;
    border-bottom: 1px solid lightgrey;
    width: 35%;
  }
  .DPN-container input{
    border: none;
    border-bottom: 1px solid lightgrey;
    width: 25%;
  }
  *.modal-header{

      color: #fff;
  }
    table tr td input{

    border: none;
  }
  table tr th{

      font-size: 80%;
  }
	</style>
</head>
<body style="overflow-y:  scroll;">
	<header>

		<div class="container-fluid bg-primary" style="padding: 1%;">
			<div class="row">
				<div class="col-sm-6 banner-container" style="margin-top: .5%;">
					<div style=" width: 15%; float: left; margin-top: -1%;">
						<img src="../assets/img/micp logo.png" style="width: 80%;">

					</div>
					<div style="width: 15%; float: left; margin-top: .8%;">
						<h1 style="color: #fff;">MICP</h1>
					</div>
					
				</div>
				<div class="col-sm-6 admin-login-container" >

					<p style="color: #fff; margin-left: 30%;">Login as Administartor</p>

					<form action="../model/Admin_login.php" method="POST">
						<div style="width: 43%; float: left; ">

							<input type="text" name="userName" id="username-input" class="form-control" placeholder="Enter Username" style="width: 100%; height: 25px;font-size: 80%;">

						</div>

						<div style="width: 55%; float: right;">

							<input type="Password" name="Password" placeholder="Enter Password" class="form-control" style="width: 80%; height: 25px; float: left; font-size: 80%;">
							<button type="submit" name="login-btn" style="float: right; border: 1px solid #f2f2f2; background: none;background-color: #007bff; color: white; padding: 0% 3% 0% 3%; border-radius: 5px; height: 25px;">Login</button>
						</div>
					</form>
				</div>
				
			</div>
		</div>
	</header>

	<div class="container-fluid" style="margin-top: 5%;">
		<div class="row">
			<div class="col-sm-5" style=" margin: auto; ">
				<h2 class="text-center">Attendace</h2>
			
				
				<p class="text-center">Click <i>Create Profile</i> first if you don't have ID number!!</p>
			        
			     	
			        <?php

			       			include 'time.php';
			        ?>
				<div class="Attendace-form-container" style="width: 100%; margin-bottom: 10%; ">

					<form action="../model/Attendance.php" method="POST">
					<input type="number" name="student-id" placeholder="Enter Student ID" class="form-control" style="width: 100%;" id="student-id-input">
					  
			        <!-- DISPLAYS TIME ACCORDING TO TIME STATE -->
			        <?php
			       			include 'attendanceButtons.php';
			        ?>
			        </form>
					
					<a href="form.php?btn=Clicked" id="Create-profile-btn" class="btn" style="margin-top: 2%; border: 1px solid #17a2b8; color: #007bff;">Create Profile?</a>
          <a href="#" id="Create-profile-btn" class="btn" style="margin-top: 2%; border: 1px solid #17a2b8; color: #007bff; float: right;">Forget Student Id?</a>
				</div>

				<p class="text-center text-primary">&copy;<i>Alright Reserve 2020</i></p>
			</div>
		</div>
	</div>

	<a href="deleteAllData.php" type="submit" class="btn btn-primary">DELETE ALL DATA</a>


	<!-- DISPLAY THE STUDENT ID -->
	<?php

			if (isset($_GET['studentId'])) {
				echo "      <!-- The Modal -->
				        <div class='modal' id='myModal' style='display: block; width: 100%; background-color: rgba(0,0,0,0.5);'>
				          <div class='modal-dialog' style='margin-top: 10%;'> 
				            <div class='modal-content'>
				            
				              <!-- Modal Header -->

				                    <div class='modal-header bg-primary'>
				                      <h4 class='modal-title'>STUDENT ID</h4>
				                      <button type='button' class='close' data-dismiss='modal' style='color: #fff;'>&times;</button>
				                    </div>
				                    
				                    <!-- Modal body -->
				                    <div class='modal-body'>
				                       		
				                       		<h5 class='text-center'>Here's Your Student Id ".$_GET['fname']." ".$_GET['lname']."</h5>
				                   			<h5 class='bg-primary text-white text-center' style='width: 30%; padding:3%; margin:auto; margin-top:5%; border-radius: 5px;' >".$_GET['studentId']."</h5>

				                    </div>
				                    
				                    <!-- Modal footer -->
				                    <div class='modal-footer bg-primary'  style='height: 40px;'>
				                    	
				                    </div>
				               
				          </div>
				        </div>
				   </div>
		
	";

	}

	?>

		

		<script>
			
			$(document).ready(function(){
				$(".close").click(function(){
					$("#myModal").fadeOut(300);
				})
			})
		</script>
				  

</body>
</html>