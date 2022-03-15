

<html>
<head>

  <?php include('config.php');
      include('menu.php');
 ?>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
  <center>
<h2>Contact</h2>

<?php 
  if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    mysqli_query($con, "INSERT into emails values('','$fname','$lname','$email','$message')");

      echo "<h3 style='color:green;'>Email Sent Successfully!</h3>";
  }
 ?>

<center>
<div class="container">


  <form method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name.." required>

    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" placeholder="Your Eamil address.." required>

    <label for="subject">Subject</label>
    <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"  required></textarea>

    <input type="submit" name="submit" value="Submit">

  </form>
  </center>
</div>

</body>
</html>
