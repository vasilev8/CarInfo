<?php

session_start();
include_once 'includes/dbh.inc.php';
$id = $_SESSION['u_id'];

if (isset($_POST['submit'])){
	$file = $_FILES['file'];
	
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	
	$allowed = array('jpg', 'jpeg', 'png', 'pdf');
	
	if(in_array($fileActualExt, $allowed)){
		if($fileError === 0){
			if($fileSize < 300000){
				$fileNameNew = "profile".$id."." .$fileActualExt;
				$fileDestination = 'uploads/'.$fileNameNew;
				move_uploaded_file($fileTmpName, $fileDestination);
				$sql = "UPDATE profileimg SET status=0 WHERE userid='$id';";
				$result = mysqli_query($conn, $sql);
					echo '<script language="javascript">';
					echo 'alert("Uploading is successful!")';
					echo '</script>';
					echo '<script>window.location.href = "profile-page.php";</script>';
					exit;
			} else{
				echo '<script language="javascript">';
				echo 'alert("Your file is greater than 30MB!")';
				echo '</script>';
				echo '<script>window.location.href = "profile-page.php";</script>';
				exit;
			}
		}else{
			echo '<script language="javascript">';
			echo 'alert("There was an error uploading your file!")';
			echo '</script>';
			echo '<script>window.location.href = "profile-page.php";</script>';
			exit;
		}
	} else{
		echo "You cannot upload files of this type!";
		echo '<script language="javascript">';
		echo 'alert("You cannot upload files of this type!")';
		echo '</script>';
		echo '<script>window.location.href = "profile-page.php";</script>';
		exit;
	}
	
}
?>