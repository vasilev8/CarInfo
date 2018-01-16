<?php
	session_start();
?>
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
    	<div class="top-menu">
            <a href="Homepage.html" class="active" id="home">Начало</a>
			<a href="Articles.html" id="article">Статии</a>
            <a href="All.html" id="allbrands">Всички марки</a>
			<a href="Wallpapers.html" id="wallpapers">Wallpapers</a>
			
			<?php
				if (isset($_SESSION['u_id'])){
					echo '<form class="login" action="includes/logout.inc.php" method="POST">
						<button type="submit" name="submit">Logout</button>
						</form>';
				}
				else {
					echo '<form class="login" action="includes/login.inc.php" method="POST">
						<a href="signup.php" style="width:50px; height:50px;"></a>
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
<!--Section slideshow and Description-->
<section>
	<div class="w3-row">
		<div class="w3-twothird w3-border-top w3-border-right w3-border-orange" style="position:relative; box-shadow: inset 0px -10px 68px 30px rgba(0,0,0,0.75);">
			<div class="mySlides">
				<div class="numbertext">1 / 3</div>
				<img src="img/slideshow1.jpeg" style="width:100%; height:auto; position: relative; z-index: -2;">
			</div>
			<div class="mySlides">
				<div class="numbertext">2 / 3</div>
				<img src="img/slideshow2.jpg" style="width:100%; height:auto; position: relative; z-index: -2;">
			</div>
			<div class="mySlides">
				<div class="numbertext">3 / 3</div>
				<img src="img/slideshow3.jpg" style="width:100%; height:auto; position: relative; z-index: -2;">
			</div>
				<!--Dots-->
			<div class="vdots">
				<span class="dot"></span> 
				<span class="dot"></span> 
				<span class="dot"></span>
			</div>
		</div>
			
		<div class="w3-third w3-black w3-border-top w3-border-orange" style="height:auto;font-size:15px">
			<h2><center>CarInfo</center></h2>
			<p class="descript">CarInfo е български информативен сайт с история за всяка автомобилна и мотоциклетна компания.Сайтът включва също така статии и wallpapers за вашето устройство</p>
		</div>		
	</div>	
</section>
<!--Articles-->
<section>
	<div class="w3-row">
		<div class="w3-third w3-border-top w3-border-bottom w3-border-right w3-border-orange">
			<a href="article1.html" class="w3-btn w3-black w3-ripple" style="width:100%;">
				<img src="img/article1.jpg" style="width:100%;"> 
			<p>Спортният модел на Audi Q7</p>
			</a>	
		</div>
		<div class="w3-third w3-border-top w3-border-bottom w3-border-right w3-border-orange">
			<a href="article1.html" class="w3-btn w3-black w3-ripple" style="width:100%;">
				<img src="img/article2.jpg" style="width:100%;"> 
				<p>Легендата - Чочоне</p>
			</a>	
		</div>
		<div class="w3-third w3-border-top w3-border-bottom w3-border-right w3-border-orange">
			<a href="article3.html" class="w3-btn w3-black w3-ripple" style="width:100%;">
				<img src="img/article3.jpg" style="width:100%;"> 
				<p>Еволюцията на VW-Golf</p>
			</a>	
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
<script>
<!--Automatic slideshow 3sec-->
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000);
}
</script>
</body>
</html>