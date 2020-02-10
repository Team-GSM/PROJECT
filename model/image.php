<?php

	include 'connection.php';
	
	if (isset($_FILES['profile'])) {
		
		$file = $_FILES['profile']['name'];

		print_r($file);
	}