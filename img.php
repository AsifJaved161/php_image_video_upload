<?php
        include("config.php");
     
        if(isset($_POST['img_upload'])){
                                   
            $name = $_FILES['img']['name'];
            $target_dir = "uploads/images/";
            $target_file = $target_dir . $_FILES["img"]["name"];

            // Select file type
            $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Valid file extensions
            $extensions_arr = array("jpg","jpeg","png","webp");

            // Check extension
            if( in_array($videoFileType,$extensions_arr) ){
                
                
                    // Upload
                    if(move_uploaded_file($_FILES['img']['tmp_name'],$target_file)){
                        // Insert record
                        $query = "INSERT INTO image(name,location) VALUES('".$name."','".$target_file."')";

                        mysqli_query($con,$query);
                        echo "<h2 <style color: green;> Image uploaded Successfully.</h2>";
                    }
                    else{
                          echo "<h2>Invalid file extension.</h2>";
            }
                }

            }   
        
        
        ?>