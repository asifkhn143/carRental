<?php
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    } 
    $email=$_SESSION['email'];
$query="select name from users where email='$email'";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
?>

		<?php 
         while($rows=mysqli_fetch_array($result))
         {
         ?>
         <?php echo $rows['name']; ?>
         <?php
          }
         ?>
