<?php
	// create cnnection
	$conn = mysqli_connect('localhost','root','','igoteldb');
	

	// Check Connection
	if(mysqli_connect_errno()){
		// connection failed
		echo 'Failed to connect to MySQL'. mysqli_connect_errno(); 
	}