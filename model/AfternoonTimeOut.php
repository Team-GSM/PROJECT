<?php

	session_start();
	include 'connection.php';
		
	if (isset($_POST['afternoonTimeOut-btn'])) {
		
		$studentId = $_POST['student-id'];

		date_default_timezone_set('Asia/Manila');
		//DATE FORMAT FOR (YEAR, MONTH, DAY)
		date("M-d-Y");
		$month = date("M"); //MONTH
		$day = date("d"); //DAY
		$year = date("Y"); //YEAR

		 //DATE FORMAT FOR TIME
 		$time = date("h:i:s:a");
		$hours = date('h');  //HOURS
		$minutes = date('i'); //MINUTES
		$a = date('a'); //AM/PM
           
		if (empty($studentId)) {
			
			header("Location: ../view/User_Page.php?attendance=empty");
		}else{

			//CHECK IF THE ENTERED STUDENT ID EXIST IN THE DATABASE
			$sql = "SELECT * FROM micp_students_profile WHERE micp_id = '$studentId';";
			$resultProfile = mysqli_query($conn, $sql);
			$ResultCheck = mysqli_num_rows($resultProfile);

			if ($ResultCheck > 0) {

				//CHECK IF THE STUDENT IS ALREADY TIMED IN
				$sql = "SELECT * FROM micp_attendance_table WHERE studentId = '$studentId'";
						$result = mysqli_query($conn,$sql);
						$ResultCheck = mysqli_num_rows($result);

					//CHECK IF THER STUDENT ID ALREADY USED
					if ($ResultCheck > 0) {

						if ($row = mysqli_fetch_assoc($result)) {
								
								$sql = "UPDATE micp_attendance_table SET afternoonTimeOut = '$time' WHERE studentId = '$studentId'" ;
								mysqli_query($conn,$sql);
										
										// echo 'UPDATED';
									
									if ($row = mysqli_fetch_assoc($resultProfile)) {

											header("Location: ../view/User_Page.php?afternoonTimeOut=success&name=".$row['micp_firstname']."");
										}
							
						}
					}
			}else{

				header("Location: ../view/User_Page.php?attendance=Student+Id+Does+not+Exist");
			}
		}

	}else{

		header("Location: ../index.php");
	}


?>

	