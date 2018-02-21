<?php
	include_once 'includes/dbh.inc.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>All-brands</title>
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
            <a href="All.php" class="active" id="allbrands">Всички марки</a>
			<a href="Wallpapers.php" id="wallpapers">Wallpapers</a>
			
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

<!--Section -->

<div class="main">

	<div class="main-left">
	
        <dl class="tnav">
            <dt>Категория :</dt>
            <dd><a href="All.php">Всички</a></dd>
            <dd><a href="Popular.php">Известни</a></dd>
			<dd><a href="Motorcycles.php">Мотоциклети</a></dd>
            <dd><a href="GER-brands.php">GER</a></dd>
            <dd><a href="USA-brands.php">USA</a></dd>
            <dd><a href="UK-brands.php">UK</a></dd>
            <dd><a href="ITA-brands.php">ITA</a></dd>
            <dd><a href="FRA-brands.php">FRA</a></dd>
            <dd><a href="JPN-brands.php">JPN</a></dd>
            <dd><a href="Other.php">Други</a></dd>
        </dl>
		
        <dl class="logobox">
		<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox" style="margin-top: 5px;"></div>
			<dt><a href="#"><img src="img/Volkswagen-logo.jpg" alt="Volkswagen logo"></a>
			<a href="#" title="Volkswagen">Volkswagen</a></dt>
			<dt><a href="#"><img src="img/Audi-logo.jpg" alt="Audi logo"></a>
			<a href="#" title="Audi">Audi</a></dt>
			<dt><a href="#"><img src="img/BMW-logo.jpg" alt="BMW logo"></a>
			<a href="#" title="BMW">BMW</a></dt>
			<dt><a href="#"><img src="img/Mercedes-Benz-logo.jpg" alt="Mercedes-Benz logo"></a>
			<a href="#" title="Mercedes-Benz">Mercedes</a></dt>
			<dt><a href="#"><img src="img/Lamborghini-logo.jpg" alt="Lamborghini logo"></a>
			<a href="#" title="Lamborghini">Lamborghini</a></dt>
			<dt><a href="#"><img src="img/Porsche-logo.jpg" alt="Porsche logo"></a>
			<a href="#" title="Porsche">Porsche</a></dt>
			<dt><a href="#"><img src="img/Ferrari-logo.jpg" alt="Ferrari logo"></a>
			<a href="" title="Ferrari">Ferrari</a></dt>
			<dt><a href="#"><img src="img/Lada-logo.jpg" alt="Lada logo"></a>
			<a href="#" title="Lada">Lada</a></dt>
			<dt><a href="#"><img src="img/Koenigsegg-logo.jpg" alt="Koenigsegg logo"></a>
			<a href="#" title="Koenigsegg">Koenigsegg</a></dt>
			<dt><a href="#"><img src="img/Subaru-logo.jpg" alt="Subaru logo"></a>
			<a href="#" title="Subaru">Subaru</a></dt>
			<dt><a href="#"><img src="img/Renault-logo.jpg" alt="Renault logo"></a>
			<a href="#" title="Renault">Renault</a></dt>
			<dt><a href="#"><img src="img/Opel-logo.jpg" alt="Opel logo"></a>
			<a href="#" title="Opel">Opel</a></dt>
			<dt><a href="#"><img src="img/Land-Rover-logo.jpg" alt="Land Rover logo"></a>
			<a href="#" title="Land Rover">Land Rover</a></dt>
			<dt><a href="#"><img src="img/Chrysler-logo.jpg" alt="Chrysler logo"></a>
			<a href="#" title="Chrysler">Chrysler</a></dt>
			<dt><a href="#"><img src="img/Saab-logo.jpg" alt="Saab logo"></a>
			<a href="#" title="Saab">Saab</a></dt>
			<dt><a href="#"><img src="img/Mazda-logo.jpg" alt="Mazda logo"></a>
			<a href="#" title="Mazda">Mazda</a></dt>
			<dt><a href="#"><img src="img/Alfa-Romeo-logo.jpg" alt="Alfa Romeo logo"></a>
			<a href="#" title="Alfa Romeo">Alfa Romeo</a></dt>
			<dt><a href="#"><img src="img/Citroen-logo.jpg" alt="Citroën logo"></a>
			<a href="#" title="Citroën">Citroën</a></dt>
			<dt><a href="#"><img src="img/Fiat-logo.jpg" alt="Fiat logo"></a>
			<a href="#" title="Fiat">Fiat</a></dt>
			<dt><a href="#"><img src="img/Buick-logo.jpg" alt="Buick logo"></a>
			<a href="#" title="Buick">Buick</a></dt>
			<dt><a href="#"><img src="img/Chevrolet-logo.jpg" alt="Chevrolet logo"></a>
			<a href="#" title="Chevrolet">Chevrolet</a></dt>
			<dt><a href="#"><img src="img/Cadillac-logo.jpg" alt="Cadillac logo"></a>
			<a href="#" title="Cadillac">Cadillac</a></dt>
			<dt><a href="#"><img src="img/Honda-logo.jpg" alt="Honda logo"></a>
			<a href="#" title="Honda">Honda</a></dt>
			<dt><a href="#"><img src="img/Rolls-Royce-logo.jpg" alt="Rolls-Royce logo"></a>
			<a href="#" title="Rolls-Royce">Rolls-Royce</a></dt>
			<dt><a href="#"><img src="img/Hyundai-logo.jpg" alt="Hyundai logo"></a>
			<a href="#" title="Hyundai">Hyundai</a></dt>
			<dt><a href="#"><img src="img/Nissan-logo.jpg" alt="Nissan logo"></a>
			<a href="#" title="Nissan">Nissan</a></dt>
			<dt><a href="#"><img src="img/Bentley-logo.jpg" alt="Bentley logo"></a>
			<a href="#" title="Bentley">Bentley</a></dt>
			<dt><a href="#"><img src="img/Jaguar-logo.jpg" alt="Jaguar logo"></a>
			<a href="#" title="Jaguar">Jaguar</a></dt>
			<dt><a href="#"><img src="img/Aston-Martin-logo.jpg" alt="Aston Martin logo"></a>
			<a href="#" title="Aston Martin">AstonMartin</a></dt>
			<dt><a href="#"><img src="img/Maserati-logo.jpg" alt="Maserati logo"></a>
			<a href="#" title="Maserati">Maserati</a></dt>
			<dt><a href="#"><img src="img/Moskvich-logo.png" alt="Moskvich logo"></a>
			<a href="#" title="Moskvich">Moskvich</a></dt>
			<dt><a href="#"><img src="img/Toyota-logo.jpg" alt="Toyota logo"></a>
			<a href="#" title="Toyota">Toyota</a></dt>
			<dt><a href="#"><img src="img/Ford-logo.jpg" alt="Ford logo"></a>
			<a href="#" title="Ford">Ford</a></dt>
		</dl>
		
		<div class="pagination">
		  <a href="All.php">&laquo;</a>
		  <a href="All.php" class="active">1</a>
		  <a href="All2.php">2</a>
		  <a href="All3.php">3</a>
		  <a href="All2.php">&raquo;</a>
		</div>
	
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