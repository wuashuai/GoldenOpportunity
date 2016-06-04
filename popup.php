<!DOCTYPE html>
<html>
<head>
<title>Golden Opportunity</title>
<link href="css/style.css" rel="stylesheet">
<link href="css/popup.css" rel="stylesheet">
<script src="popup.js"></script>
    <?php
        require_once "config.php";
        $mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
        if($mysqli->errno){
            print("error");
            exit();
        }
    ?>
</head>
<!-- Body Starts Here -->
<body id="body">
	<?php
         include 'header.php'; 
    ?>
<div id="page">
<div id="popup">
<!-- Contact Us Form -->
<form id="form" method="post" name="form" enctype="multipart/form-data">
<img id="close" src="" alt="Golden Opportunity" onclick ="div_hide()">
<h2>File Upload</h2>
<?php
	if(isset($_GET['simageid'])){
?>
<label for="slidephoto">Slide photo upload: </label>
<input id="slidephoto" type="file" name="slidephoto"><br>
<input id="modifyPhoto" type="submit" name="modifyPhoto" value="modify" class="button">
<input id="uploadslidePhoto" type="submit" name="uploadslidePhoto" value="upload" class="button">
<input id="deletePhoto" type="submit" name="deletePhoto" value="delete" class="button">
<input id="cancle" type="submit" value="cancel" name="cancel" class="button">
<?php
	}
	else{
?>
<label for="newphoto">photo upload: </label>
<input id="newphoto" type="file" name="newphoto"><br>
<input id="uploadPhoto" type="submit" name="uploadPhoto" class="button">
<input id="cancle" type="submit" value="cancel" name="cancel" class="button">
<?php
	}
?>


<?php
	// if(isset($_SESSION['logged_user'])){

 //        $logged_user = $_SESSION['logged_user'];
   require_once 'dbhandler.php';

	if (! empty($_FILES['newphoto'])) {
		$file = $_FILES['newphoto'];
		$table = 'image';
		$imageid = filter_input( INPUT_GET, 'imageid', FILTER_SANITIZE_STRING );
		modify($file, $table, $imageid);
	}
		// $mysqli->close();

	if(isset($_POST['cancel'])) {
		echo '<script language="javascript" type="text/javascript">';
		echo 'window.location = "index.php"';
		echo '</script>';
	}
	// }

	if(isset($_POST['uploadslidePhoto'])) {
		if(!empty($_FILES['slidephoto'])) {
			$file=$_FILES['slidephoto'];
			$table = 'slide_image';
			upload($file, $table);
		}
	}

	if(isset($_POST['modifyPhoto'])) {
		if(!empty($_FILES['slidephoto'])) {
			$file=$_FILES['slidephoto'];
			$table = 'slide_image';
			$imageid = filter_input( INPUT_GET, 'simageid', FILTER_SANITIZE_STRING );
			modify($file, $table, $imageid);
		}
	}

	if(isset($_POST['deletePhoto'])) {
		$imageid = filter_input( INPUT_GET, 'simageid', FILTER_SANITIZE_STRING );
		delete($imageid);
	}




?>
</form>


</div>
</div>
</body>
<!-- Popup Div Ends Here -->


</html>