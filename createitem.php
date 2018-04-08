<?php
	include ('php/navigation.php');
	include ('php/rfunctions.php');
	include('php/shopfunctions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/article.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="https://fonts.googleapis.com/css?family=Bad+Script|Poiret+One|Raleway|Nanum+Pen+Script" rel="stylesheet">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>MoeMoe</title>
	<link rel="icon" href="images/retrokyuu.ico" type="image/x-icon">

	<script type="text/javascript">
		//https://khantmontu.blogspot.co.id/2012/08/display-image-preview-before-it-upload.html
   function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
        $('#test').attr('src', e.target.result);
       }
        reader.readAsDataURL(input.files[0]);
       }
    }
</script>

</head>
<body>

	<?php
		callnavigation();
	?>

	<div class="shop">
		<div class="shop-header" style="text-align: center;">
			<img src="images/shopheader.jpg"><br>
		</div>
		<div class="shop-content">
			<?php if(isset($_SESSION['user']) && ($_SESSION['user']['user_type'] == 1)) {
			echo '<form method="POST" action="createitem.php" method="POST" enctype="multipart/form-data">
				<div class="login-top">
					<p class="form-title">Add Item</p>
				</div>
				<div class="login-content">
					<input onchange="readURL(this);" type="file" name="itemimg" /><br>
      <img id="test" src="#" style="width: 40%;" /><br>
					<label class="question1">Item Name</label><br>
				<input type="text" name="itemname"><br>
				<label class="question1">Item Release Date</label><br>
				<input type="date" name="itemdate"><br>
				<br>
				<label class="question1">Item Price</label><br>
				<input type="number" name="itemprice"><br>
				<br>
				</div>
				<div class="login-bottom">
					<input type="submit" name="itemadd_btn" value="Add Item">
					<br><br><a href="shop.php">Back to Item Menu</a>
				</div>
			</form>';
			} ?>
			<?php if(isset($_SESSION['user']) && ($_SESSION['user']['user_type'] == 0)) {echo '<img src="images/403-error.png">';}?>
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