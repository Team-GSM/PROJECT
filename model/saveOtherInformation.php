<?php
	
	include 'connection.php';
	if (isset($_POST['save-otherInfo-btn'])) {
		
		
		 $AdminCase = $_POST['AdminCase'];
		 $CriminalCase= $_POST['CrimCase'];
		 $OtherPendingOffense = $_POST['OtherPendingOffense'];
		 $convictedCrime = $_POST['convictedCrime'];
		 $administrativeOffense = $_POST['administrativeOffense'];
		 $pendingShcolarship = $_POST['pendingShcolarship'];
		 $studentId = $_POST['studentId'];

		 $sql = "INSERT INTO micp_students_otherInfo (Pending_Administrative_Case,Pending_Criminal_Case,other_Pending_offense,Convicted_Crime,Convicted_Administrative_Offense,Pending_Shcolarship_TESDA, studentId) VALUES (' $AdminCase','$CriminalCase','$OtherPendingOffense','$convictedCrime','$administrativeOffense','$pendingShcolarship','$studentId')";
		 $result = mysqli_query($conn,$sql);
		   
		if (!$result) {
			header("Location: ../view/for.php?otherInfo=failed");
		}else{

			$sql = "SELECT * FROM micp_students_otherInfo ORDER BY studentId DESC;";
			$result = mysqli_query($conn,$sql);
			$rowId =mysqli_fetch_assoc($result);

			if (!$rowId) {
				header("Location: ../view/User_Page.php?studentId=somethingHappend");
			}else{

				$sql = "SELECT * FROM micp_students_profile,micp_students_otherInfo WHERE micp_students_profile.micp_id=micp_students_otherInfo.studentId ORDER BY studentId DESC;";
				$result = mysqli_query($conn,$sql);
				$ResultCheck = mysqli_num_rows($result);

				if ($ResultCheck > 0) {
					if($row = mysqli_fetch_assoc($result)) {
						header("Location: ../view/User_Page.php?studentId=".$rowId['studentId']."&fname=".$row['micp_firstname']."&lname=".$row['micp_surname']."");
					}
					
				}else{

					header("Location: ../view/User_Page.php?studentId=not+match");
				}
			}	

					

			
				
		
		}
		
	}else{

		header("Location: ../view/User_Page.php");
	}

	