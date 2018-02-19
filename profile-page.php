<?php
	include_once 'includes/dbh.inc.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile-page</title>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="css/MyCSS.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<!--Navigation-->
<div class="top">
	<div class="wrapper">
    	<div class="top-logo"><h1><a href="Homepage.php"></a></h1></div>
    	<div class="top-menu">
            <a href="Homepage.php" id="home">Начало</a>
			<a href="Articles.php" id="article">Статии</a>
            <a href="All.php" id="allbrands">Всички марки</a>
			<a href="Wallpapers.php" id="wallpapers">Wallpapers</a>
			
			<?php
				if (isset($_SESSION['u_id'])){
					echo '<a href="profile-page.php" class="active" id="profile-link">Профил</a>';
					
					echo '<form class="logout" action="includes/logout.inc.php" method="POST">
						<a href="signup.php" class="signup" style="width:50px; height:50px; display:none"></a>
						<button type="submit" name="submit">Logout</button>
						</form>';
				}
				else {
					echo '<form class="login" action="includes/login.inc.php" method="POST">
						<a href="signup.php" class="signup" style="width:50px; height:50px; display:none"></a>
						<input type="text" name="uid" placeholder="Username/E-mail">
						<input type="password" name="pwd" placeholder="Password">
						<button type="submit" name="submit">Login</button>
						<a href="signup.php" style="width:9%; height: 30px; padding-top:9px; font-size: 13px; cursor: pointer; background-color: #FFF; color: black; float:right; line-height: 10px;">Sign up</a> 
						</form>';
				}
			?>
			
		</div>
    </div>
</div>

<!--Section-->
<section>
	<div class="main">
		<div class="main-left" style="border: 1px solid #ff9700; margin-top: 5px;">
			<?php
				$sql = "SELECT * FROM users WHERE user_uid = '".$_SESSION['u_uid']."'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0){
					while ($row = mysqli_fetch_assoc($result)){
						echo "<div class='profilepage-right'>";
						echo "<div>" . 'Username - ' . $row['user_uid'] . "</div>";
						echo "<div>" . 'First name - ' . $row['user_first'] . "</div>";
						echo "<div>" . 'Last name - ' . $row['user_last'] . "</div>";
						echo "</div>";
						$id = $row['user_id'];
						$sqlImg = "SELECT * FROM profileimg WHERE userid='$id'";
						$resultImg = mysqli_query($conn, $sqlImg);
						while ($rowImg = mysqli_fetch_assoc($resultImg)){
							echo "<div class='profilepage-left'>";
							echo "<p style='color: white; margin: 0px; text-align: center;'>Profile picture</p>";
								if ($rowImg['status'] == 0){
									$filename = "uploads/profile".$id."*";
									$fileinfo = glob($filename);
									$fileext = explode(".", $fileinfo[0]);
									$fileactualext = $fileext[1];
									echo "<img src='uploads/profile".$id.".".$fileactualext."?".mt_rand()."'>";
								} else{
									echo "<img src='uploads/profiledefault.jpg'>";
								}
							echo "<form class='upload' action='upload.php' method='POST' enctype='multipart/form-data'>";
								echo "<input type='file' name='file'>";
								echo "<button type='submit' name='submit'>Upload</button>";
							echo "</form>";
							echo "</div>";
						}
					}
				}
			?>
			
		</div>
		
		<div class="main-right">
        <div class="t3">Топ 10 Автомобилни компании</div>
			<dl class="box1">
				<dt><span class="s01">1.</span><a href="#"><img class="image1" src="img/toyota.jpg">Toyota</a></dt>
				<dt><span class="s01">2.</span><a href="#"><img class="image1" src="img/vw.jpg">Volkswagen</a></dt>
				<dt><span class="s01">3.</span><a href="#"><img class="image1" src="img/mercedes.jpg">Mercedes-Benz</a></dt>
				<dt><span class="s01">4.</span><a href="#"><img class="image1" src="img/bmw.jpg">BMW</a></dt>
				<dt><span class="s01">5.</span><a href="#"><img class="image1" src="img/audi.jpg">Audi</a></dt>
				<dt><span class="s01">6.</span><a href="#"><img class="image1" src="img/gm.jpg">General Motors</a></dt>
				<dt><span class="s01">7.</span><a href="#"><img class="image1" src="img/ford.jpg">Ford</a></dt>
				<dt><span class="s01">8.</span><a href="#"><img class="image1" src="img/nissan.jpg">Nissan</a></dt>
				<dt><span class="s01">9.</span><a href="#"><img class="image1" src="img/hyundai.jpg">Hyundai</a></dt>
				<dt><span class="s01">10.</span><a href="#"><img class="image1" src="img/honda.jpg">Honda</a></dt>
			</dl>
		
       <div class="t3">Топ 10 Мотоциклетни компании</div>
			<dl class="box1">
        	<dt><span class="s01">1.</span><a href="#"><img class="image1" src="img/yamaham.jpg">Yamaha</a></dt>
        	<dt><span class="s01">2.</span><a href="#"><img class="image1" src="img/hondam.jpg">Honda</a></dt>
        	<dt><span class="s01">3.</span><a href="#"><img class="image1" src="img/ducatim.jpg">Ducati</a></dt>
        	<dt><span class="s01">4.</span><a href="#"><img class="image1" src="img/kawasakim.jpg">Kawasaki</a></dt>
        	<dt><span class="s01">5.</span><a href="#"><img class="image1" src="img/suzukim.jpg">Suzuki</a></dt>
        	<dt><span class="s01">6.</span><a href="#"><img class="image1" src="img/harleym.jpg">Harley-Davidson</a></dt>
        	<dt><span class="s01">7.</span><a href="#"><img class="image1" src="img/bmwm.jpg">BMW</a></dt>
        	<dt><span class="s01">8.</span><a href="#"><img class="image1" src="img/triumphm.jpg">Triumph</a></dt>
        	<dt><span class="s01">9.</span><a href="#"><img class="image1" src="img/apriliam.jpg">Aprilia</a></dt>
        	<dt><span class="s01">10.</span><a href="#"><img class="image1" src="img/mvm.jpg">MV Agusta</a></dt>
        </dl>
		</div>
	</div>
</section>

<!-- Footer -->
<footer class="w3-border-top w3-border-orange">
	<div class="social"><p>Последвайте ни в	<i class="fa fa fa-thumbs-o-up fa-2x"></i></p>
		<a href="#"><i class="fa fa-facebook-official fa-3x"></i></a>
		<a href="#"><i class="fa fa-instagram fa-3x"></i></a>
		<a href="#"><i class="fa fa-youtube-square fa-3x"></i></a>
	</div>
	<div class="copyright">
	©Copyrights <a href="Homepage.php">carinfo.bg</a>Всички права запазени.<br>
	Всички снимки са собственост на техните респективни собственици.Ако откриете някоя снимка,която е ваша собственост, моля, свържете се с нас
	</div>
</footer>
</body>
</html>