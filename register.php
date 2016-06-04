<?php
session_start();
if (isset($_SESSION['logged_user'])) {
	$olduser = $_SESSION['logged_user'];
	header('Location:index.php');
	//unset($_SESSION[ 'logged_user'] );
} else {
	$olduser = false;
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>register</title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>

<body>    
	<?php
    	require_once "config.php";
		$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
		if($mysqli->errno){
			print("error");
			exit();
		}
	?>

	<?php
		$username = filter_input( INPUT_POST, 'username1', FILTER_SANITIZE_STRING );
		$password = filter_input( INPUT_POST, 'password1', FILTER_SANITIZE_STRING );
		if (empty($username) || empty($password)) {
			header('Location:login.php');
		}else {
			$sql = "SELECT password, type FROM admin WHERE username = '$username'";
			$users = $mysqli->query($sql);

			if ($users->num_rows > 0) {
				echo '<p>this name is already registered.</p>';
				header('Location:login.php');
			}
			
			$hash = password_hash( $username, PASSWORD_DEFAULT);
			$type = 3; 
			$query = "INSERT INTO admin(username, password, type)  VALUES ('" . $username . "','" . $hash . "','" . $type . "');";
			$mysqli->query($query);

				
			$_SESSION['logged_user'] = $username;
			$_SESSION['type'] = $type;

			echo '<p>cool you have registered</p>';
			header('Location:index.php');
		}

	?>
</body>
</html>