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
		<div>
			<div style="width:1000px">
				    
					<div style="text-align: center">
						<br>
						<b>GOLDEN OPPORTUNITY DIRECTOR'S REPORT 2014-2015</b><br>
						<b>Marty Kaminsky</b><br>
					</div><br>

					<div style="padding-left:100px;">
					<font face="times new roman, serif" size="2" style="color:rgb(80,0,80);">
					<iframe src="report/marty1.txt" width="100%" frameborder="0"></iframe>
					</font>
				</div>
				
			</div>
            <br><br>
			<div style="width:1000px">
				
					<div style="text-align: center">
						<b>GOLDEN OPPORTUNITY DIRECTOR'S REPORT 2013-2014</b><br>
						<b>Marty Kaminsky</b><br>
					</div><br>

					<div style="padding-left:100px;">
					<font face="times new roman, serif" size="2" style="color:rgb(80,0,80);">
					<iframe src="report/marty2.txt" width="100%" frameborder="0"></iframe>
					
					</font>
				</div>
				
			</div>
			<br><br>
			<div style="width:1000px">
				
					<div style="text-align: center">
						<b>EXECUTIVE DIRECTOR'S REPORT 2012-2013</b><br>
						<b>Marty Kaminsky</b><br>
					</div>

					<div style="padding-left:100px;">
					<font face="times new roman, serif" size="2" style="color:rgb(80,0,80);">
					<iframe src="report/marty3.txt" width="100%" frameborder="0"></iframe>
					
					</font>
			        </div>
				
			</div>


			</div>
<!-- 			footer -->
			<div class="footer">
				<p>Photos courtesy of Jo Todd unless otherwise ascribed</p>
			</div>
		</body>
</html>
