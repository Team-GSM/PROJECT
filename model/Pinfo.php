<?php
	
	include 'connection.php';

	if (isset($_POST['save-Pinfo-btn'])) {

			$sname = $_POST['surname'];
			$fname = $_POST['firstname'];
			$Mname = $_POST['middlename'];
			$age = $_POST['age'];
			$sex = $_POST['sex'];
			$status = $_POST['status'];
			$religion = $_POST['religion'];
			$bdate = $_POST['bdate'];
			$pbirth = $_POST['pbirth'];
			$nationality = $_POST['nationality'];
			$address = $_POST['address'];
			$municipality = $_POST['municipality'];
			$zipcode = $_POST['zipcode'];
			$tel_no = $_POST['tel_no'];
			$mobile_no = $_POST['mobile_no'];
			$dailyFare = $_POST['dailyFare'];

		//FOR IMAGE
			$file = $_FILES['profile'];
			$file_name  = $_FILES['profile']['name'];
			$file_type  = $_FILES['profile']['type'];
			$file_tmp_name  = $_FILES['profile']['tmp_name'];
			$file_error  = $_FILES['profile']['error'];
			$file_size  = $_FILES['profile']['size'];

			$fileExtension = explode('.', $file_name);
			$fileActualExten = strtolower(end($fileExtension));
		
			$allowed = array('jpg','png','jpeg');

		//CHECK IF THERE IS AN EMPTY FIELDS
		if (empty($file_name) || empty($sname) || empty($fname) || empty($Mname) || empty($age) || empty($sex) || empty($status) || empty($religion) || empty($bdate) || empty($pbirth) || empty($nationality) || empty($address) || empty($municipality) || empty($zipcode) || empty($tel_no) || empty($mobile_no)) {
			
			 header("Location: ../view/form.php?create=empty");


		}else{

			if (in_array($fileActualExten, $allowed)) {
		
					if ($file_error === 0 ) {
						
						if($file_size < 1000000){

									$fileNameNew = $file_name;
									$fileDestination = '../assets/img/uploads/'.$fileNameNew;
									move_uploaded_file($file_tmp_name, $fileDestination);

									$sql = "INSERT INTO micp_students_profile(micp_profilePic, micp_surname, micp_firstname, micp_middlename, micp_age, micp_sex, micp_status, micp_religion, micp_bdate, micp_bplace, micp_nationality, micp_address, micp_municipality, micp_zipcode, micp_telnumber, micp_mblnumber, daily_Fare) 
										VALUES ('$file_name','$sname','$fname','$Mname','$age','$sex','$status','$religion','$bdate','$pbirth','$nationality','$address','$municipality', '$zipcode','$tel_no','$mobile_no', '$dailyFare')";

									 $result = mysqli_query($conn, $sql);
									
									if (!$result) {
										header("Location: ../view/form.php?pinfo=failed");
									}else{

										$sql = "SELECT * FROM micp_students_profile WHERE micp_surname='$sname' AND micp_firstname='$fname'";
										$result = mysqli_query($conn, $sql);
										$ResultCheck = mysqli_num_rows($result);

										if ($ResultCheck > 0) {
											while ($row = mysqli_fetch_assoc($result)) {
												header("Location: ../view/form.php?pinfo=success&id=".$row['micp_id']."");
											}
											
										}
									}
									
										 	
									
									
								
										

							
						}
					}else{
						echo "THERE WAS AN ERROR UPLOADING YOUR FILE";
					}
			}else{

				echo "YOU CANNO'T THIS TYPE!!!!!";
			}
		}

		

	}else{

		header("Location: ../view/User_Page.php");
	}

?>