<?php

	session_start();
	include 'connection.php';

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

	if ($hours >= 5 && $minutes <30 && $a =="pm") {
		
		$sql = "SELECT * FROM micp_students_profile,micp_attendance_table	WHERE micp_students_profile.micp_id != micp_attendance_table.studentId";
		$result = mysqli_query($conn,$sql);
		$ResultCheck = mysqli_num_rows($result);

		if ($ResultCheck > 0) {

			while ($row = mysqli_fetch_assoc($result)) {
				echo "".$row['studentId']." <br>";
			}
			
		}else{

		echo "NO STUDENT FOUND";
	}
		
	}

?>