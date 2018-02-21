<?php
	include_once '../includes/dbh.inc.php';
	include '../includes/comments.inc.php';
	date_default_timezone_set('Europe/Sofia');
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>VW-Golf</title>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="../css/MyCSS.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<!--Navigation-->
<div class="top">
	<div class="wrapper">
    	<div class="top-logo"><h1><a href="../Homepage.php"></a></h1></div>
    	<div class="top-menu">
            <a href="../Homepage.php" class="active" id="home">Начало</a>
			<a href="../Articles.php" id="article">Статии</a>
            <a href="../All.php" id="allbrands">Всички марки</a>
			<a href="../Wallpapers.php" id="wallpapers">Wallpapers</a>
			
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

<!--Section-->

<div class="main">

	<div class="main-left">
		<div class="article-box">
			<h2>VW Golf</h2>
			Над 30 млн. автомобила от този модел са реализирани на пазарите.
			<br>
			<br>
			Най-популярният и най-продаван автомобил в Европа - VW Golf, празнува своя 
			44-годишен юбилей през тази година. Моделът излиза на пазара за първи път 
			през 1974 година, има 7 поколения и е продаден в над 30 млн. екземпляра.
			<img src="../img/golf1.jpg">
			<span><i>Първите шест поколения на Golf</i></span>
			<br>
			<br>
			Пускането на първото поколение Golf се определя като революционна стъпка за марката,
			тъй като от модел със заднопоставен двигател с въздушно охлаждане и задвижване към задните
			колела - какъвто е Beetle, Volkswagen преминава към напълно нова концепция - предноразположен
			двигател с водно охлаждане и предно предаване.
			<br>
			<br>
			Моделът, кръстен на атлантическото топлото течение Гълфстрийм,
			излиза на пазара във време, в което цените на бензина вървят стремглаво нагоре,
			а западните икономики са в криза. Това дава на малкия икономичен модел силен старт на пазара,
			като популярността му в цял свят продължава да расте.
			<img src="../img/golf2.jpg">
			<span><i>Колата на народа</i></span>
			<br>
			<br>
			През 1983 година се появява VW Golf II, който се произвежда до 1991 г. 
			Втората генерация е еволюция на първата, като при нея се появяват системи като ABS и задвижване на четирите колела.
			<br>
			<br>
			Третото поколение на Golf се произвежда между 1991 и 1997 година. Този модел внася в гамата редица нови технологии
			за пасивна и активна безопасност, сред които въздушна възглавница. Именно тук се появява и първият TDI двигател.
			<br>
			<br>
			През 1997 година излиза VW Golf IV. Той представя нов дизайн, който постепенно се интегрира в цялата гама от модели на марката.
			При Golf IV се появяват за първи път системата ESC и скоростна кутия с два съединителя.
			<br>
			<br>
			Следващото поколение - Golf V, излиза през 2003 година и се произвежда до 2008 г. Това е първият Golf с лазерно заварена конструкция,
			която доставя с 35% по-голяма степен на усукване на купето. Тук за първи път се появява и версия BlueMotion.
			<br>
			<br>
			Предпоследното поколение на Golf излиза през 2008 година и до голяма степен е базирано на Golf V. Въпреки критиките,
			че това не е напълно нов модел, Golf VI има с какво ново да се похвали - максимални 5 звезди при краш-тестовете на EuroNCAP
			и широко навлизане на бензинови TSI и дизелови TDI двигатели с директно впръскване на горивото.
			<img src="../img/golf3.jpg">
			<span><i>Новият VW Golf VII</i></span>
			<br>
			<br>
			През 2012 година на пазара излезе VW Golf VII. Той заложи на изцяло нова платформа, която му позволи да бъде едновременно
			по-голям, по-лек и по-икономичен от своя предшественик. Моделът получи и редица нови системи, които го направиха най-технологичното 
			поколение в историята на колата. А това не остана незабелязано от автомобилния свят, който възнагради германския модел с редица награди,
			сред които и "Кола на годината в Европа 2013".
			<br>
			<br>
			Новото поколение на модела се появи и в напълно нови версии, сред които хибридна и напълно електрическа.
			Ежедневно от поточните линии на Volkswagen излизат по 2000 представителя на Golf.
		</div>
		<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox"></div>
		<!--Comments-->
		<?php
			if (isset($_SESSION['u_id'])){
				echo "<form class='comments' method='POST' action='".setComments($conn)."'>
				<input type='hidden' name='uid' value='".$_SESSION['u_id']."'>
				<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
				<textarea name='message'></textarea><br>
				<button type='submit' name='commentSubmit'>Comment</button>
				</form>";	
			} else{
				echo "<p id='warning'>You need to be logged in order to comment!</p>";
			}
			
			getComments($conn);
		?>
	</div>
	
	<div class="main-right">
        <div class="t3">Топ 10 Автомобилни компании</div>
		<dl class="box1">
        	<dt><span class="s01">1.</span><a href="#"><img class="image1" src="../img/toyota.jpg">Toyota</a></dt>
        	<dt><span class="s01">2.</span><a href="#"><img class="image1" src="../img/vw.jpg">Volkswagen</a></dt>
        	<dt><span class="s01">3.</span><a href="#"><img class="image1" src="../img/mercedes.jpg">Mercedes-Benz</a></dt>
        	<dt><span class="s01">4.</span><a href="#"><img class="image1" src="../img/bmw.jpg">BMW</a></dt>
        	<dt><span class="s01">5.</span><a href="#"><img class="image1" src="../img/audi.jpg">Audi</a></dt>
        	<dt><span class="s01">6.</span><a href="#"><img class="image1" src="../img/gm.jpg">General Motors</a></dt>
        	<dt><span class="s01">7.</span><a href="#"><img class="image1" src="../img/ford.jpg">Ford</a></dt>
        	<dt><span class="s01">8.</span><a href="#"><img class="image1" src="../img/nissan.jpg">Nissan</a></dt>
        	<dt><span class="s01">9.</span><a href="#"><img class="image1" src="../img/hyundai.jpg">Hyundai</a></dt>
        	<dt><span class="s01">10.</span><a href="#"><img class="image1" src="../img/honda.jpg">Honda</a></dt>
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