<?php
	
	function callnavigation(){
	echo '<nav>
		<ul>
			<li><img alt="Logo" src="images/logo.jpg" class="logo"></li>

			<li><a href="index.php" class="active">Home</a></li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">MoeLearn</a>
				<div class="dropdown-content">
					<a href="moekana.html">Moekana</a>
					<a href="moekanji.html">Moekanji</a>
					<a href="moemanga.php">Moemanga</a>
					<a href="moeplay.html">MoePlay! &hearts;</a>
				</div>
			</li>
			<li><a href="4koma.html">MoeSensei</a></li>
			<li><a href="characters.php">Characters</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="shop.php">Shop</a></li>';

			$loginlink = "login.php";
			var_dump($_SESSION);
			if(isset($_COOKIE['cookie_name']) && isset($_COOKIE['cookie_pass'])){
				//header("location: login.php");
				$_SESSION['user']['username'] = $_COOKIE['cookie_name'];
				$_SESSION['user']['password'] = $_COOKIE['cookie_pass'];
				echo "Hello World to" .$_SESSION['user']['username'];
				$logoutlink1 = "index.php?logout='1'";
				echo "<li><a href='".$logoutlink1."'>Log Out</a></li>";
			}
			else if (isset($_SESSION['user'])){
				//			$logoutlink = "logout.php";
			$logoutlink1 = "index.php?logout='1'";
			echo "Hello World to" .$_SESSION['user']['username'];
			echo '<a href="topup.php">';
			echo "Your money is " .$_SESSION['user']['money'];
			echo '</a>';
			echo "<li><a href='".$logoutlink1."'>Log Out</a></li>";
			
			}
			else {
				echo "<a href='".$loginlink."'>Login</a>";
		}
			
			
		echo '</ul>
	</nav>';
}
?>