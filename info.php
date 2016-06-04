<!DOCTYPE HTML>
<html>
	<head>
		
       <meta charset="utf-8">
       <title>info</title>
       <link type="text/css" rel="stylesheet" href="css/style.css">
       <?php   
           $style_path = 'css/style.css';   
           $version = filemtime( $style_path);   
           echo "<link rel='stylesheet' href='$style_path?ver=$version'>";  
        ?> 

       	<?php
    		require_once "config.php";
			$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
			if($mysqli->errno){
				print("error");
				exit();
			}
		?>
	</head>

	<body>

		<?php
         include 'header.php'; 
    	?>	
    	<div class = "container">
    		<?php
    		//tutor or manager
			if(isset($_SESSION['logged_user']) && ($_SESSION['type'] == 1 || $_SESSION['type'] == 2)){

		?>
    		<div class ="row">
    			<h3>&nbsp;&nbsp;<i class="fa fa-file-image-o  "></i>&nbsp;&nbsp; Files for tutors: </h3>
    		</div>
		<?php
			$sql = "SELECT * FROM file;";
			$files = $mysqli->query($sql);
			$file_num = $files->num_rows;
			echo "<div id='attachment'>";
			echo "<ul class='attachments-line'>";

			for ($i = 0; $i < $file_num; $i++) {
			
				$file = $files->fetch_assoc();
				$url = $file['fURL'];
				$name = $file['fName'];
				$username = $file['fUserName']; 
				$timestamp = $file['createtime'];
                echo "<div class = 'row'></div>";
				echo "<div class = 'col-sm-6'><a href='$url'>$name</a></div>";
				echo "<div class = 'col-sm-3'>$username</div>";
				echo "<div class = 'col-sm-3'>$timestamp</div>";
				echo "</div>";
			}
			echo "</ul>";
			echo "</div>";
		}
		else{
			?>
			<div class ="row">
				<br><br><br>
				<div class = "col-sm-3">
				
				</div>
				
				<div class = "col-sm-8">
    				<h3>&nbsp;&nbsp;<i class="fa fa-key  "></i>&nbsp;&nbsp; You need to log as a tutor or manager to see this page. </h3>
    			</div>
    		</div>
    		<?php
		}
		?>


		<?php
			if(isset($_SESSION['logged_user']) && $_SESSION['type'] == 1){

		?>
		<form class = "add" action = "info.php" method="POST">
		file name : <input type = "text" name = "name"><br>
		file url :  <input type = "text" name = "url"><br>
		file author : <input type = "text" name = "author"><br>
		time : <input type = "text" name = "time"><br>
		<input type = "submit" name="add">
		</form>

	    <?php

				if(isset($_POST["add"]) && isset($_POST["author"]) && isset($_POST["url"]) && isset($_POST["name"]) && isset($_POST["time"])){
					$name = filter_input( INPUT_POST,"name",FILTER_SANITIZE_STRING);
					$author = filter_input( INPUT_POST,"author",FILTER_SANITIZE_STRING);
					$url = $_POST['url'];
					$createtime = filter_input( INPUT_POST,"time",FILTER_SANITIZE_STRING);

					$sql = "SELECT * FROM file where fName = '$name';";
					$files = $mysqli->query($sql);
				
					if($files->num_rows > 0){
						echo "this teacher is already in our system";
						die();
					}

					$query = "INSERT INTO file(fName, fUserName, fURL ,createtime) VALUES ('" . $name . "','" . $author . "','" . $url . "','" . $createtime ."');";
				
					if($mysqli->query($query)){
						echo "<h2>the creation is done</h2>";
					}
				}
			}
		?>

             <div class="footer">
				<p>Photos courtesy of Jo Todd unless otherwise ascribed</p>
			</div>
		</div>
    </body>

</html>
