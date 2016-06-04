<?php session_start();?>
<!DOCTYPE HTML>
<html>
	<head>
	   <meta charset="utf-8">
       <title>header</title>
       <link type="text/css" rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
       <?php   
           $style_path = 'css/style.css';   
           $version = filemtime( $style_path);   
           echo "<link rel='stylesheet' href='$style_path?ver=$version'>";  
         ?>
	</head>
	<body>

	<div class = "container ">

		  <div class = "row w3-theme-l3">
		  	<div class="col-sm-4">
		  		<!-- logo -->
				<a href="https://sites.google.com/site/gold4students/">
					<img src="img/customLogo.png" alt=" Golden Opportunity" />
				</a>			
		  	</div>
			<div class="col-sm-8 ">				
				<p class = "title">Golden Opportunity</p>
			</div>
		</div>
		<div class = "row">
			<br>
	    </div>
			<div class = "row">
			    <!-- <div class="col-sm-12"> -->
				<!-- navbar -->
					<nav class="nav">
							<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about_GO.php">About GO</a></li>
			    			<li><a href="eligibility.php">Eligibility</a></li>
			    			<li><a href="what_people_say.php">What Pepople Say</a></li>
			    			<li><a href="directors_report.php">Director's Report</a></li>
			    			<li><a href="supporting_GO.php"><strong>Donate to GO</strong></a></li>
			    			<li><a href="contact_GO.php">Contact GO</a></li>
			    			<li><a href="info.php">Info</a></li>
			    			<!-- <li><a href="teacher.php">teacher</a></li> -->

			    			<?php
							if(isset($_SESSION['logged_user'])){
								$logged_user = $_SESSION['logged_user'];
								echo '<li style="float:right"><a href="login.php?logout=logout"><strong>logout </strong><i class="fa fa-paw fa-lg"></i></a></li>';
							}else{
								echo '<li style="float:right"><a href="login.php"><strong>login </strong><i class="fa fa-home fa-lg"></i></a></li>';
							}
							?>
							</ul>
					</nav>
				<!-- </div> -->
			</div>
			
	</div>
	</body>
</html>
