<?php
	include('php/rfunctions.php');
	include('php/navigation.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/gallery.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>MoeMoe</title>
	<link rel="icon" href="images/retrokyuu.ico" type="image/x-icon">
</head>
<body>

	<?php
		callnavigation();
	?>

	<div class="container-menu">
		<div class="menu-choice">
			<div><img src="http://images.dannychoo.com/cgm/images/post/20141231/27256/185319/original/d5fad1ae67cb9704116e74fe3bb2ec01.jpg" alt="New Year" id="nav-1"><figcaption>Happy New Year &#127881;</figcaption></div>
			<div><img src="images/wallpaper/valentine.jpg" alt="Valentine" id="nav-2"><figcaption>Valentine's Day &#128149;</figcaption></div>
			<div><img src="http://images.dannychoo.com/cgm/images/post/20160205/27339/187727/large/36f9a8158b34e5321bd4fea0996554cb.jpg" alt="Lunar New Year" id="nav-3"><figcaption>Lunar New Year &#127982;</figcaption></div>
			<div><img src="http://images.dannychoo.com/cgm/images/post/20151224/27329/187431/original/424cfc0b8154b0b82e83363456a4b03b.jpg" alt="Christmas" id="nav-4"><figcaption>Christmas &#127876;</figcaption></div>
		</div>
	</div>

	
	<div class="container-content">
		<!--New Year-->
		<div class="header-wallpaper header-active" id="head-1">
			<div class="column">
				<img src="http://images.dannychoo.com/cgm/images/post/20141231/27256/185319/original/d5fad1ae67cb9704116e74fe3bb2ec01.jpg" onclick="openImage(this);">
			</div>
			<div class="column">
				<img src="http://images.dannychoo.com/cgm/images/post/20141231/27256/185326/original/6b8b0fa46cf3a517c6e8d607e0b09f37.jpg" onclick="openImage(this);">
			</div>
			<div class="column">
				<img src="http://images.dannychoo.com/cgm/images/post/20151231/27332/187489/original/2e1473e1274543d104960bd9509e9eee.jpg" onclick="openImage(this);">
			</div>
		</div>


		<!--Valentine's Day	-->	
		<div class="header-wallpaper" id="head-2">
			<div class="column">
				<img src="http://images.dannychoo.com/cgm/images/post/20170215/27541/188875/original/dda6ef791e02f9ce0092de8c8457344f.JPG" onclick="openImage(this);">
			</div>
			<div class="column">
				<img src="http://images.dannychoo.com/cgm/images/post/20170215/27542/188876/original/f93335fdf6c395b58e89c5902baa3aba.JPG" onclick="openImage(this);">
			</div>
			<div class="column">
				<img src="http://images.dannychoo.com/cgm/images/post/20170215/27543/188877/original/79732107ed6047125059713d683f6170.JPG" onclick="openImage(this);">
			</div>
		</div>


		<!--Lunar New Year-->
		<div class="header-wallpaper" id="head-3">
			<div class="column">
				<img src="http://images.dannychoo.com/cgm/images/post/20160205/27339/187727/original/36f9a8158b34e5321bd4fea0996554cb.JPG" onclick="openImage(this);">
			</div>
			<div class="column">
				<img src="http://images.dannychoo.com/cgm/images/post/20160205/27339/187732/original/8cfad26b030c2a723d2568649d16fd6a.JPG
				" onclick="openImage(this);">
			</div>
			<div class="column">
				<img src="http://images.dannychoo.com/cgm/images/post/20160205/27339/187744/original/333b31c88985b5a7641b01a2d7ba43f0.JPG" onclick="openImage(this);">
			</div>
		</div>

		<!--Christmas-->
		<div class="header-wallpaper" id="head-4">
			<div class="column">
				<img src="http://images.dannychoo.com/cgm/images/post/20141225/27254/185243/original/f7388e417cf3b96bccb6526d32c878bd.jpg" onclick="openImage(this);">
			</div>
			<div class="column">
				<img src="http://images.dannychoo.com/cgm/images/post/20151224/27329/187431/original/424cfc0b8154b0b82e83363456a4b03b.jpg
				" onclick="openImage(this);">
			</div>
		</div>

		<div class="content-wallpaper">
			<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
			<img id="expandedImg" style="width:100%">
		</div>
		<div>
			<p id="back">&#128285;</p>
		</div>
		
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
	<script type="text/javascript" src="js/gallery.js"></script>
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