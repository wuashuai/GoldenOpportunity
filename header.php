<?php session_start();?>
   	<?php   
       $style_path = 'css/style.css';   
       $version = filemtime( $style_path);   
       echo "<link rel='stylesheet' property='stylesheet' href='$style_path?ver=$version'>";  
   	?>
   	<link type="text/css" property='stylesheet' rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" property='stylesheet' href="font-awesome-4.6.3/css/font-awesome.min.css">
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
			</div>
	</div>
