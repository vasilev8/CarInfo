<?php
	include_once 'includes/dbh.inc.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Wallpapers</title>
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
			<a href="Wallpapers.php" class="active" id="wallpapers">Wallpapers</a>
			
			<?php
				if (isset($_SESSION['u_id'])){
					echo '<a href="profile-page.php" id="profile-link">Профил</a>';
					
					echo '<form class="logout" action="includes/logout.inc.php" method="POST">
						<a href="signup.php" class="signup" style="width:50px; height:50px; display:none"></a>
						<button type="submit" name="submit">Logout</button>
						</form>';
				}
				else {
					echo '<form class="login" action="includes/login.inc.php" method="POST">
						<input type="text" name="uid" placeholder="Username/E-mail">
						<input type="password" name="pwd" placeholder="Password">
						<button type="submit" name="submit">Login</button>
						<a href="signup.php">Sign up</a> 
						</form>';
				}
			?>
			
		</div>
    </div>
</div>

<div class="main">

	<div class="main-right">
	
		<div class="categories">
		Категории:
		
		<div class="dropdown">
			<button onclick="myFunction()" class="dropbtn">Коли
				<i class="fa fa-caret-down"></i>
			</button>
				<div id="dropdown" class="dropdown-content">
					<a href="#">Audi</a>
					<a href="#">VW</a>
					<a href="#">BMW</a>
					<a href="#">Seat</a>
				</div>
			<div class="category"><a href="#">Мотори</a></div>
			<div class="category"><a href="#">ATV</a></div>
			<div class="category"><a href="#">Писти</a></div>
		</div>
			
		</div>
		
	</div>
	
	<div class="main-left">
		<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox" style="margin-top: 5px;"></div>
		<ul class="wallpapers">
			<li><a href="http://<li><a href="#"><img src="https://auto.ndtvimg.com/car-images/medium/hyundai/verna/hyundai-verna.jpg?v=18" alt="HD wallpaper"><figcaption>First image</figcaption></a></li>
			<li><a href="http://<li><a href="#"><img src="https://auto.ndtvimg.com/car-images/medium/hyundai/verna/hyundai-verna.jpg?v=18" alt="HD wallpaper"><figcaption>First image</figcaption></a></li>
			<li><a href="http://<li><a href="#"><img src="https://auto.ndtvimg.com/car-images/medium/hyundai/verna/hyundai-verna.jpg?v=18" alt="HD wallpaper"><figcaption>First image</figcaption></a></li>
			<li><a href="http://<li><a href="#"><img src="https://auto.ndtvimg.com/car-images/medium/hyundai/verna/hyundai-verna.jpg?v=18" alt="HD wallpaper"><figcaption>First image</figcaption></a></li>
		</ul>
		
		<div class="pagination">
		  <a href="All.html">&laquo;</a>
		  <a href="All.html" class="active">1</a>
		  <a href="All2.html">2</a>
		  <a href="All3.html">3</a>
		  <a href="All2.html">&raquo;</a>
		</div>
	
	</div>

</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("dropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
	<!-- Footer -->
<footer class="w3-border-top w3-border-orange" style="margin-top:5px">
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
<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7c52f4d1ad5104"></script>
</body>
</html>