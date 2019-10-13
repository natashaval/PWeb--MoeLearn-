<?php
	include('php/rfunctions.php');
	include('php/navigation.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/moekana.css">
	<link href="https://fonts.googleapis.com/css?family=Handlee|Merienda+One|Fredericka+the+Great" rel="stylesheet">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>MoeMoe</title>
	<link rel="icon" href="images/retrokyuu.ico" type="image/x-icon">
</head>
<body>

	<?php
			callnavigation();
		?>

<div class="container">
	<div class="moekana-row">
		<div class="moekana-column">
			<a href="moekanafirst.php"><img src="http://images.dannychoo.com/cgm/images/post/20140416/27184/182961/large/2c7988c7ce70c08685e049c227047998.jpg" class="moekana-images"></a>
			<div class="center text-left">
				<div class="text"><a href="moekanafirst.php">First <br>Edition</a></div>
			</div>

		</div>
		<div class="moekana-column">
			<a href="moekanasecond.php"><img src="http://images.dannychoo.com/cgm/images/post/20140416/27184/182957/large/e28580f887164e414c3658b87ca18d7c.jpg"
			class="moekana-images"></a>
			<div class="center text-right">
				<div class="text"><a href="moekanasecond.php">Second <br>Edition</a></div>
			</div>
		</div>
	</div>
</div>
	<?php callfooter(); ?>
	
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