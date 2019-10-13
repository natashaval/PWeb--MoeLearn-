<?php
	include('php/rfunctions.php');
	include('php/navigation.php');
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

		<div class="loginform">
			<form method="POST" action="login.php">
				<div class="login-top">
					<p class="form-title">Login</p>
				</div>
				<div class="login-img">
					<img src="https://sdl-stickershop.line.naver.jp/products/0/0/1/1072504/android/stickers/2990886.png" style="width: 25%;">
				</div>
				<div class="login-content">
					<label class="question1">Username</label><br>
				<input type="text" name="username" value="<?php if(isset($_COOKIE['cookie_name'])) { echo $_COOKIE['cookie_name']; } ?>"><br>
				<label class="question1">Password</label><br>
				<input type="password" name="password" value="<?php if(isset($_COOKIE['cookie_pass'])) { echo $_COOKIE['cookie_pass']; } ?>"><br>
				<br>
				<input type="checkbox" name="remember">Remember Me
				</div>
				<div class="login-bottom">
					<input type="submit" name="login_btn" value="Log In">
					<p>Don't have an account? <a href="register.php">Register</a></p>
				</div>
			</form>
		</div>

<?php callfooter(); ?>
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
