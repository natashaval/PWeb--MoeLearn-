<?php
	include('php/rfunctions.php');
	include('php/navigation.php');
	include ('php/mangafunctions.php');
?>	

	<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/base.css">
		<link rel="stylesheet" type="text/css" href="css/article.css">
		<link rel="stylesheet" type="text/css" href="css/manga1.css">
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

		<div class="article">
			<p class="article-title">Introducing Moemanga</p>
			<img src="http://images.dannychoo.com/cgm/images/post/20131012/27075/177406/large/3cfa833e78f58e4c7023239779952c5f.jpg" class="article-header" alt="moemanga header">
			<p class="article-sub">What is Moemanga?</p>
			<p>
				<a href="4koma.html">MoeManga</a> features the slice of life antics of the Mirai Millennium <a href="characters.html">characters</a> with Mirai Suenaga as the heroine of the story.

				The free-to-view MoeManga will be released periodically in both Japanese and English at <a href="4koma.html">MoeSensei</a>.

				MoeManga includes definitions and usage of key Japanese words that were used in the 4koma which are broken down and explained in English. Each strip introduces a wide variety of Japanese words and expressions used in everyday life which are great for beginners and intermediate Japanese learners alike.<br>
			</p>
			<img src="http://images.dannychoo.com/cgm/images/post/20131012/27075/177541/large/eac1cf6b9f36bb7372845fa43df299b5.jpg" class="article-images">
			<p class="article-sub">What is 4Koma?</p>
			<img src="http://images.dannychoo.com/cgm/images/post/20120309/26457/141137/large/aa5d059e1bce1f3d385fe4dae6678262.jpg" style="float:right; margin: 20px 5px 0px 20px;">
			<p>
				4koma (read as "yonkoma") are comic strips that are restricted to only 4 panels, and typically meant to be humorous. <br>

				Traditionally, Yonkoma follow a structure known as Kishōtenketsu [起承転結]. This word is a compound formed from the following Japanese Kanji characters:<br>
				<ul class="list">
					<li>起(ki): The first panel forms the basis of the story; it sets the scene.</li>
					<li>承(sho): The second panel develops upon the foundation of the story laid down in the first panel.</li>
					<li>転(ten) : The third panel is the climax, in which an unforeseen development occurs.</li>
					<li>結(ketsu): The fourth panel is the conclusion, in which the effects of the third panel are seen. This is also called the Ochi.</li>
				</ul>
				<p>- from <a href="https://en.wikipedia.org/wiki/Yonkoma" target="_blank">Wikipedia</a></p>
			</p>
			<p class="article-sub">Be A Part of MoeManga</p>
			<p>
				<strong>MoeManga is written by you!</strong><br>
				<p>If you are interested in having your 4koma ideas illustrated by <a href="https://twitter.com/#!/ikkyu019" target="_blank">Ikkyuu-sensei</a> and possibly featured in future publications, just fill up the form below with your idea and you're all set. Make sure to feature the mascot <a href="characters.html">characters</a> of Culture Japan and Mirai Millennium. If your idea is selected for the 4koma adaptation, you will be paid some coffee money so you can relax at a cafe and think of more awesome ideas ^^;</p>
				<img src="http://images.dannychoo.com/cgm/images/post/20131012/27075/177676/large/c9f3bbf501c6eea1f56652951f116fa0.jpg" class="article-images">
			</p>
			<p class="article-sub">Before Submitting Anything, Please Read</p><img src="http://images.dannychoo.com/cgm/images/post/20120309/26457/141092/large/b49dd7be7adf6c8e6ed30be033a5dd9e.jpg" style="float:left; margin: 20px 15px 20px 0px;">
			<p>
				<ul class="list">
					<li>You can submit as many ideas as you want whenever you want.</li>
					<li>All submitted ideas are usually tweaked by myself for various reasons including making the idea more interesting or space restrictions in each panel.</li>
					<li>4koma writers will be paid 10 USD by paypal for each idea that is used - you pay the paypal fee though. For example, if you end up submitting 100 ideas that get used then you get paid 1000 USD.</li>
					<li>If a few writers submitted similar 4koma then the first writer that submitted will be chosen.</li>
					<li>You will be credited as the writer of each 4koma in the body of text which accompanies each MoeManga episode.</li>
					<li>Do make sure that the ideas are yours and yours alone - don't copy them from anywhere!</li>
				</ul>
			</p>
			<p class="article-sub">How To Fill Out The Form</p>
			<p>
				<p>For each panel you should generally write something like:-</p>
				<blockquote>Mirai: (In bikini on the beach) "its a nice day!"<br>
				Eiji: (in shorts peeks from behind a palm tree with nose bleeding</blockquote>
				<p>and for the second panel...</p>
				<blockquote>Haruka: "Mirai-onee-chan! Look out there is a hentai!"<br>Mirai "Whaaa?!"</blockquote>
			</p>


<!-- Trigger/Open The Modal -->
<?php

if (isset($_SESSION['user']) && ($_SESSION['user']['user_type'] == 0)){
echo '<button class="button" id="myBtn" style="width: 50%; margin: 0px auto; display: block;"><span>Submit Your Ideas Now</span></button>';
	}
else if (isset($_SESSION['user']) && ($_SESSION['user']['user_type'] == 1)){
	$mangasubmit = "mangasubmit.php";
echo '<a href="' .$mangasubmit. '"><button class="button" id = "adminBtn" style="width: 50%; margin: 0px auto; display: block;"><span>Display Ideas</span></button></a>';
}

?>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <p class="form-title">Submit your 4koma Ideas</p>
      <?php var_dump($_SESSION); ?>
    </div>
    <div class="modal-body">
    	<form class="animate" action="moemanga.php" method="POST" enctype="multipart/form-data">
      <div class="first">
			<fieldset>
				<legend>Author Identity: </legend>
				<label class="question1">Full Name</label><br>
				<label class="question2">Your full name as author</label><br>
				<input type="text" name="fullname" id="fullname"><br>
				<label class="question1">Pen Name</label><br>
				<img src="http://images.dannychoo.com/cgm/images/post/20120309/26457/141122/large/f6aaff0a18a6829411471ff92d8e7fc2.jpg" style="float:right;">
				<label class="question2">The pen name appears below the MoeManga</label><br>
				<input type="text" name="penname" id="usrname"><br>
				<label class="question1">Which one should appear?</label><br>
				<input type="radio" id="nameboth" name="author" value="nameboth">Full Name<br>
				<input type="radio" id="penname" name="author" value="penname">Pen Name<br>
				<input type="radio" id="anonymous" name="author" value="anonymous" checked>Anonymous<br>
				<label class="question1">Your Gender</label><br>
				<input type="radio" id="male" name="gender" value="male">Male &#9794;<br>
				<input type="radio" id="female" name="gender" value="female">Female &#9792;<br>
				<input type="radio" id="other" name="gender" value="other" checked>Other<br>
				<label class="question1">Your Continent</label><br>
				<select name="continent">
					<option value="Asia">Asia</option>
					<option value="Africa">Africa</option>
					<option value="North America">North America</option>
					<option value="South America">South America</option>
					<option value="Europe">Europe</option>
					<option value="Australia">Australia</option>
				</select><br>
				<label class="question1">Website URL</label><br>
				<label class="question2">URL you would like us to link to in the credits</label><br>
				<input type="url" name="usrurl" placeholder="http://www.example.com"><br>
				<label class="question1">E-mail Address</label><br>
				<label class="question2">For us to contact you if your idea was chosen</label><br>
				<?php 
				if (isset($_SESSION['user'])){
					$usremail = $_SESSION['user']['email'];
					echo '<input type="email" value="' .$usremail. '" disabled>';
				}
				else {
					echo '<input type="email" value="You must log in first" disabled>';
					$loginlink = "login.php";
					echo ' <a href="' .$loginlink. '">Login</a>';
				}
				?>
				<!--input type="email" name="usremail" placeholder="name@example.com"-->
			</fieldset>
			<!--button id="next1">Next</button--> 
		</div>
      <div class="second">
			<fieldset>
				<legend>4Koma Ideas: </legend>
				<label class="question1">4koma Title</label><br>
				<input type="text" id="title" name="titlekoma" autofocus><br>
				<label class="question1">1st koma</label><br>
				<label class="question2">起(ki): The first panel forms the basis of the story; it sets the scene.</label><br>
				<textarea id="firstkoma" name="firstkoma"></textarea><br>

				<label class="question1">2nd koma</label><br>
				<label class="question2">承(sho): The second panel develops upon the foundation of the story laid down in the first panel.</label><br>
				<textarea id="secondkoma" name="secondkoma"></textarea><br>

				<label class="question1">3rd koma</label><br>
				<label class="question2">転(ten) : The third panel is the climax, in which an unforeseen development occurs.</label><br>
				<textarea id="thirdkoma" name="thirdkoma"></textarea><br>

				<label class="question1">4rd koma</label><br>
				<label class="question2">結(ketsu): The fourth panel is the conclusion, in which the effects of the third panel are seen.</label><br>
				<textarea id="fourthkoma" name="fourthkoma"></textarea><br>

				<label class="question1">Remarks</label><br>
				<label class="question2">If you have images that help illustrate your idea, you can include it here. (limit to 2MB with file extension .jpg, .png, .gif, and .bmp)</label><br>
				<input type="file" name="komaimg"><br><br>
<!--
						<input type="reset" value="&#8634; Reset">
						<input type="submit" value="&#10148; Submit">
					-->
				</fieldset>
				<!--button id="prev1">Prev</button-->
				<!--button id="submit1">Submit</button-->
				<input type="submit" name="submit_manga" id="submitform">
				<input type="reset" name="reset" id="resetform">
			</div>
  </form>
    </div>
    <div class="modal-footer">
        <button class="btn warning" id="prevBtn">&laquo; Previous</button>
		<button class="btn warning" id="nextBtn">Next &raquo;</button>

    </div>
  </div>
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
