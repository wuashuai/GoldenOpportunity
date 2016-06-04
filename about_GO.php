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
					<div class = "col-sm-8">
						<br><br>
						<div class ="well">
						
							<i class="fa fa-star  fa-lg"></i>&nbsp;&nbsp; GO was conceived by Marty Kaminsky, a veteran Ithaca City School District elementary school teacher and 25-year tutor, as a way to provide effective, cost-free tutoring. GO has been in existence since 2005. <br>
							Golden Opportunity, GO, Inc. is a 501(c)(3) not-for-profit corporation.
                        </div>

                        <div class ="well">
							<i class="fa fa-star fa-lg"></i>&nbsp;&nbsp; Board of Directors<br>
								Andrew Yale (Chair), Ann Halpern, Susan Barnett (Treasurer), Kathy Kelly (Secretary), Patty Kiely, Laura Andolina, Megan Bradley, Ann Sullivan, Elizabeth Einstein, Sheryl Goldberg, Janet McCue<br>
						</div>	
					     <div class ="well">
							<i class="fa fa-star fa-lg"></i>&nbsp;&nbsp; Academic Advisors<br>
								Dr. Wendy Williams, Cornell University, Department of Human Development; Emily Hess, Ithaca College, Department of Education.
					    </div>
					</div>
					
                   
                    <div class = "col-sm-4">
                    	<br><br>
                    	<?php
							require_once "dbhandler.php";
							$url = getimage(3);
							if(isset($_SESSION['logged_user']) && $_SESSION['type'] == 1){
								echo "<a href='popup.php?imageid=3'> <img src='$url' class='img-rounded' alt='dictionary' height='400'></a>";
							}
							else {
								echo "<img src='$url' class='img-rounded' alt='dictionary' height='300'>";
							}
						?>
<!-- 						<img src = "img/marty_kaminsky.jpeg" class="img-rounded" alt="dictionary" height="400"> -->
						<p>Marty Kaminsky<p>
						<p>Photo-courtesy of</p>
						<a href="http://www.daveburbankphotography.com/">http://www.daveburbankphotography.com</a>
					</div>

		    </div>
	    </div>
<!-- 			footer -->
			<div class="footer">
				<p>Photos courtesy of Jo Todd unless otherwise ascribed</p>
			</div>
		

  </body>
</html>
