<?php
	


		date_default_timezone_set('Asia/Manila');

		//DATE FORMAT FOR TIME
 		date("h:i:s:a");
		$hours = date('h');  //HOURS
		$minutes = date('i'); //MINUTES
		$a = date('a'); //AM/PM


		//DATE FORMAT FOR (YEAR, MONTH, DAY)
		date("M-d-Y");
		$year = date("M"); //MONTH
		$month = date("d"); //DAY
		$day = date("Y"); //YEAR

		if ($hours == 8 && $minutes <= 30 && $a =='am') { //MORNING TIME IN
			header("Location: ../view/User_Page.php?state=morningTimeIn-available");

		}elseif($hours == 12 && $minutes <= 30 && $a =='pm'){ // MORNING TIME OUT
			header("Location: ../view/User_Page.php?state=morningTimeOut-available");

		}elseif($hours == 1 && $minutes <= 30 && $a =='pm'){ // AFTERNOON TIME IN
			header("Location: ../view/User_Page.php?state=AfternoonTimeIn-available");

		}elseif($hours == 4 && $minutes <= 30 && $a =='pm'){ // AFTERNOON TIME OUT
			header("Location: ../view/User_Page.php?state=AfternoonTimeOut-available");
			
		}else{
			// header("Location: ../view/User_Page.php?state=Unavailable");
		}


		

		



		

?>