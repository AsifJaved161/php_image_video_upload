<html>
<?php
    include("config.php");
    include("menu.php");
?>
<body bgcolor='lightblue'>
<br><br><br>

        <center>
        <table border="1px" width="80%">
          <h2>videos</h2>
          <thead>
            <tr>
              <th>ID No.</th>
              <th>Name</th>
              <th>file</th>
            </tr>
          </thead>
          <tbody>
<?php
        $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($fetchVideos)){
            $v_id = $row['id'];
            $v_name = $row['name'];
            $v_location = $row['location'];
 
        
        ?>
            <tr>
              <td><?php echo $v_id; ?></td>
              <td><?php echo $v_name; ?></td>
              <td><video src="<?php echo $v_location;?>" controls width='320px' height="200px"></video></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>


        <table border="1px" width="80%">
          <h2>Images</h2>
          <thead>
            <tr>
              <th>ID No.</th>
              <th>Name</th>
              <th>file</th>
            </tr>
          </thead>
          <tbody>
<?php
        $fetchImage = mysqli_query($con, "SELECT * FROM image ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($fetchImage)){
            $i_id = $row['id'];
            $i_name = $row['name'];
            $i_location = $row['location'];

        
        ?>
            <tr>
              <td><?php echo $i_id; ?></td>
              <td><?php echo $i_name; ?></td>
              <td><img src="<?php echo $i_location;?>" controls width='320px' height="200px"></video></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>



</body>
</html>
