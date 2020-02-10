<?php
		
		date_default_timezone_set('Asia/Manila');

 		 //DATE FORMAT FOR TIME
 		date("h:i:s:a");
		$hours = date('h');  //HOURS
		$minutes = date('i'); //MINUTES
		$a = date('a'); //AM/PM
           
           	

		if ($hours == 8 && $minutes <=30 && $a =='am') { //MORNING TIME IN

		echo "
	 	<form action='../model/MorningTimeIn.php' method='POST'>
		 		<input type='number' name='student-id' placeholder='Enter Student ID' class='form-control' style='width: 100%;' id='student-id-input'>
	 		<button type='submit' name='morningTimeIn-btn' id='time-in-btn' style='width: 100%; margin-top: 2%;' class='btn btn-primary'>Time In</button>
			</form>
		 	";

		 }
 		elseif($hours == 12 && $minutes <=30 && $a =='pm'){ // MORNING TIME OUT

		 	echo "
		 	<form action='../model/MorningTimeOut.php' method='POST'>
		 		<input type='number' name='student-id' placeholder='Enter Student ID' class='form-control' style='width: 100%;' id='student-id-input'>
		 		<button type='submit' name='morningTimeOut-btn' id='time-in-btn' style='width: 100%; margin-top: 2%;' class='btn btn-primary'>Time Out</button>
		 	</form>";
		 }
		elseif($hours == 1 && $minutes <= 30 && $a =='pm'){ // AFTERNOON TIME IN
			
			echo "
			<form action='../model/AfternoonTimeIn.php' method='POST'>
					<input type='number' name='student-id' placeholder='Enter Student ID' class='form-control' style='width: 100%;' id='student-id-input'>
					<button type='submit' name='afternoonTimeIn-btn' id='time-in-btn' style='width: 100%; margin-top: 2%;' class='btn btn-primary'>Time In</button>
			</form>";

		}

		elseif($hours ==4 && $minutes <=30 && $a =='pm'){ // AFTERNOON TIME OUT
			
		echo "
			<form action='../model/AfternoonTimeOut.php' method='POST'>
				   <input type='number' name='student-id' placeholder='Enter Student ID' class='form-control' style='width: 100%;' id='student-id-input'>
				   <button type='submit' name='afternoonTimeOut-btn' id='time-in-btn' style='width: 100%; margin-top: 2%;' class='btn btn-primary'>Time Out</button>
			</form>";

		}else{
			echo "
				  <input type='number' name='student-id'  disabled='disabled' placeholder='Enter Student ID' class='form-control' style='width: 100%;' id='student-id-input'>
					<button type='submit' name='time-in-btn' id='time-in-btn' style='width: 100%; margin-top: 2%;' class='btn btn-primary' disabled='disabled'>Time In</button>";
		}
?>