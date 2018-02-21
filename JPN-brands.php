<?php
	include_once 'includes/dbh.inc.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>JPN-brands</title>
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
			<dt><a href="#"><img src="img/Toyota-logo.jpg" alt="Toyota logo"></a>
			<a href="#" title="Toyota">Toyota</a></dt>
			<dt><a href="#"><img src="img/Nissan-logo.jpg" alt="Nissan logo"></a>
			<a href="#" title="Nissan">Nissan</a></dt>
			<dt><a href="#"><img src="img/Honda-logo.jpg" alt="Honda logo"></a>
			<a href="#" title="Honda">Honda</a></dt>
			<dt><a href="#"><img src="img/Mazda-logo.jpg" alt="Mazda logo"></a>
			<a href="#" title="Mazda">Mazda</a></dt>
			<dt><a href="#"><img src="img/Acura-logo.jpg" alt="Acura logo"></a>
			<a href="#" title="Acura">Acura</a></dt>
			<dt><a href="#"><img src="img/Lexus-logo.jpg" alt="Lexus logo"></a>
			<a href="#" title="Lexus">Lexus</a></dt>
			<dt><a href="#"><img src="img/Suzuki-logo.jpg" alt="Suzuki logo"></a>
			<a href="#" title="Suzuki">Suzuki</a></dt>
			<dt><a href="#"><img src="img/Infiniti-logo.jpg" alt="Infiniti logo"></a>
			<a href="#" title="Infiniti">Infiniti</a></dt>
			<dt><a href="#"><img src="img/Mitsubishi-logo.jpg" alt="Mitsubishi logo"></a>
			<a href="#" title="Mitsubishi">Mitsubishi</a></dt>
			<dt><a href="#"><img src="img/Datsun-logo.jpg" alt="Datsun logo"></a>
			<a href="#" title="Datsun">Datsun</a></dt>
			<dt><a href="#"><img src="img/Isuzu-logo.jpg" alt="Isuzu logo"></a>
			<a href="#" title="Isuzu">Isuzu</a></dt>
			<dt><a href="#"><img src="img/Daihatsu-logo.jpg" alt="Daihatsu logo"></a>
			<a href="#" title="Daihatsu">Daihatsu</a></dt>
			<dt><a href="#"><img src="img/GT-R-logo.jpg" alt="GT-R logo"></a>
			<a href="#" title="Nissan GT-R">GT-R</a></dt>
		</dl>
		
		<div class="pagination" style="left:-42%">
		  <a href="JPN-brands.php">&laquo;</a>
		  <a href="JPN-brands.php" class="active">1</a>
		  <a href="JPN-brands.php">&raquo;</a>
		</div>
		
		<div class="description">
			Високото качество на японските автомобили успя да ги постави високо сред най-добрите автомобили в световен мащаб. 
			Големите имена на японските автомобилни компании, които са станали легендарни включват Toyota, Honda и Mazda, които са завладели сърцата на 
			шофьорите на глобално ниво. По-нови, по-скъпи марки включват пищната Lexus и елегантен Infiniti. Тук ще намерите имената, логото и снимките 
			на всички японски марки автомобили в този списък.
			Техният иновативен дизайн, изпълнение на най-високо ниво и подхода към автомобилния пазар е като доказателство за превъзходството на Япония в икономическо 
			равнище. Който е собственик на Toyota или Honda знае, че качеството е отлично,а поддръжката евтина.
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