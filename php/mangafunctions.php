<?php
$db = mysqli_connect('localhost', 'root', 'root', 'moemoe');

if (!$db){
	die("Error: Connection Failed!MANGA");
}

if (isset($_POST['submit_manga'])&&isset($_SESSION['user'])) {
	if(submitimg()){
		submitideas();
		header("location: moemanga.php");
	}
//		header("location: gallery.html");
}
else if (isset($_POST['submit_manga']) && (!isset($_SESSION['user']))){
	//	echo '<script type="text/javascript">alert("You must login first")</script>';
	//	echo "You must login first";
	$message = "You must log in first";
	echo '<script type="text/javascript">';
	echo 'alert("You must log in first!")';
	echo '</script>';
//echo "<script type='text/javascript'>alert('$message');</script>";
//		header("location: login.php");
}

function submitideas(){
	global $db;
	$mangausers = $_SESSION['user']['id'];
	$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
	$penname = mysqli_real_escape_string($db, $_POST['penname']);
	$author = mysqli_real_escape_string($db, $_POST['author']);
	$gender = mysqli_real_escape_string($db, $_POST['gender']);
	$continent = mysqli_real_escape_string($db, $_POST['continent']);
	$usrurl = mysqli_real_escape_string($db, $_POST['usrurl']);

	$titlekoma = mysqli_real_escape_string($db, $_POST['titlekoma']);
	$firstkoma = mysqli_real_escape_string($db, $_POST['firstkoma']);
	$secondkoma = mysqli_real_escape_string($db, $_POST['secondkoma']);
	$thirdkoma = mysqli_real_escape_string($db, $_POST['thirdkoma']);
	$fourthkoma = mysqli_real_escape_string($db, $_POST['fourthkoma']);
	$komaimgpath = "mangaideas/".$_FILES["komaimg"]["name"];
	echo $komaimgpath;

	$tmp_name = $_FILES['komaimg']['tmp_name'];
	$fp = fopen($tmp_name, 'r');
	$content = fread($fp, filesize($tmp_name));
	$content = addslashes($content);
	fclose($fp);

	$querymanga = "INSERT INTO moemanga(manga_users, fullname, penname, author, gender, continent, web_url, titlekoma, firstkoma, secondkoma, thirdkoma, fourthkoma, komaimg, komaimgpath) VALUES ('$mangausers', '$fullname', '$penname', '$author', '$gender', '$continent', '$usrurl', '$titlekoma', '$firstkoma', '$secondkoma', '$thirdkoma', '$fourthkoma', '$content', '$komaimgpath');";
	mysqli_query($db, $querymanga);
}



function submitimg(){
	$target_dir = "../mangaideas/";
	$target_file = $target_dir . basename($_FILES["komaimg"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	$uploaderrors  = array();
	$check = getimagesize($_FILES["komaimg"]["tmp_name"]);
	if($check !== false) {
//		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		array_push($uploaderrors, "File is not an image");
		$uploadOk = 0;
	}
    //check file size
	if ($_FILES["komaimg"]["size"] > 2000000) {
//		echo "Your file is too large";
		array_push($uploaderrors, "Sorry, your file is too large.") ;
		$uploadOk = 0;
	}
	
    //check file type
    //https://www.binarytides.com/php-check-if-file-is-an-image/
	$image_type = $check[2];
	if (in_array($image_type, array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP))){
		$uploadOk = 1;
	}
	else {
//		echo "Sorry, only JPG, JPEG, PNG, GIF are allowed";
		array_push($uploaderrors, "Sorry, only JPG, JPEG, PNG, GIF are allowed");
		$uploadOk = 0;
	}
//	var_dump($_FILES);
    // Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
//		echo "Sorry your file was not uploaded!";
		array_push($uploaderrors, "Sorry, your file was not uploaded.");
//    	echo '<script type="text/javascript">';
//    	echo 'alert(' .$uploaderrors. ')';
//    	echo '</script>';
		print_r($uploaderrors);
	}
// if everything is ok, try to upload file
	else {
		if (move_uploaded_file($_FILES["komaimg"]["tmp_name"], "mangaideas/".$_FILES["komaimg"]["name"])) {
//			echo "The file ". basename( $_FILES["komaimg"]["name"]). " has been uploaded.";
			
			echo '<script type="text/javascript">';
			echo 'alert("File has been uploaded!")';
			echo '</script>';
			return true;
		} else {
			echo '<script type="text/javascript">';
			echo 'alert("Sorry, there was an error uploading your file!")';
			echo '</script>';
//			echo "target filetempat" .$target_dir. "apa";
			return false;
		}
		
	}
}

function tablemangaideas(){
	global $db;
		$query = "SELECT * FROM moemanga JOIN users ON moemanga.`manga_users` = users.`id`;";
		$result = mysqli_query($db, $query);
		while ($row = mysqli_fetch_assoc($result)){
			echo '<tr>';
			echo '<td>Full Name: ' .$row['fullname']. '</td>';
			echo '<td>Title Koma: ' .$row['titlekoma']. '</td>';
//			echo '</tr>';
//			echo '<tr>';
			echo '<td rowspan="5">';
			echo '<img src="' .$row['komaimgpath']. '" width="50%;"><br><a href="download.php?download=' .$row['komaimgpath']. '">Download Image</a></td>';
			echo '</tr>';
			echo '<tr>';
			echo '<td>Pen Name: ' .$row['fullname']. '</td>';
			echo '<td>First Koma: ' .$row['firstkoma']. '</td>';
			echo '</tr><tr>';
			echo '<td>Gender: ' .$row['gender']. '</td>';
			echo '<td>Second Koma: ' .$row['secondkoma']. '</td>';
			echo '</tr><tr>';
			echo '<td>URL: ' .$row['web_url']. '</td>';
			echo '<td>Third Koma: ' .$row['thirdkoma']. '</td>';
			echo '</tr><tr>';
			echo '<td>Email: ' .$row['email']. '</td>';
			echo '<td>Fourth Koma: ' .$row['fourthkoma']. '</td>';
			echo '</tr>';
//			echo '<tr>';
//			echo '<td rowspan="5">';
//			echo '<img src="' .$row['komaimgpath']. '"></td>';
//			echo '</tr>';

		}
}

?>