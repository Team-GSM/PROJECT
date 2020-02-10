<?php

		session_start();
	include 'connection.php';

	if (isset($_POST['change-Admin-login-btn'])) {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$Confirmpassword = $_POST['Cpassword'];

		if (empty($username) || empty($password)) {

			header("Location: ../view/admin_dashboard.php?change=empty");

		}else{
			

			if ($password != $Confirmpassword) {

			
			header("Location: ../view/admin_dashboard.php?change=password_did_not_matched");
			}else{
				
				//hashing password
			$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
			$sql = "UPDATE admin_login SET admin_username = '$username', admin_password = '$hashedPassword' WHERE adminId='1'";

			mysqli_query($conn, $sql);
			
			header("Location: ../view/admin_dashboard.php?change=success");

			}
		}
	}else{

		header("Location: ../view/Administrator_Page.php");
	}