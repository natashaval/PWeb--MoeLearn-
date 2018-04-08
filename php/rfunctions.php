
	<?php 
	session_start();

	//http://codewithawa.com/posts/admin-and-user-login-in-php-and-mysql-database

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'moemoe');
	if (!$db){
		die("Error: Connection Failed!");
	}
	// variable declaration
	$username = "";
	$email    = "";
	$errors   = array();

	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}
	// call the login() function if login is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

	if (isset($_POST['topup_btn'])){
		topup();
	}

	// REGISTER USER
	function register(){
	// call these variables with the global keyword to make them available in function
		global $db, $errors, $username, $email;

	// receive all input values from the form. Call the e() function
	// defined below to escape form values
		$username    =  mysqli_real_escape_string($db,$_POST['username']);
		$email       =  mysqli_real_escape_string($db,$_POST['email']);
		$password_1  =  mysqli_real_escape_string($db,$_POST['password_1']);
		$password_2  =  mysqli_real_escape_string($db,$_POST['password_2']);

	// form validation: ensure that the form is correctly filled
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The passwords do not match");
		}

	// register user if there are no errors in the form
		if (count($errors) == 0) {
		$password = sha1($password_1);//encrypt the password before saving in the database

		$query = "INSERT INTO users (username, email, password, user_type) VALUES('$username', '$email', '$password', 0)";
		mysqli_query($db, $query);

		echo '<script type="text/javascript">';
		echo 'alert("You have successfully registered!")';
		echo '</script>';

		$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location: index.php');		
		}
	}

	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}


	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
			echo '</div>';
		}
	}	




	// LOGIN USER
	function login(){
		global $db, $username, $errors;

	// grap form values
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$password = mysqli_real_escape_string($db,$_POST['password']);

	// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

	// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = sha1($password);

			$query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['user_type'] == 1) {

				$_SESSION['user'] = $logged_in_user;
	//				$_SESSION['role']  = "You are admin";
				header('location: index.php');		  
			}else if($logged_in_user['user_type'] == 0){
				$_SESSION['user'] = $logged_in_user;
	//				$_SESSION['role']  = "You are user";
				var_dump($_SESSION);

				if(isset($_POST['remember'])) {
					setcookie("cookie_name", $_POST['username'], time()+(60*60));
					setcookie("cookie_pass",sha1($_POST['password']),time()+(60*60));
				}
	/*				else {
					if(isset($_COOKIE['cookie_name'])){
						setcookie("cookie_name","");
					}
					if(isset($_COOKIE['cookie_pass'])){
						setcookie("cookie_pass","");
					}
				}
	*/
				header('location: index.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
	}

	// di index.php >> $logoutlink1 = "index.php?logout='1'";
	//ambil '1' nya sehingga true

	if (isset($_GET['logout'])){
		unset($_SESSION['user']);
		session_destroy();
		if(!empty($_COOKIE['cookie_name'])){
			setcookie("cookie_name", "", time()-3600);
		}
		if(!empty($_COOKIE['cookie_pass'])){
			setcookie("cookie_pass", "", time()-3600);
		}
		header("location: index.php");
	}

	//cookie: http://jagocoding.com/tutorial/75/Login_Dengan_Fitur_Remember_Me
	//cookie: https://phppot.com/php/php-login-script-with-remember-me/

	//Top-Up: https://stackoverflow.com/questions/3966747/how-to-call-a-mysql-stored-procedure-from-within-php-code
	function topup(){
		global $db;
		$topupamount = mysqli_real_escape_string($db, $_POST['topup_money']);
		if (isset($_SESSION['user'])){
			$topupid = $_SESSION['user']['id'];
			$topupquery = 'CALL topup(' .$topupid. ',' .$topupamount. ');';
			mysqli_query($db, $topupquery);

			$apaseh = getmoneynow($topupid);
			
			var_dump($apaseh);
			echo 'ini moneynya ' .$apaseh["money"];
			$_SESSION['user']['money'] = $apaseh["money"];
		}
	}

	function getmoneynow($id){
		global $db;
		$moneynow = "SELECT money from users where id = " .$id;
		$result = mysqli_query($db, $moneynow);
		$aneh = mysqli_fetch_assoc($result);
		return $aneh;
	}
	?>