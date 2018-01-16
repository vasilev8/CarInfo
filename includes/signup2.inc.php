<?php

if (isset($_POST['submit'])){
	
	include_once 'dbh.inc.php';
	
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];
	
	//Hasing the password
	$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
	//Insert the user into the database
	$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) 
	VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
	$result = mysqli_query($conn, $sql);
		header:("Location: ../Homepage.php");
		exit();
	}