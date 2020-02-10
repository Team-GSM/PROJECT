<?php

	session_start();
	include 'connection.php';
		
	if (isset($_POST['AttendanceBtn'])) {
		
		$studentId = $_POST['student-id'];

		date_default_timezone_set('Asia/Manila');
		//DATE FORMAT FOR (YEAR, MONTH, DAY)
		date("M-d-Y");
		$year = date("M"); //MONTH
		$month = date("d"); //DAY
		$day = date("Y"); //YEAR

		 //DATE FORMAT FOR TIME
 		echo date("h:i:s:a");
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
				$sql = "SELECT * FROM micp_attendance_table WHERE StudentId='$studentId'";
						$result = mysqli_query($conn,$sql);
						$ResultCheck = mysqli_num_rows($result);

					//CHECK IF THER STUDENT ID ALREADY USED
					if ($ResultCheck > 0) {

							//IF THE STUDENT IS TIMED IN AND REDIRECT THER USER TO THE MAIN PAGE
							if ($row['Present']==null) {
								header("Location: ../view/User_Page.php?attendance=AlreadyTimeIn");
							}else{

								//TIME IN THE STUDENTS HERE
								$sql = "INSERT INTO micp_attendace_table (Present, year, day,month,StudentId) VALUES ('present','$year','$month','$day','$studentId')";

								mysqli_query($conn,$sql);

								while ($row = mysqli_fetch_assoc($resultProfile)) {

											header("Location: ../view/User_Page.php?attendance=success&name=".$row['micp_firstname']."");
										}

							}
					}else{
							
							//TIME IN THE STUDENTS HERE
							$sql = "INSERT INTO micp_attendace_table (Present, year, day,month,StudentId) VALUES ('present','$year','$month','$day','$studentId')";

								mysqli_query($conn,$sql);

								while ($row = mysqli_fetch_assoc($resultProfile)) {

									header("Location: ../view/User_Page.php?attendance=success&name=".$row['micp_firstname']."");
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

	