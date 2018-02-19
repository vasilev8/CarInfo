<?php
if (isset($_POST['submit'])){
	
	include_once 'dbh.inc.php';
	
	$first = $_POST['first'];
	$last = $_POST['last'];
	$email = $_POST['email'];
	$uid = $_POST['uid'];
	$pwd = $_POST['pwd'];

		//error handlers
		//check if the characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last) ){
			echo '<script language="javascript">';
			echo 'alert("Some of the characters you entered are not valid")';
			echo '</script>';
			echo '<script>window.location.href = "../signup.php";</script>';
			exit;
		}else {
			//check if email is vaild
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo '<script language="javascript">';
				echo 'Your e-mail is not valid!")';
				echo '</script>';
				echo '<script>window.location.href = "../signup.php";</script>';
				exit;
			//check if user is already taken
			}else {
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				if ($resultCheck > 0){
					echo '<script language="javascript">';
					echo 'alert("Username already exist!")';
					echo '</script>';
					echo '<script>window.location.href = "../signup.php";</script>';
					exit;
				}else {
					//Hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) 
					VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
					mysqli_query($conn, $sql);
					$sql = "SELECT * FROM users WHERE user_uid='$uid'";
					$result = mysqli_query($conn, $sql);
					//Insert profile picture
					if(mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)){
							$userid = $row['user_id'];
							$sql = "INSERT INTO profileimg (userid, status) 
							VALUES ('$userid', 1)";
							mysqli_query($conn, $sql);
						}
					} else{
						echo "You have an error!";
					}
					echo '<script language="javascript">';
					echo 'alert("Registration successful!")';
					echo '</script>';
					echo '<script>window.location.href = "../Homepage.php";</script>';
					exit;
				}
			}
		}	
}else{
	
}
?>