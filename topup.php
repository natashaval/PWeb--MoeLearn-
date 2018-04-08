<?php
	include ('php/rfunctions.php');
	include ('php/navigation.php');
?>

<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/base.css">
		<link rel="stylesheet" type="text/css" href="css/article.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">
		<link href="https://fonts.googleapis.com/css?family=Bad+Script|Poiret+One|Raleway|Nanum+Pen+Script" rel="stylesheet">
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!--script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script-->
		<title>MoeMoe</title>
		<link rel="icon" href="images/retrokyuu.ico" type="image/x-icon">
	</head>
	<body>

		<?php
			callnavigation();
		?>

		<div class="topupform">
			<form method="POST" action="topup.php">

				<div class="login-top">
				<p class="form-title">Top Up</p>
				<?php echo display_error(); ?>
			</div>
			<div class="login-img">
				<img src="https://sdl-stickershop.line.naver.jp/products/0/0/1/1072504/android/stickers/2990884.png" style="width: 25%;">
			</div>
			<div class="login-content">
				<label class="question1">Full Name</label><br>
				<input type="text" name="topup_name"><br>
				<label class="question1">Credit Card Number</label><br>
				<input type="number" name="topup_number"><br>
				<label class="question1">Expiration</label><br>
				<input type="text" name="topup_expired"><br>
				<label class="question1">CVV</label><br>
				<input type="number" name="topup_cvv"><br>
				<label class="question1">Amount</label><br>
				<input type="number" name="topup_money"><br>
			</div>
			<div class="login-bottom">
				<input type="submit" name="topup_btn" value="Top Up">
			</div>
			</form>
		</div>

<div class="gifchara">
	<a href="characters.html" id="mirai"></a>
	<a href="characters.html" id="haruka"></a>
	<a href="characters.html" id="kanata"></a>
	<a href="characters.html" id="kizuna"></a>
	<a href="characters.html" id="chitose"></a>
	<a href="characters.html" id="eiji"></a>
	<a href="characters.html" id="retrokyuu"></a>
</div>
<script type="text/javascript" src="js/art-manga.js"></script>
</body>

<footer>
	<div class="left">
		<p>Designed by Natasha Valentina. Based on Danny Choo Culture Japan Mascots. </p>
		<div>
			<a href="http://dannychoo.com" target="_blank"><img src="images/dannychoolink.jpg" style="height: 1.75em; width: auto;"></a>
		</div>
	</div>
	<div class="right">
		<p>Stay Connected</p>
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
