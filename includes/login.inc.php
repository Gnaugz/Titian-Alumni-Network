<?php

if (isset($_POST['login-submit'])) {
	
	require 'dbh.inc.php';
	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];
	if (empty($mailuid) || empty($password)) {
		header("location: ../index.php?error=emptyfields");
		exit();
	} else {
		
	}

} else {
	header("location: ../index.php");
	exit();
}