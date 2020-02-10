<?php

	session_start();
	include 'connection.php';

	if (isset($_POST['save-academicBg-btn'])) {
		
		$highschool = $_POST['highschool'];
		$year_graduated = $_POST['year_graduated'];
		$genAve = $_POST['genAve'];
		$first_school = $_POST['first_school'];
		$first_course = $_POST['first_course'];
		$second_school = $_POST['second_school'];
		$second_course = $_POST['second_course'];
		$third_school = $_POST['third_school'];
		$third_course = $_POST['third_course'];
		$studentId = $_POST['studentId'];
		if (empty($highschool) || empty($year_graduated) || empty($genAve)) {
			header("Location: ../view/form.php?family_Background=success&academic_Background=empty");
		}else{

				$sql = "INSERT INTO micp_students_academicBg(micp_highScholl, micp_yearGraduated, micp_genAverage, micp_first_choice_school, micp_first_choice_course, micp_second_choice_school, micp_second_choice_course, micp_third_choice_school, micp_third_choice_course,studentId) VALUES ('$highschool', '$year_graduated', '$genAve', '$first_school', '$first_course', '$second_school', '$second_course', '$third_school', '$third_course','$studentId')";
			$result = mysqli_query($conn, $sql);



				header("Location: ../view/form.php?academic_Background=success&id=$studentId");

		}

	}else{
		header("Location: ../view/User_Page.php");
	}