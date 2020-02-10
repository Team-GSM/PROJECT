<?php
		
		date_default_timezone_set('Asia/Manila');

 		 //DATE FORMAT FOR TIME
 		date("h:i:s:a");
		$hours = date('h');  //HOURS
		$minutes = date('i'); //MINUTES
		$a = date('a'); //AM/PM
           

		if ($hours == 8 && $minutes > 0 && $a =='am') { //MORNING TIME IN

			echo "<button type='submit' name='AttendanceBtn' id='time-in-btn' style='width: 100%; margin-top: 2%;' class='btn btn-primary'>Time In</button>";

		}elseif($hours == 12 && $minutes <= 30 && $a =='pm'){ // MORNING TIME OUT

			echo "<button type='submit' name='AttendanceBtn' id='time-in-btn' style='width: 100%; margin-top: 2%;' class='btn btn-primary'>Time Out</button>";
		}elseif($hours == 1 && $minutes <= 30 && $a =='pm'){ // AFTERNOON TIME IN
			
			echo "<button type='submit' name='AttendanceBtn' id='time-in-btn' style='width: 100%; margin-top: 2%;' class='btn btn-primary'>Time In</button>";

		}elseif($hours == 4 && $minutes <= 30 && $a =='pm'){ // AFTERNOON TIME OUT
			
		echo "<button type='submit' name='AttendanceBtn' id='time-in-btn' style='width: 100%; margin-top: 2%;' class='btn btn-primary'>Time Out</button>";

		}else{
			echo "<button type='submit' name='time-in-btn' id='time-in-btn' style='width: 100%; margin-top: 2%;' class='btn btn-primary' disabled='disabled'>Time In</button>";
		}
?>