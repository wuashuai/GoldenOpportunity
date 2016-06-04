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
			<div class ="row">
				<div class = "col-sm-3">
				</div>
				<div class = "col-sm-6">
					<br>
					  <div id="slide">
					    <figure>
							<?php
					    		require_once "dbhandler.php";
					    		$images = getslides();
					    		foreach($images as $image) {
					    			$url = $image['url'];
					    			$imageid=$image['imageid'];
					    			if($_SESSION['type'] == 1)
					    				echo "<a href='popup.php?simageid=$imageid'><img src='$url' alt='slideshow' ></a>";
					    			else 
					    				echo "<img src='$url' alt='slideshow' >";
					    		}
					    	?>

				    	</figure>
				    </div>
				</div>
				<div class = "col-sm-3">
				</div>
			</div>
		  

            <div class = "row">
            	<div class = "col-sm-1">
				</div>
					<div class = "col-sm-10">
						<br>
                        
                        <h3><i class="fa fa-commenting  "></i>&nbsp;&nbsp; Individual Comments </h3>
                        <?php
                        	require_once "dbhandler.php";
                        	$comments = getComments('individual');
                        	foreach($comments as $comment) {
                        		$name = $comment['name'];
                        		$src = $comment['src'];
                        		echo "<p><b>$name</b>: <iframe class='commnet' src='$src' width='100%' frameborder='0'></iframe></p>";
                        	}
                        ?>
					
<!-- 						<p><b>Student</b>: <iframe class="commnet" src="comments/student.txt" width="100%" frameborder="0"></iframe></p>

						
						
						<p><b>BJM parent</b>: <iframe class="commnet" src="comments/BJM.txt" width="100%" frameborder="0"></iframe></p>

						<p><b>Dr. Luvelle Brown, Superintendent</b>: <iframe class="commnet" src="comments/Luvelle Brown.txt" width="100%" frameborder="0"></iframe></p>

						<p><b>Cayuga Heights Principal Brad Pollack</b>: <iframe class="commnet" src="comments/Brad Pollack.txt" width="100%" frameborder="0"></iframe></p>

						<p><b>Dr. Judith Pastel, former Superintendent</b>: <iframe class="commnet" src="comments/Judith Pastel.txt" width="100%" frameborder="0"></iframe></p>

						<p><b>South Hill teacher Jen Wilkie</b>: <iframe class="commnet" src="comments/Jen Wilkie.txt" width="100%" frameborder="0"></iframe></p> -->
                 
						
                        <h3><i class="fa fa-commenting  "></i>&nbsp;&nbsp; A sampling of parent and guardian comments: </h3>
						<?php
                        	require_once "dbhandler.php";
                        	$comments = getComments('parent');
                        	foreach($comments as $comment) {
                        		$name = $comment['name'];
                        		$src = $comment['src'];
                        		echo "<p><b>$name</b>: <iframe class='commnet' src='$src' width='100%' frameborder='0'></iframe></p>";
                        	}
                        ?>

                        <?php
    			
						if(isset($_SESSION['logged_user'])){
						
						?>
							
    					<form class = "upload" method="post" enctype="multipart/form-data">
	    					<br>
	    					Who comment : <input type="text", name = "name"> 
	    					What type of you (individual/parent) : <input type="text", name = "type"> 
	     					<input type="file" accept = "comment/*" name='newfile'>
						    <input type="submit" name="submit">
					    </form>
   						
   						<?php

   							if(isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['type']) && !empty($_FILES['newfile'])){
   								require_once "dbhandler.php";
                        		
                        		
                        		$tmp_path = $_FILES["newfile"]["tmp_name"];

            					$comment_name = $_FILES["newfile"]["name"];

            					$path = "comments/" . $comment_name ;
            					setComments($_POST['name'], $_POST['type'], $path);

					            if($_FILES["newfile"]["error"] > 0){
					                echo "Return Code: " . $_FILES["newfile"]["error"] . "<br>";
					            }
					            else{
					                move_uploaded_file($tmp_path, $path);
					            }
   							}
        				}
    					?>


						

				    </div>
				    <div class = "col-sm-1">
				    </div>
		    </div>

		    <div class = "row">
		    	<div class = "col-sm-1">
				</div>
					<div class = "col-sm-10">
						<br>                     
				        <h3><i class="fa fa-commenting  "></i>&nbsp;&nbsp; In the News </h3>
		                <p>
							<a href = "http://www.edudemic.com/power-of-afterschool-learning/">The Power of Afterschool Learning</a>
							<b>8-25-15</b>
							contains a nice section on GO
						</p>

						<p>
							<a href = "https://docs.google.com/viewer?a=v&pid=sites&srcid=ZGVmYXVsdGRvbWFpbnxnb2xkNHN0dWRlbnRzfGd4OjNiY2MxYzI4MWM2YzM4MDA">Ithaca Times</a>
							<b>9-11-2013</b>
						</p>

						<p>
							<b>AARP Bulletin 3/2011:</b>
							<a href = "http://www.aarp.org/giving-back/volunteering/info-03-2011/former-teacher-gives-kids-golden-opportunity.html">Marty Kaminsky Gives Kids a Golden Opportunity</a>
						</p>

						<p>
							<a href = "https://729a7149-a-62cb3a1a-s-sites.googlegroups.com/site/gold4students/files/IthacaTimesPiece.pdf?attachauth=ANoY7coMEMq3zSJH1TlN3iZISwX--VFykICEE7M1AwHT8jf9FXYimOzaBgOmDr1zfne8Sxxa8YHu_KruZHccwvlmfbnrDtuj6v98U77C79c-gjElMaoh3CKOfwptuzz0ZAMVbZf9vBeFEcJfOPlymxJxcHYUMAgYl2X6-3-SGz-1J822vnqEzdDrOCe1ul5lrS6FH_jvyTtLMfundub85almnfyS3Lw8Ah-XL7wdH-td-N3_-iUaY5o%3D&attredirects=0">Ithaca Times</a>
							<b>2/23/2011</b>
						</p>

						<p>
							<a href = "https://sites.google.com/site/gold4students/community-affirmations/american-teacher-march-april-2012">American Teacher, March-April 2012</a>
						</p>
                   </div>
                   <div class = "col-sm-1">
				   </div>
                  
				</div>
         </div>
<!-- 			footer -->
			<div class="footer">
				<p>Photos courtesy of Jo Todd unless otherwise ascribed</p>
			</div>

  </body>
</html>
