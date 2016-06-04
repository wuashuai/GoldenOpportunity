<!DOCTYPE HTML>
<html>
	<head>
		
       <meta charset="utf-8">
       <title>home</title>
       <link type="text/css" rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
       
       
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
		  	<div class="col-sm-3">
		  		<br>
		  		<div class = "blockquote">
			  		<p>Every single child needs an opportunity. GO is based on giving children a chance.</p>
			  	</div>
			  	<br>
		  		<div class = "blockquote">
			  		<p>Every child needs somebody in their corner, standing up for them, and if every child has some one to believe, every child can success.</p>
			  	</div>
		  	</div>
			<div class="col-sm-6">
				<br>
				<iframe width="550" height="309" scrolling="no" frameborder="0" id="814670336" name="814670336" allowtransparency="true" class="igm" src="//mj89sp3sau2k7lj1eg3k40hkeppguj6j-a-sites-opensocial.googleusercontent.com/gadgets/ifr?url=http://www.gstatic.com/sites-gadgets/iframe/iframe.xml&amp;container=enterprise&amp;view=default&amp;lang=en&amp;country=ALL&amp;sanitize=0&amp;v=1cbf636963b6b8f8&amp;libs=core&amp;parent=https://sites.google.com/site/gold4students/#up_scroll=auto&amp;up_iframeURL=//player.vimeo.com/video/93194386&amp;st=e%3DAIHE3cCYR0Y8DrVxJ63BN4opoqnqfimnG7wPFh2ziir%252Fb9s61xTj7oahxloRrbdlQGUOv4%252B5CiAYlR2gTaefgz1moRzfzZ5Sd4u%252BilvSpEQRHu0izTNQOuC9qA7N7ToFYvzXoHhnjXBk%26c%3Denterprise&amp;rpctoken=5351319116724919140"></iframe>
				
			</div>
			<div class = "col-sm-3">
				<br>
				<div class = "blockquote" >
			  		<p>I just couldn't give up teaching. I still love it...You got chance to focus on one child and help that child to success.</p>
			  	</div>
			  	<br>
			  	<div class = "blockquote">
			  		<p>They are our future. All of these children! And they deserve the best.</p>
			  	</div>
			</div>
		  </div>

		  <div class = "row">
		  	  <div class="col-sm-4">
		  	   </div>
				<div class="col-sm-4">
				<p><a href = "https://soundcloud.com/whcu-radio/20160129martykaminsky"><small>WHCU interview</small></a>
					<small>with GO's founder, Marty Kaminsky 1-29-2016</small>
				</div>
                <div class="col-sm-4">
		      	</div>					
			</div>
          
         

			<div class = "row">
				<div class = "col-sm-1">
				</div>
				<div class = "col-sm-10">
					<div class ="well w3-theme-l4">
					 <i class="fa fa-leaf fa-lg"></i>&nbsp;&nbsp; Golden Opportunity (GO) is a not-for-profit tutoring program providing academic support for elementary and middle school students in the Ithaca City School District.
					GO tutors are primarily retired teachers who are carefully matched with students to create an ideal fit. The selected youngsters have been referred by their teachers. Dedicated tutors work with their students throughout their elementary school years--most continuing into middle school.
		          
	                
	                </div>         
	            </div>
	             <div class = "col-sm-1">
				</div>
			</div>

           <div class = "row">
				<div class = "col-sm-1">
				</div>
				<div class = "col-sm-10">
					<div class ="well">
						 <i class="fa fa-leaf fa-lg"></i>&nbsp;&nbsp; The continuity of tutor/student relationship, along with the trust, insight, and compassion established between tutor and student over a period of years, make this program unique and effective.
	                </div>         
	            </div>
	             <div class = "col-sm-1">
				</div>
			</div>
    

           	<div class = "row">
				<div class = "col-sm-1">
				</div>
				<div class = "col-sm-10">
					<div class ="well w3-theme-l4" >
						 <i class="fa fa-leaf fa-lg"></i>&nbsp;&nbsp; Retired teachers bring years of professional expertise to their students, accelerating learning progress. GO provides 60 hours per school year of direct one-on-one tutoring for each student during after school hours. Research shows such relationships foster student self-esteem and academic success.
	                </div>         
	            </div>
	             <div class = "col-sm-1">
				</div>
			</div>
            <div class = "row">
			     <div class = "col-sm-2">
						<br><br>
						<?php
							require_once "dbhandler.php";
							$url = getimage(11);
							
							if(isset($_SESSION['logged_user']) && $_SESSION['type'] == 1){
								echo "<a href='popup.php?imageid=11'> <img src='$url' class='img-thumbnail' alt='dictionary'></a>";
							}
							else {
								echo "<img src='$url' class='img-thumbnail' alt='dictionary'>";
							}

						?>						
					</div>
					<div class = "col-sm-2">
						<br><br>
						<?php
							require_once "dbhandler.php";
							$url = getimage(12);
							
							if(isset($_SESSION['logged_user']) && $_SESSION['type'] == 1){
								echo "<a href='popup.php?imageid=12'> <img src='$url' class='img-thumbnail' alt='dictionary'></a>";
							}
							else {
								echo "<img src='$url' class='img-thumbnail' alt='dictionary'>";
							}

						?>						
					</div>
					<div class = "col-sm-2">
						<br><br>
						<?php
							require_once "dbhandler.php";
							$url = getimage(13);
							
							if(isset($_SESSION['logged_user']) && $_SESSION['type'] == 1){
								echo "<a href='popup.php?imageid=13'> <img src='$url' class='img-thumbnail' alt='dictionary'></a>";
							}
							else {
								echo "<img src='$url' class='img-thumbnail' alt='dictionary'>";
							}

						?>						
					</div>
					<div class = "col-sm-2">
						<br><br>
						<?php
							require_once "dbhandler.php";
							$url = getimage(14);
							
							if(isset($_SESSION['logged_user']) && $_SESSION['type'] == 1){
								echo "<a href='popup.php?imageid=14'> <img src='$url' class='img-thumbnail' alt='dictionary'></a>";
							}
							else {
								echo "<img src='$url' class='img-thumbnail' alt='dictionary'>";
							}

						?>						
					</div>
					<div class = "col-sm-2">
						<br><br>
						<?php
							require_once "dbhandler.php";
							$url = getimage(15);
							
							if(isset($_SESSION['logged_user']) && $_SESSION['type'] == 1){
								echo "<a href='popup.php?imageid=15'> <img src='$url' class='img-thumbnail' alt='dictionary'></a>";
							}
							else {
								echo "<img src='$url' class='img-thumbnail' alt='dictionary'>";
							}

						?>						
					</div>
					<div class = "col-sm-2">
						<br><br>
						<?php
							require_once "dbhandler.php";
							$url = getimage(16);
							
							if(isset($_SESSION['logged_user']) && $_SESSION['type'] == 1){
								echo "<a href='popup.php?imageid=16'> <img src='$url' class='img-thumbnail' alt='dictionary'></a>";
							}
							else {
								echo "<img src='$url' class='img-thumbnail' alt='dictionary'>";
							}

						?>						
					</div>
				</div>
          
			
</div>


<!-- 				footer -->
			<div class="footer">
				<p>Photos courtesy of Jo Todd unless otherwise ascribed</p>
			</div> 
			
		


	</body>
</html>