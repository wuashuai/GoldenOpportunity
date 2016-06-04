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
			<br>
            <div class = "row">
            	<div class = "col-sm-2">
            	</div>
				<div class = "col-sm-10">
			
					   <p >For more information about the program or starting a similar program in your locale, please contact: </p>
				
				</div>
			</div>
			 <div class = "row">
			 	<div class = "col-sm-2">
            	</div>
				 <div class = "col-sm-3">
				 	
					<img src = "img/marty_kaminsky.jpeg" class="img-thumbnail" alt="dictionary" width="150">
				</div>
				<div class = "col-sm-7">
					<br>
					<div class ="well">
						
						<i class="fa fa-smile-o "></i>
						&nbsp; Marty Kaminsky, Program Director<br><br>
						 <i class="fa fa-phone  "></i>
						 &nbsp; Phone: 607-273-6656<br><br>
						 <i class="fa fa-envelope   "></i>
						 &nbsp; E-mail: <a href = "mailto:gotutors77@gmail.com ">gotutors77@gmail.com </a>
					</div>
				</div>
			</div>
				
				
<!-- 			footer -->
			<div class="footer">
				<p>Photos courtesy of Jo Todd unless otherwise ascribed</p>
			</div>
			<br>
		</div>
	</body>
</html>