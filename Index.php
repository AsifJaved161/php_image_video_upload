<!DOCTYPE html>
<html>
<head>

<?php include('menu.php') ?>

</head>

<body bgcolor='lightblue'>


<br><br><br>
  <center>
  <form method="post" enctype="multipart/form-data">
   
      <label for="fileField">Please Upload Image:</label>
      <input type="file" name="img" id="fileField"> 
      <input type="submit" name="img_upload" id="submit" value="Submit Image">
    
      <br> <br>
      <label for="fileField">Please Upload Video:&nbsp;</label>
      <input type="file" name="vid" id="fileField">
      <input type="submit" name="vid_upload" id="btn1" value="Submit Video">
    </form>
    </center>

<?php include('img.php');
      include('video.php');
 ?>
 

</body>
</html>
