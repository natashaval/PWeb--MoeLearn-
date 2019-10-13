<?php
	include ('php/rfunctions.php');
	include ('php/navigation.php');
	include('php/shopfunctions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/apaseh.css">
	<link rel="stylesheet" type="text/css" href="css/comingsoon.css">
	<link rel="stylesheet" type="text/css" href="css/front.css">
	<link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Lato" rel="stylesheet">
	<title>MoeMoe</title>
	<link rel="icon" href="images/retrokyuu.ico" type="image/x-icon">
	<meta charset="utf-8">
	<style type="text/css">
		
	</style>
</head>
<body>

	<?php
		callnavigation();
	?>

	<div class="shop">
		<div class="shop-header" style="text-align: center;">
			<img src="images/shopheader.jpg"><br>
			<?php 
			if (isset($_SESSION['user']) && ($_SESSION['user']['user_type'] == 1)){
				$hrefadd = "createitem.php";
			echo '<br><br><a href="' .$hrefadd. '" class="btnedit">Add Item</a><br>';
		}
			?>
		</div>
		<div class="shop-content">

			<?php showitem()?>
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
