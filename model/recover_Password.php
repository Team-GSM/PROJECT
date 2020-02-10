<?php

		session_start();
	include 'connection.php';

	if (isset($_POST['recover-btn'])) {
		
		$Fpassusername = $_POST['Fpass-username'];

		if (empty($Fpassusername)) {

			header("Location: ../view/Administrator_Page.php?recover=empty");

		}else{

			$sql = "SELECT  * FROM admin_login WHERE admin_username = '$Fpassusername'";
			$result = mysqli_query($conn, $sql);

			$ResultCheck = mysqli_num_rows($result);

			if ($ResultCheck > 0) {
				
				if ($row = mysqli_fetch_assoc($result)) {
					$pass = $row['admin_password'];
					$REhashed = password_needs_rehash($pass, PASSWORD_DEFAULT);

					// header("Location: ../view/Administrator_Page.php?recover=success");

					// echo "<script>alert('".."')</script>";

					echo "$pass";

				
				}
				
			}else{

				header("Location: ../view/Administrator_Page.php?recover=error");

			}
		}

			
		
	}else{

		header("Location: ../view/Administrator_Page.php");
	}