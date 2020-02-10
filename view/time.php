<!DOCTYPE html>
<html>
<head>
	<title></title>
	

</head>
<body>


	<?php


		$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

			   if(strpos($fullUrl, "morningTimeIn=AlreadyTimeIn")){

			        		echo "<p class='alert-warning text-center' style='width: 50%;padding: 1%; margin:auto; margin-bottom:2%;' >YOUR ALREADY TIMED IN</p>";
			    }else if(strpos($fullUrl, "morningTimeIn=success")){
			        		echo "<p class='alert-success text-center' style='width: 50%;padding: 1%; margin:auto; margin-bottom:2%;' >".$_GET['name']." Your SuccessFully Timed In</p>";
			    }else if (strpos($fullUrl, "morningTimeIn=Student+Id+Does+not+Exist")) {

			        		echo "<p class='alert-danger text-center' style='width: 50%;padding: 1%; margin:auto; margin-bottom:2%;' >Student Id Does'nt Exist</p>";
			    }elseif(strpos($fullUrl, "morningTimeOut=success")){

			    			echo "<p class='alert-success text-center' style='width: 50%;padding: 1%; margin:auto; margin-bottom:2%;' >".$_GET['name']." Your SuccessFully Timed Out</p>";

			    }elseif(strpos($fullUrl, "afternoonTimeIn=success")){

			    			echo "<p class='alert-success text-center' style='width: 50%;padding: 1%; margin:auto; margin-bottom:2%;' >".$_GET['name']." Your SuccessFully Timed In</p>";

			    }
			    elseif(strpos($fullUrl, "afternoonTimeOut=success")){

			    			echo "<p class='alert-success text-center' style='width: 50%;padding: 1%; margin:auto; margin-bottom:2%;' >".$_GET['name']." Your SuccessFully Timed Out</p>";

			    }



		date_default_timezone_set('Asia/Manila');

 		 //DATE FORMAT FOR TIME
 		date("h:i:s:a");
		$hours = date('h');  //HOURS
		$minutes = date('i'); //MINUTES
		$a = date('a'); //AM/PM
           

		 if ($hours == 8 && $minutes <= 30 && $a =='am') { //MORNING TIME IN

		 	 echo "<p class='text-center '>Current State:&nbsp;&nbsp;&nbsp;<i>Morning Time In Available</i></p>";

		 }
		 elseif($hours == 12 && $minutes <=30 && $a =='pm'){ // MORNING TIME OUT

		 	 echo "<p class='text-center '>Current State:&nbsp;&nbsp;&nbsp;<i>Morning Time Out Available</i></p>";

		 }
		 elseif($hours == 1 && $minutes <=30 && $a =='pm'){ // AFTERNOON TIME IN
	
		 	echo "<p class='text-center '>Current State:&nbsp;&nbsp;&nbsp;<i>Afternoon Time In Available</i></p>";


		 }
		elseif($hours == 4 && $minutes <=30 && $a =='pm'){ // AFTERNOON TIME OUT
			
			echo "<p class='text-center '>Current State:&nbsp;&nbsp;&nbsp;<i>Afternoon Time Out Available</i></p>";

		}else{
			 echo "<p class='text-center '>Current State:&nbsp;&nbsp;&nbsp;<i>Unavailable</i></p>";
		}
	?>
</body>
</html>