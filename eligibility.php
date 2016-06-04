<!DOCTYPE HTML>
<html>
	<head>
		
       <meta charset="utf-8">
       <title>home</title>
       <link type="text/css" rel="stylesheet" href="css/style.css">
       <?php   
           $style_path = 'css/style.css';   
           $version = filemtime( $style_path);   
           echo "<link rel='stylesheet' href='$style_path?ver=$version'>";  
         ?> 
	
	</head>
	<body>

	<?php
         include 'header.php'; 
    ?>
		<div class = "container">
            <div class = "row">
            	<div class = "col-sm-1">
            	</div>
					<div class = "col-sm-4">
						<br><br>
						<?php
							require_once "dbhandler.php";
							$url = getimage(4);
							
							if(isset($_SESSION['logged_user']) && $_SESSION['type'] == 1){
								echo "<a href='popup.php?imageid=4'> <img src='$url' class='img-rounded' alt='dictionary' height='400'></a>";
							}
							else {
								echo "<img src='$url' class='img-rounded' alt='dictionary' height='400'>";
							}

						?>
	<!-- 					<img src = "img/Caroline.jpg" class="img-rounded" alt="dictionary" height="400"> -->
						
					</div>
					

                    <div class = "col-sm-5">
                    	<br><br><br>
						<div class ="well">
						
							<h3><i class="fa fa-tag  "></i>&nbsp;&nbsp; Students eligible for GO: </h3><br>
							Students eligible for GO tutoring are children in all Ithaca City School District's elementary and middle schools. <br><br>
							Students are selected based upon need for academic assistance, family ability to afford tutoring, and classroom teacher recommendation.
					    </div>
					</div>

		    </div>
	    </div>
						
				
		<!-- 			footer -->
			<div class="footer">
				<p>Photos courtesy of Jo Todd unless otherwise ascribed</p>
			</div>

  </body>
</html>
