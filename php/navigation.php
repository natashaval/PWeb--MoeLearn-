<?php
	
	function callnavigation(){
	echo '<nav>
		<ul>
			<li><img alt="Logo" src="images/logo.jpg" class="logo"></li>

			<li><a href="index.php">Home</a></li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">MoeLearn</a>
				<div class="dropdown-content">
					<a href="moekana.php">Moekana</a>
					<a href="moekanji.php">Moekanji</a>
					<a href="moemanga.php">Moemanga</a>
					<a href="moeplay.php">MoePlay! &hearts;</a>
				</div>
			</li>
			<li><a href="4koma.php">MoeSensei</a></li>
			<li><a href="characters.php">Characters</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="shop.php">Shop</a></li>';

			$loginlink = "login.php";
			if(isset($_COOKIE['cookie_name']) && isset($_COOKIE['cookie_pass'])){
				//header("location: login.php");
				$_SESSION['user']['username'] = $_COOKIE['cookie_name'];
				$_SESSION['user']['password'] = $_COOKIE['cookie_pass'];
			//	echo "Hello World to" .$_SESSION['user']['username'];
				$logoutlink1 = "index.php?logout='1'";
				echo "<li style='float:right;'><a href='".$logoutlink1."'>Log Out</a></li>";
				echo "<li style='float:right;'><a href='topup.php'>MoeMoney, " .$_SESSION['user']['money']. "</a></li>";
				echo "<li style='float:right;'><a href=''>Hello, " .$_SESSION['user']['username']. "</a></li>";

				
			}
			else if (isset($_SESSION['user'])){
				//			$logoutlink = "logout.php";
			$logoutlink1 = "index.php?logout='1'";
			echo "<li style='float:right;'><a href='".$logoutlink1."'>Log Out</a></li>";
			echo "<li style='float:right;'><a href='topup.php'>MoeMoney, " .$_SESSION['user']['money']. "</a></li>";
			echo "<li style='float:right;'><a href=''>Hello, " .$_SESSION['user']['username']. "</a></li>";
			
			
			
			}
			else {
				echo "<li style='float:right;'><a href='".$loginlink."'>Login</a></li>";
		}
			
			
		echo '</ul>
	</nav>';
	}

	function callfooter() {
		echo '
		<div class="gifchara">
		<a href="characters.php" id="mirai"></a>
		<a href="characters.php" id="haruka"></a>
		<a href="characters.php" id="kanata"></a>
		<a href="characters.php" id="kizuna"></a>
		<a href="characters.php" id="chitose"></a>
		<a href="characters.php" id="eiji"></a>
		<a href="characters.php" id="retrokyuu"></a>
	</div>
		';
	}
?>