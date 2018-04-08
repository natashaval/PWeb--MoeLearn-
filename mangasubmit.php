<?php
	include ('php/rfunctions.php');
	include ('php/navigation.php');
	include ('php/mangafunctions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/apaseh.css">
	<title>MoeMoe</title>
	<link rel="icon" href="images/retrokyuu.ico" type="image/x-icon">
	<meta charset="utf-8">
</head>
<body>

	<?php
		callnavigation();
	?>

	<div class="content">
			<table>
				<tr>
					<th>Identity</th>
					<th>MangaKoma</th>
					<th>Picture</th>
				</th>
				<?php
					tablemangaideas();
				?>
			</table>
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
