<?php
	include ('php/navigation.php');
	include ('php/rfunctions.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/front.css">
	<link rel="stylesheet" type="text/css" href="css/article.css">
	<link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Lato" rel="stylesheet">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>MoeMoe</title>
	<link rel="icon" href="images/retrokyuu.ico" type="image/x-icon">
	<meta charset="utf-8">
</head>
<body>

	<?php
		callnavigation();
	?>

	<div class="homepage">
		<div class="home1">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/AQdso9PPSUI?rel=0&amp;controls=0&amp;showinfo=0&amp;autoplay=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<!--video height="360px" width="100%" controls muted>
				<source src="images/video/vidculturejapanS3.mp4">
					Sorry! Your browser does not support video.
				</video-->
			</div>
			<div class="home2">
				<h2>What's MoeMoe means?</h2>
				<p>MoeMoe is a site to help you (yes, you!) to learn basic <i>Japanese</i> language. Learning the language should be fun. Therefore, we make several products to help you learn Hiragana and Kanji. To make it more exciting, we also included illustrations by Ikyuu-sensei based on Danny Choo Culture Japan Mascot, Mirai Suenaga and Friends.</p>
			</div>
			<div class="home3">
				<div class="learn">
					<a href="moekanafirst.php">
						<img src="http://images.dannychoo.com/cgm/images/post/20120309/26457/141118/large/bdab4d1312811341af99ef79bd6e9275.jpg" alt="moekanafirst">
						<h3>Moekana First Edition</h3>
						<p>Learn basic Japanese language by learning Hiragana</p>
					</a>
				</div>
				<div class="learn">
					<a href="moekanasecond.php">
					<img src="http://images.dannychoo.com/cgm/images/post/20120309/26457/141123/large/f5eab92c9800c876cd661d31dca61096.jpg" alt="moekanasecond">
					<h3>Moekana Second Edition</h3>
					<p>Complete our first one, add more with Moekana's Second</p>
				</a>
				</div>
				<div class="learn">
					<a href="moekanji.php">
					<img src="http://images.dannychoo.com/cgm/images/post/20120309/26457/141111/large/f738961d7a34aa6e967a3396ddfd4d6d.jpg" alt="moekanji">
					<h3>Moekanji</h3>
					<p>Want to be proficient in lingo, try this one!</p>
				</a>
				</div>
				<div class="learn">
					<a href="4koma.php">
					<img src="http://images.dannychoo.com/cgm/images/post/20120309/26457/141098/large/65e99f93063d10a168a36bc6596d5081.jpg" alt="moemanga">
					<h3>Moemanga</h3>
					<p>Prove yourself by reading our manga in Japanese! </p>
				</a>
				</div>
			</div>
			<div class="home4">
				<div class="home-par"><h2>Want to get paid?</h2>
					<p>After all, what's the meaning of learning without being paid? Submit your own ideas for moemanga, and we will reward you with money to make more</p>
					<a href="moemanga.php"><button class="button" style="float:right;"><span>Ideas</span></button></a>
				</div>
				<div class="home-image"><img src="http://images.dannychoo.com/cgm/images/post/20120309/26457/141124/large/2ce1aab5fd880b01e9e4ec0f5e0c63d8.jpg" style="float: right;"></div>
			</div>
			<div class="home5">
				<div class="home-image"><img src="http://images.dannychoo.com/cgm/images/post/20120309/26457/141132/large/f43d0d365154756e1796cf48731f4174.jpg" style="float: left;"></div>
				<div class="home-par"><h2>Can't get the cuties out of your head?</h2>
					<p>Have you ever wonder what is Mirai's 3 size? What is Eiji's hobbies? And what kind of weapon Kanata is using? Fill your head even more with their characters and personalities &hearts; </p>
					<a href="characters.php"><button class="button" style="float: left;margin-left:0; width: 220px;"><span>Characters</span></button></a>
				</div>
			</div>
			<div class="home6">
				<div class="home-par"><h2>Can't resist yourself?</h2>
					<p>Had the urge to touch 'n' play with moekana and moekanji right now? Head over to our shop to make your dreams come true &#9733;</p>
					<a href="shop.php"><button class="button" style="float:right;"><span>Shop</span></button></a>
				</div>
				<div class="home-image"><img src="http://images.dannychoo.com/cgm/images/post/20120309/26457/141114/large/ac66a37d6eb4f4ba78397a80746dd47b.jpg" style="float: right;"></div>
			</div>
			</div>
		</div>
		<?php callfooter(); ?>

	<script type="text/javascript">
		for (var i=1;i<=7;i++){
			$('.home'+i).css({"padding": "10px"});
		}
		for (var j=3;j<=7;j++){
			$('.home'+j).css({"display": "flex"});
		}

		for (var i=2;i<=7;i+=2){
			$('.home'+i).css({"background-color": "#FFC266"});
		}
	</script>

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
