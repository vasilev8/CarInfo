<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CarInfo</title>
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
    	<ul class="top-menu">
            <li><a href="Homepage.html" class="active" id="home">Начало</a></li>
			<li><a href="Articles.html" id="article">Статии</a></li>
            <li><a href="All.html" id="allbrands">Всички марки</a></li>
			<li><a href="Wallpapers.html" id="wallpapers">Wallpapers </a></li>
		</ul>
		<div class="login">
			<form>
				<input type="text" name="uid" placeholder="Username/E-mail">
				<input type="password" name="pwd" placeholder="Password">
				<button type="submit" name="submit">Login</button>
				<a href="signup.php" class="reg">Sign up</a>
			</form>
		</div>
    </div>
</div>

<!--Section-->
<section>
	<div class="main">
	
		<div class="main-left">
			<h2>Sign Up</h2>
				<form class="register-form">
					<input type="text" name="first" placeholder="First name">
					<input type="text" name="last" placeholder="Last name">
					<input type="text" name="email" placeholder="E-mail">
					<input type="text" name="uid" placeholder="Username">
					<input type="password" name="pwd" placeholder="Password">
					<button type="submit" name="submit">Sign up</button>
				</form>
		</div>
		
		<div class="main-right">
			<h2>Login</h2>
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