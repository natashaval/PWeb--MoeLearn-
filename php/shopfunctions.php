<?php
//readfilefromdatabase: https://stackoverflow.com/questions/20802539/display-data-from-database-into-html-table

	// connect to database
$db = mysqli_connect('localhost', 'root', '', 'moemoe');
if (!$db){
		die("Error: Connection Failed!");
	}

//variable get untuk edit
$noget = $_GET["edit"];	

	function showitem(){
		//show list item
		global $db;
		$query = "SELECT * FROM moeshop";
		$result = mysqli_query($db, $query);
		while ($row = mysqli_fetch_assoc($result)){
			echo '<div class="card">';
			echo '<img src="' .$row['item_imgpath']. '"/>';
			//echo '<img src="$row['item_imgpath']">';
			echo "<h2>$row[item_name]</h2> <p>$row[item_date]</p><span>$row[item_price]</span><br><br>";

//differentiate admin & users
		if (isset($_SESSION['user']) && ($_SESSION['user']['user_type'] == 1)){
			$hrefedit = "edititem.php?edit=" .$row['item_id'];
//			echo "$hrefedit";
			echo '<a href="' .$hrefedit. '">Edit</a><br>';
//			echo "<br>$row[item_id]<br>";
			$deletelink = "shop.php?delete=" .$row['item_id'];
//			echo "$deletelink";
			echo '<a href="' .$deletelink. '">Delete</a><br>';
		}
		else if(isset($_SESSION['user']) && ($_SESSION['user']['user_type'] == 0)) {
			$buylink = "shop.php?buy=" .$row['item_id'];
//			echo "$buylink";
			echo '<a href="' .$buylink. '">Buy</a><br>';	
		}

		else {
			$buylink = "login.php";
			echo '<a href="' .$buylink. '">Buy</a><br>';
		}

			echo '</div>';
		}

	}

	if(isset($_POST['itemadd_btn'])){
		additemimg();
		additem();
	}

	if (isset($_GET['delete'])){
		echo '<script type="text/javascript">';
		echo 'if (confirm("Are you sure to delete the item?")) {';
			deleteitem();
		echo '}';
		echo '</script>';
	}

	if(isset($_GET['buy'])){
		buyitem();
	}

	if(isset($_POST['itemedit_btn'])){
		edititemlist();
	}

	if(isset($_POST['picedit_btn'])){
		edititempic();
	}

	function additem(){
		global $db;
		$itemname = mysqli_real_escape_string($db, $_POST['itemname']);
		$itemdate = mysqli_real_escape_string($db, $_POST['itemdate']);
		$itemprice = mysqli_real_escape_string($db, $_POST['itemprice']);
		$itemimgpath = "vendoritem/".$_FILES["itemimg"]["name"];

		$queryitem = "INSERT INTO moeshop(item_name, item_date, item_price, item_imgpath) VALUES('$itemname', '$itemdate', '$itemprice', '$itemimgpath')";

		mysqli_query($db, $queryitem);
	}

	function additemimg(){
	$target_dir = "vendoritem/";
	$target_file = $target_dir . basename($_FILES["itemimg"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	$uploaderrors  = array();
	$check = getimagesize($_FILES["itemimg"]["tmp_name"]);
	if($check !== false) {
//		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		array_push($uploaderrors, "File is not an image");
		$uploadOk = 0;
	}

	if ($uploadOk == 0) {
//		echo "Sorry your file was not uploaded!";
		array_push($uploaderrors, "Sorry, your file was not uploaded.");
//		print_r($uploaderrors);
	}
// if everything is ok, try to upload file
	else {
		if (move_uploaded_file($_FILES["itemimg"]["tmp_name"], "vendoritem/".$_FILES["itemimg"]["name"])) {
//			echo "The file ". basename( $_FILES["itemimg"]["name"]). " has been uploaded.";
			
			echo '<script type="text/javascript">';
			echo 'alert("Success in uploading item!")';
			echo '</script>';
		} else {
			echo '<script type="text/javascript">';
			echo 'alert("Sorry, failed to upload item!")';
			echo '</script>';
//			echo "Sorry, there was an error uploading your file.";
//			echo "target filetempat" .$target_dir. "apa";
		}
		
	}
    
}

	function deleteitem(){
		global $db;
		$querydelete = "DELETE FROM moeshop WHERE item_id = ".$_GET['delete'];
		if (mysqli_query($db, $querydelete)){
			echo "success";
		}
		else echo "fail";
	}

	function buyitem(){
		global $db;
//		var_dump($_SESSION);
		$query = "SELECT * FROM moeshop WHERE item_id = " .$_GET['buy'];
//		echo "$query <br>";
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_assoc($result);
		if(isset($_SESSION['user'])){
			$topupid = $_SESSION['user']['id'];
//			echo $topupid;
		}

		if ($_SESSION['user']['money'] >= $row["item_price"]){
			echo '<script type="text/javascript">';
		echo 'if (confirm("Are you sure to buy this item?")) {';
			$topupquery = 'CALL buyitem(' .$topupid. ',' .$_GET['buy']. ');';
			mysqli_query($db, $topupquery);
		echo '}';
		echo '</script>';
		}
		else {
			echo '<script type="text/javascript">';
			echo 'alert("Your money is insufficient!")';
			echo '</script>';
//			echo 'Your money is insufficient';
		}

			$apaseh = getmoneynow($topupid);
//			var_dump($apaseh);
//			echo 'ini setelah dipotong BUY ' .$apaseh["money"];
			$_SESSION['user']['money'] = $apaseh["money"];
	}

	function edititemform(){
		global $noget, $db;
		$query = "SELECT * FROM moeshop WHERE item_id = " .$noget;
		echo "$query <br>";
		$result = mysqli_query($db, $query);
		$row = mysqli_fetch_assoc($result);
//		var_dump($row);

		echo "item nomor $noget";
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 1) {
		echo '<div class="moekana-row">
			<div class="moekana-column" style="flex: 60%;">';
			echo '<form method="POST" action="edititem.php?edit=' .$noget. '" method="POST" enctype="multipart/form-data">';
			echo '<input onchange="readURL(this);" type="file" name="editimg" /><br>';
		echo '<label class="question1">Previous Item Images</label><br>
		<img src="' .$row["item_imgpath"]. '" style="width: 40%; padding: 0px 20px;">
      <img id="test" src="#" style="width: 40%;padding: 0px 20px;" /><br>
      <input type="submit" name="picedit_btn" value="Edit Images"></div>';

      echo '<div class="moekana-column" style="background-color: #FFCC66; flex: 40%; padding: 20px; border-left: 5px solid #FFA500;">';
      
      
		echo '<label class="question1">Item Name</label><br>
		<input type="text" name="itemname" value="' .$row["item_name"]. '"><br>';
		echo '		<label class="question1">Item Release Date</label><br>
				<input type="date" name="itemdate" value="' .$row["item_date"]. '"><br>';
		echo '<label class="question1">Item Price</label><br>
				<input type="number" name="itemprice" value="' .$row["item_price"]. '"><br>
				<input type="submit" name="itemedit_btn" value="Edit Item">
				<br><br><a href="shop.php">Back to Item Menu</a>
				</form>
				</div>
			</div>';
		}
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 0) {
			echo '<img src="images/403-error.png">';
		}
	}

	function edititemlist(){
		global $noget, $db;
		$editname = mysqli_real_escape_string($db, $_POST["itemname"]);
		$editdate = mysqli_real_escape_string($db, $_POST["itemdate"]);
		$editprice = mysqli_real_escape_string($db, $_POST["itemprice"]);
//		echo "$editname $editdate $editprice";
		$queryname = 'UPDATE moeshop SET item_name = "' .$editname. '", item_date ="' .$editdate. '", item_price ="' .$editprice. '" WHERE item_id =' .$noget;
//		echo "$queryname";
		if(mysqli_query($db,$queryname)){
			echo '<script type="text/javascript">';
			echo 'alert("Success in editing item!")';
			echo '</script>';
		}
		else {
			echo '<script type="text/javascript">';
			echo 'alert("Failed in editing item!")';
			echo '</script>';
		}
	}

	function edititempic(){
		global $noget, $db;
		$itemimgpath = "vendoritem/".$_FILES["editimg"]["name"];
		$querypath = 'UPDATE moeshop SET item_imgpath = "' .$itemimgpath. '" WHERE item_id =' .$noget;
		echo "$querypath";
		if(mysqli_query($db,$querypath)){
			echo 'Success';
		}
		else {echo 'Failed edit';}

		$target_dir = "vendoritem/";
	$target_file = $target_dir . basename($_FILES["editimg"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

	$uploaderrors  = array();
	$check = getimagesize($_FILES["editimg"]["tmp_name"]);
	if($check !== false) {
//		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
	} else {
		array_push($uploaderrors, "File is not an image");
		$uploadOk = 0;
	}
	if ($uploadOk == 0) {
//		echo "Sorry your file was not uploaded!";
		array_push($uploaderrors, "Sorry, your file was not uploaded.");
	}
// if everything is ok, try to upload file
	else {
		if (move_uploaded_file($_FILES["editimg"]["tmp_name"], "vendoritem/".$_FILES["editimg"]["name"])) {
//			echo "The file ". basename( $_FILES["itemimg"]["name"]). " has been uploaded.";
			
			echo '<script type="text/javascript">';
			echo 'alert("Success in updating image!")';
			echo '</script>';
		} else {
			echo '<script type="text/javascript">';
			echo 'alert("Sorry, failed to update image!")';
			echo '</script>';
//			echo "Sorry, there was an error uploading your file.";
//			echo "target filetempat" .$target_dir. "apa";
		}
		
	}

	}
?>