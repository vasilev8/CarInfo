<?php
//Insert comments into the Database
function setComments($conn){
	if (isset($_POST['commentSubmit'])){
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO comments (uid, date, message) VALUES('$uid', '$date', '$message')";
		$result = mysqli_query($conn, $sql);
	}
}
//Get and post comments
function getComments($conn){
	$sql = "SELECT * FROM comments ORDER BY date ASC LIMIT 0, 20";
	$result = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($result)){
		$id = $row['uid'];
		$sql2 = "SELECT * FROM users WHERE user_id='$id'";
		$result2 = mysqli_query($conn, $sql2);
		
		if($row2 = mysqli_fetch_assoc($result2)){
			echo "<div class='comment-box'><p>";
			echo $row2['user_uid']."<br>";
			echo $row['date']."<br>";
			echo nl2br($row['message']);
			echo "</p>";
			
		if (isset($_SESSION['u_id'])){
			if($_SESSION['u_id'] == $row2['user_id']){
				$id = $_SESSION['u_id'];
				echo "<form class='delete-form' method='POST' action='".deleteComments($conn, $id)."'>
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<button type='submit' name='commentDelete'>Delete</button>
				</form>
				<form class='edit-form' method='POST' action='editcomment.php'>
					<input type='hidden' name='cid' value='".$row['cid']."'>
					<input type='hidden' name='uid' value='".$row['uid']."'>
					<input type='hidden' name='date' value='".$row['date']."'>
					<input type='hidden' name='message' value='".$row['message']."'>
					<button>Edit</button>
				</form>";
			}
		}	
		echo "</div>";
		}
	}
}
//Edit comments
function editComments($conn){
	if (isset($_POST['commentSubmit'])){
		$cid = $_POST['cid'];
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];
		
		$sql = "UPDATE comments SET message='$message' WHERE cid='$cid'";
		$result = mysqli_query($conn, $sql);
		echo '<script>window.location.href = "VW-Golf.php";</script>';
		exit;
	}
}
//Delete comments
function deleteComments($conn, $id){
	if (isset($_POST['commentDelete'])){
		$cid = $_POST['cid'];
		
		$sql = "DELETE FROM comments WHERE cid='$cid' AND uid='$id'";
		$result = mysqli_query($conn, $sql);
		echo '<script>window.location.href = "VW-Golf.php";</script>';
		exit;
	}
}