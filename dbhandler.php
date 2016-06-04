    <?php
        require_once "config.php";


        function getimage($imageid) {

            $mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
            if($mysqli->errno){
                print("error");
                exit();
            }

        	$sql = "SELECT * FROM image where imageid ='$imageid'";
        	$res = $mysqli->query($sql);
            $row = $res->fetch_assoc();
            return $row['url'];
        }


        function getslides() {

            $mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
            if($mysqli->errno){
                print("error");
                exit();
            }

            $sql = "SELECT * FROM slide_image";
            $res = $mysqli->query($sql);
            $images = array();
            while($row = $res->fetch_assoc()) {
                $image=array();
                $image['url'] = $row['url'];
                $image['imageid'] = $row['imageid'];
                $images[] = $image;
            }
            return $images;
        }

        function modify($file, $table, $imageid) {

            $mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
            if($mysqli->errno){
                print("error");
                exit();
            }
            // $newPhoto = $_FILES['newphoto'];  
            $newPhoto = $file;          
            $originalName = $newPhoto['name'];
            $tempName = $newPhoto['tmp_name'];
            // $imageid = filter_input( INPUT_GET, 'imageid', FILTER_SANITIZE_STRING );
            // $imageid = filter_input( INPUT_GET, '$id', FILTER_SANITIZE_STRING );

            
            if ($newPhoto['error'] == 0 ) {
            move_uploaded_file( $tempName, "img/$originalName");

            // $sql = "SELECT url FROM image WHERE imageid = '$imageid'";
            $sql = "SELECT url FROM $table WHERE imageid = '$imageid'";

            $result = $mysqli->query($sql);
            if ( $mysqli->errno ) {
                print($mysqli->error);
                exit();
            }
            $row = $result->fetch_assoc();
            unlink($row['url']);

            $url = 'img/' . $originalName;
            
            // $sql = "UPDATE image SET url = '$url' WHERE imageid='$imageid'";
            $sql = "UPDATE $table SET url = '$url' WHERE imageid='$imageid'";
            $result = $mysqli->query($sql);
            if ( $mysqli->errno ) {
                print($mysqli->error);
                exit();
            }

            echo '<script language="javascript" type="text/javascript">';
            echo 'window.location = "index.php"';
            echo '</script>';

            // print("upload success!");
            } else {
            // print("upload failed!");
            }
        }

        function upload($file, $table) {

            $mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
            if($mysqli->errno){
                print("error");
                exit();
            }

            $newPhoto = $file;          
            $originalName = $newPhoto['name'];
            $tempName = $newPhoto['tmp_name'];
            if ($newPhoto['error'] == 0 ) {
                move_uploaded_file( $tempName, "img/$originalName");
                $url = 'img/' . $originalName;
                $sql = "INSERT INTO $table (url) VALUES ('$url')";
                $result = $mysqli->query($sql);
                if ( $mysqli->errno ) {
                    print($mysqli->error);
                    exit();
                }

                echo '<script language="javascript" type="text/javascript">';
                echo 'window.location = "index.php"';
                echo '</script>';
            }
        }

        function delete($imageid) {

            $mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
            if($mysqli->errno){
                print("error");
                exit();
            }
                $sql = "DELETE FROM slide_image WHERE imageid='$imageid'";
                $result = $mysqli->query($sql);
                if ( $mysqli->errno ) {
                    print($mysqli->error);
                    exit();
                }

                echo '<script language="javascript" type="text/javascript">';
                echo 'window.location = "index.php"';
                echo '</script>';
        }

        function getComments($type) {
            $mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
            if($mysqli->errno){
                print("error");
                exit();
            }

            $sql = "SELECT * FROM comments WHERE type='$type'";
            $result = $mysqli->query($sql);
            if ( $mysqli->errno ) {
                print($mysqli->error);
                exit();
            }

            $comments = array();
            while($row = $result->fetch_assoc()) {
                $comment=array();
                $comment['name'] = $row['username'];
                $comment['src'] = $row['src'];
                $comments[] = $comment;
            }
            return $comments;

        }
        function setComments($name, $type ,$file) {
            $mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
            if($mysqli->errno){
                print("error");
                exit();
            }

            $sql = "SELECT * FROM comments WHERE username ='$name'";
            $result = $mysqli->query($sql);
            if ( $result->fetch_assoc()) {
                print("you have already comments");
                exit();
            }
            $query = "INSERT INTO comments(username, src, type)  VALUES ('" . $name . "','" . $file . "','" . $type . "');";
            $mysqli->query($query);
        }
    ?>