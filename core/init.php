<?php

$db = mysqli_connect('127.0.0.1', 'root', '', 'store');

	if(mysqli_connect_errno()){
		echo 'Database Connection Failed with following errors: ' . mysqli_connect_error();
		die();
	} 
?>