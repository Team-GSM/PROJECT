<?php

	include 'connection.php';

	if(isset($_POST['login-btn'])){

		 $username = $_POST['userName'];
		 $password = $_POST['Password'];

		

		if (empty($username) || empty($password)) {

			header("Location: ../view/User_Page.php?login=empty");

		}else {
				$sql = "SELECT * FROM admin_login where admin_username = '$username'";
				$result = mysqli_query($conn, $sql);
				$ResultCheck = mysqli_num_rows($result);

				if ($ResultCheck < 1 ) {


				header("Location: ../view/User_Page.php?login=incorrect_email");
					
				}else{
					
					if ($row = mysqli_fetch_assoc($result)) {
						
						// DEHASHING PASSWORD

						$hashedPasswordCheck = password_verify($password, $row['admin_password']);
						if ($hashedPasswordCheck === true){
							
							session_start();

							$_SESSION['id'] = $row['adminId'];
							$_SESSION['username'] = $row['admin_username'];

							header("Location: ../view/admin_dashboard.php?login=success");

							
						}elseif($hashedPasswordCheck === false){

							header("Location: ../view/User_Page.php?login=incorrect_password");
						}
					}
				}
		}
	}else{

		header("Location: ../index.php");
	}