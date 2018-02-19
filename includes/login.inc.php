<?php

session_start();

	if (isset($_POST['submit'])){
		
		include 'dbh.inc.php';
		
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];
		
		//Error handlers
		//Check if inputs are empty
		if (empty($uid) || empty($pwd)){
			echo '<script language="javascript">';
			echo 'alert("Please, fill all the inputs!")';
			echo '</script>';
			echo '<script>window.location.href = "../Homepage.php";</script>';
			exit;
		} 
		else{
			$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck < 1){
				echo '<script language="javascript">';
				echo 'alert("There is not user with such name!")';
				echo '</script>';
				echo '<script>window.location.href = "../Homepage.php";</script>';
				exit;
			}
			else{
				if($row = mysqli_fetch_assoc($result)){
					//De-hashing the password
					$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
					if($hashedPwdCheck == false){
						echo '<script language="javascript">';
						echo 'alert("Incorrect password!")';
						echo '</script>';
						echo '<script>window.location.href = "../Homepage.php";</script>';
						exit;
					}
					elseif($hashedPwdCheck == true){
						//LOGIN THE USER HERE
						$_SESSION['u_id'] = $row['user_id'];
						$_SESSION['u_first'] = $row['user_first'];
						$_SESSION['u_last'] = $row['user_last'];
						$_SESSION['u_email'] = $row['user_email'];
						$_SESSION['u_uid'] = $row['user_uid'];
						echo '<script language="javascript">';
						echo 'alert("Login is successful!")';
						echo '</script>';
						echo '<script>window.location.href = "../Homepage.php";</script>';
						exit;
					}
				}
			}
		}
	}
	else {
		echo '<script language="javascript">';
		echo 'alert("Error!")';
		echo '</script>';
		echo '<script>window.location.href = "../Homepage.php";</script>';
		exit;
	}

?>