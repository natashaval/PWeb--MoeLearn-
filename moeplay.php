<?php
	include('php/rfunctions.php');
	include('php/navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/comingsoon.css">
	<link rel="stylesheet" type="text/css" href="css/article.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Bad+Script|Poiret+One|Raleway|Nanum+Pen+Script" rel="stylesheet">
	<title>MoeMoe</title>
	<link rel="icon" href="images/retrokyuu.ico" type="image/x-icon">
</head>
<body>

<?php
			callnavigation();
		?>

	<div class="count-bgimg">
		<div class="count-top">
			<h1>Coming Soon</h1>
			<p style="text-align: center;">Get notified when we opened our shop<br>and get free gift as first customer! &#127873;</p>
		</div>
		<div id="count-timer">
			<div class="timer">
				<span class="days"></span>
				<div class="timer-text">Days</div>
			</div>
			<div class="timer">
				<span class="hours"></span>
				<div class="timer-text">Hours</div>
			</div>
			<div class="timer">
				<span class="minutes"></span>
				<div class="timer-text">Minutes</div>
			</div>
			<div class="timer">
				<span class="seconds"></span>
				<div class="timer-text">Seconds</div>
			</div>
		</div>
		<div class="count-sub">
			<!--div class="sub-email"></div>
			<div class="sub-button"></div-->
			<input type="email" name="mail" placeholder="&#9993;">
			<input type="submit" value="Notify Me!">
		</div>
	</div>
	
	<?php callfooter(); ?>
	<script type="text/javascript" src="js/comingsoon.js"></script>
</body>

<footer>
	<div class="left">
		<p>Designed by Natasha Valentina. Based on Danny Choo Culture Japan Mascots. </p>
		<div>
			<a href="http://dannychoo.com" target="_blank"><img src="images/dannychoolink.jpg" style="height: 1.75em; width: auto;"></a>
		</div>
	</div>
	<div class="right">
		<p style="text-align: center;">Stay Connected</p>
		<div class="socmedlink">
			<a href="http://www.dannychoo.tumblr.com" target="_blank"><img src="images/ico/tumblr.jpg"></a>
			<a href="http://www.pinterest.com/miraisuenaga" target="_blank"> <img src="images/ico/pinterest.jpg"></a>
			<a href="http://www.instagram.com/dannychoo" target="_blank"><img src="images/ico/instagram.jpg"></a>
			<a href="http://www.youtube.com/user/tokyostormtrooper" target="_blank"><img src="images/ico/youtube.jpg"></a>
			<a href="http://www.facebook.com/dannychoodotcom" target="_blank"><img src="images/ico/facebook.jpg"></a>
			<a href="http://www.plus.google.com/+DannyChoo" target="_blank"><img src="images/ico/googleplus.jpg"></a>
			<a href="http://www.twitter.com/dannychoo" target="_blank"><img src="images/ico/twitter.jpg"></a>
		</div>
	</div>
</footer>

</html>
