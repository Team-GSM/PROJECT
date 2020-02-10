<?php

	session_start();
	include 'connection.php';

	if (isset($_POST['save-familyBg-btn'])) {
		
		 $fathers_name = $_POST['fathers_name'];
		 $F_occupation = $_POST['F_occupation'];
		 $F_income = $_POST['F_income'];
		 $mothers_name = $_POST['mothers_name'];
		 $M_occupation = $_POST['M_occupation'];
		 $M_income = $_POST['M_income'];
		 $othr_src_fam_income = $_POST['othr_src_fam_income'];
		 $total_monthly_fam_income = $_POST['total_monthly_fam_income'];
		 $frst_name = $_POST['Frst_name'];
		 $frst_age = $_POST['Frst_age'];
		 $scnd_name = $_POST['scnd_name'];
		 $scnd_age = $_POST['scnd_age'];
		 $thrd_name = $_POST['thrd_name'];
		 $thrd_age = $_POST['thrd_age'];
		 $frth_name = $_POST['frth_name'];
		 $frth_age = $_POST['frth_age'];
		 $fth_name = $_POST['fth_name'];
		 $fth_age = $_POST['fth_age'];
		 $studentId = $_POST['studentId'];


		if (empty($fathers_name) || empty($F_occupation) || empty($F_income) || empty( $mothers_name ) || empty($M_occupation) || empty($M_income)  ) {
			
			header("Location: ../view/form.php?pinfo=success&academic_Background=empty");
		}else{


			

				$sql = "INSERT INTO micp_students_familyBg(fatherName,fatherOccupation,fatherIncome,motherName,			motherOccupation,motherIncome,OtherSourceFamilyIncome, TotalMonthlyFamilyIncome ,FirstSiblingName, FirstSiblingAge, SecondSiblingName, SecondSiblingAge,ThirdSiblingName,ThirdSiblingAge,FourthSiblingName,FourthSiblingAge,FifthSiblingName,FifthSiblingAge,studentId)
				 VALUES (' $fathers_name','$F_occupation','$F_income','$mothers_name','$M_occupation','$M_income','$othr_src_fam_income','$total_monthly_fam_income','$frst_name','$frst_age','$scnd_name','$scnd_age','$thrd_name','$thrd_age','$frth_name','$frth_age','$fth_name','$fth_age','$studentId')";

			mysqli_query($conn, $sql);

			header("Location: ../view/form.php?family_Background=success&id=$studentId");
		}

		
		
	}else{
		header("Location: ../view/User_Page.php");
	}

	