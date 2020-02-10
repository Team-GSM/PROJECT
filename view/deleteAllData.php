<?php
	
	include '../model/connection.php';
	$sql = "DELETE FROM micp_attendace_table";

	mysqli_query($conn,$sql);

	if (!mysqli_query($conn,$sql)) {
		echo "failed";
	}else{
		echo "deleted";
	}