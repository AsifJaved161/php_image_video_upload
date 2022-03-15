<!-- for video -->
   <?php
        include("config.php");
     
        if(isset($_POST['vid_upload'])){
                                   
            $name = $_FILES['vid']['name'];
            $target_dir = "uploads/videos/";
            $target_file = $target_dir . $_FILES["vid"]["name"];

            // Select file type
            $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

            // Check extension
            if( in_array($videoFileType,$extensions_arr) ){
                
                
                    // Upload
                    if(move_uploaded_file($_FILES['vid']['tmp_name'],$target_file)){
                        // Insert record
                        $query = "INSERT INTO videos(name,location) VALUES('".$name."','".$target_file."')";

                        mysqli_query($con,$query);
                        echo "<h2 <style color: green;> Video has uploaded Successfully.</h2>";
                    }
                    else{
                          echo "<h2>Invalid file extension.</h2>";
            }
                }

            }   
        
        
        ?> 