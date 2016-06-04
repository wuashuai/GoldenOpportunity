<?php
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
    <title>login</title>
    <link type="text/css" rel="stylesheet" href="css/style.css">
</head>

<body>    
	<?php
    	include 'header.php'; 
    	require_once "config.php";
		$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
		if($mysqli->errno){
			print("error");
			exit();
		}
	?>
	<?php
		if(isset($_GET['logout'])){
			unset($_SESSION['logged_user']);
			unset( $_SESSION );
			$_SESSION = array();
			session_destroy();
			header('Location:index.php');
		}
	?>

	<?php
		$username = filter_input( INPUT_POST, 'username', FILTER_SANITIZE_STRING );
		$password = filter_input( INPUT_POST, 'password', FILTER_SANITIZE_STRING );
		if (empty($username) || empty($password)) {
		
	?>
    <div class = "container">
            <div class = "row">
            	<br>
            	  <div class = "col-sm-1">
            	  </div>
            	  <div class = "col-sm-5">
	                  <h3>&nbsp;&nbsp;<i class="fa fa-sign-in"></i>&nbsp;&nbsp; Log in</h3>
                       <div class = "logform">
						<form action="login.php" method="post">

							Username: <input type="text" name="username"> <br>
							Password: <input type="password" name="password"> <br>
							<input type="submit" value="login" name ="login">
						</form>
                        </div>
                    </div>
                   <div class = "col-sm-5"> 
                   	<h3>&nbsp;&nbsp;<i class="fa fa-motorcycle"></i>&nbsp;&nbsp; Not a user? Register now!</h3>
						
					  <div class = "logform">
						<form action="register.php" method="post">
							Username: <input type="text" name="username1"> <br>
							Password: <input type="password" name="password1"> <br>
							<input type="submit" value="register" name ="register">
						</form>
					   </div>
					</div>
					<div class = "col-sm-1">
            	    </div>
            	</div>
            </div>

	<?php
		} else {
		
			$sql = "SELECT password, type FROM admin WHERE username = '$username'";
			$users = $mysqli->query($sql);

			if ($users->num_rows == 1) {
				$user = $users->fetch_assoc();
				if(password_verify($password,$user['password'])){
					
					$_SESSION['logged_user'] = $username;
					$_SESSION['type'] = $user['type'];

					echo '<p>cool you have login</p>';
					
					header('Location:index.php');

				}else{
					echo '<p>You did not login successfully.</p>';
					echo '<p>Please <a href="login.php">login</a></p>';	
				}			
			}else{
				echo "<p>You don't register as a member</p>";
				echo '<p>Please <a href="login.php">login</a></p>';
			}
		}
	?>
</body>
</html>