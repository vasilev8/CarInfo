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
<title>Mercedes-Chochone</title>
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
					echo '<a href="../profile-page.php" id="profile-link">Профил</a>';
					
					echo '<form class="logout" action="../includes/logout.inc.php" method="POST">
						<a href="signup.php" class="signup" style="width:50px; height:50px; display:none"></a>
						<button type="submit" name="submit">Logout</button>
						</form>';
				}
				else {
					echo '<form class="login" action="../includes/login.inc.php" method="POST">
						<a href="../signup.php" class="signup" style="width:50px; height:50px; display:none"></a>
						<input type="text" name="uid" placeholder="Username/E-mail">
						<input type="password" name="pwd" placeholder="Password">
						<button type="submit" name="submit">Login</button>
						<a href="../signup.php" style="width:9%; height: 30px; padding-top:9px; font-size: 13px; cursor: pointer; background-color: #FFF; color: black; float:right; line-height: 10px;">Sign up</a> 
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
			<h2>Мерцедес W124 Чочоне</h2>
			Всеки автолюбител знае за легендарния модел на Mercedes Benz с фабричен индекс W124 ,
			който е символ на здравина и върхово качество в автомобилостроенето.
			<br>
			За него има цели тонове изписани статии, които доказват неговите качества.
			Но в тази статия ще стане дума за един по-рядък негов събрат с фабричен индекс 500 E /E500 , по кратко казано – Чочоне.
			От този модел са прoизведени в света около 10 497 бройки и затова в днешно време е доста трудно да се намери екземпляр в добро състояние.
			Затова не трябва да ви учудва и цената, която можете да срещнете във външните автомобилни сайтове за продажба. За справка,
			в Германия цената на запазено Чочоне E500. Започва от 30хил. евро на 250хил. км. -това са цени само за ценители на истински автомобили, 
			които за съжаление никой производител вече не произвежда ,по разбираеми причини. Вечна здравина като танк и абсолютен комфорт!  През 1993-94 г.,
			тунинг подразделението на Mercedes Benz - AMG пуска на пазара W124-ки с индекс - E60, около 150 бройки с 6.0 литров двигател - M 119 с 
			мощност от 381 к.с., благодарение на които ускорява от 0 до 100 км/ч само за 5.4 секунди.Този модел е желан от всеки колекционер, но цената му
			стартира от 50хил. евро нагоре, която расте с всяка измината година. Да не забравяме и тунинг ателието Brabus, които пуснаха в продажба напълно
			запазен екземпляр с пробег по километраж само 252 км!!! Двигателят е V-образен осмак ,увеличен с литър и половина. Максималната мощност е 450
			к.с.Версията на Brabus ускорява от 0 до 100 км/ч само за 5.2 сек. и максимална скорост от 285 км/ч. Едва ли цената ще бъде както преди 17 години,
			но със сигурност ще има заинтересовани.
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
	<!-- Footer -->
<footer class="w3-border-top w3-border-orange" style="margin-top:5px">
	<div class="social"><p>Последвайте ни в	<i class="fa fa fa-thumbs-o-up fa-2x"></i></p>
		<a href="#"><i class="fa fa-facebook-official fa-3x"></i></a>
		<a href="#"><i class="fa fa-instagram fa-3x"></i></a>
		<a href="#"><i class="fa fa-youtube-square fa-3x"></i></a>
	</div>
	<div class="copyright">
	©Copyrights <a href="../Homepage.php">carinfo.bg</a> Всички права запазени.
	</div>
</footer>
<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a7c52f4d1ad5104"></script>
</body>
</html>