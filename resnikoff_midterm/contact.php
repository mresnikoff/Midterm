<?php 
  //1. Create database connection
  $dbhost = "66.147.242.186";  
  $dbuser = "urcscon3_resniko";  
  $dbpass = "Tennis101"; 
  $dbname = "urcscon3_resnikoff";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


$email = Trim(stripcslashes($_POST["email"]));

  //2. Perform database query
  $query = "INSERT INTO Emails (Email1) VALUES ('$email')";
  $result = mysqli_query($connection, $query); 

  
?>
<!DOCTYPE html>
<html lang="en">

  <meta charset="utf-8">
  <link rel="stylesheet" href="css/styles.css">
<head>
  <title></title>
</head>
  <body>
		 <div class="container">
      Success!
      You,
      <?php echo $_POST["email"]; ?>, have been added to the Federer Newsletter!! Enjoy the content! 
 </body>

 <p>To go back, click:</p>
<a class="Home Page" href = "index.html">Here</a>

</html>

<?php
  mysqli_close($connection);
?>
