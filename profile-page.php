<?php
	include_once 'includes/dbh.inc.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile</title>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="css/MyCSS.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<!--Navigation-->
<div class="top">
	<div class="wrapper">
    	<div class="top-logo"><h1><a href="Homepage.html"></a></h1></div>
    	<div class="top-menu">
            <a href="Homepage.html" class="active" id="home">Начало</a>
			<a href="Articles.html" id="article">Статии</a>
            <a href="All.html" id="allbrands">Всички марки</a>
			<a href="Wallpapers.html" id="wallpapers">Wallpapers</a>
			
			<?php
				if (isset($_SESSION['u_id'])){
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
		<div class="main-left">
			<?php
				$sql = "SELECT * FROM users WHERE user_uid = '".$_SESSION['u_uid']."'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);
				
				if ($resultCheck > 0){
					while ($row = mysqli_fetch_assoc($result)){
						echo "<div class='profilepage'>" . 'Username - ' . $row['user_uid'] . "</div>";
						echo "<div class='profilepage'>" . 'First name - ' . $row['user_first'] . "</div>";
						echo "<div class='profilepage'>" . 'Last name - ' . $row['user_last'] . "</div>";
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
				<dt><span class="s01">1.</span><a href="#">Toyota</a></dt>
				<dt><span class="s01">2.</span><a href="#">Volkswagen</a></dt>
				<dt><span class="s01">3.</span><a href="#">Mercedes-Benz</a></dt>
				<dt><span class="s01">4.</span><a href="#">BMW</a></dt>
				<dt><span class="s01">5.</span><a href="#">Honda</a></dt>
				<dt><span class="s01">6.</span><a href="#">General Motors</a></dt>
				<dt><span class="s01">7.</span><a href="#">Ford</a></dt>
				<dt><span class="s01">8.</span><a href="#">Nissan</a></dt>
				<dt><span class="s01">9.</span><a href="#">Hyundai</a></dt>
				<dt><span class="s01">10.</span><a href="#">Audi</a></dt>
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
	©Copyrights <a href="Homepage.html">carinfo.bg</a> Всички права запазени.
	</div>
</footer>
</body>
</html>