<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location:cars.php');
    }
?>
<!DOCTYPE html>
<html>
<?php
require 'head.php';
?>
<body class="bg-img">
<?php
require 'header1.php';
?>
  <div class="container">
  <div class="row">
    <div class="col-sm-4"> </div>
      <div class="col-sm-4" style="padding-top:20px;padding-bottom:;">
         <form method="post" action="signup_script.php">
           <div class="card border rounded">
       <div class="card-header bg text-center text-light"><h3>SignUp</h3></div> 
<div class="card-body">
<h4 class="text-center text-info">SignUp for the Login</h4>
<b>Name:</b>
  <input class="form-control" type="text" placeholder="Full name" name="name" required="true"><br>
<b>Email:</b>
  <input class="form-control" type="text" placeholder="Email address" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"><br>
<b>Password:</b>
  <input class="form-control" type="password" placeholder="Password (atleast 6-digit)" name="password" required="true" pattern=".{6,}"><br>
<b>Contact:</b>
  <input class="form-control" type="text" placeholder="Contact number" name="contact" required="true"><br>
<b>City:</b>
  <input class="form-control" type="text" name="city" placeholder="City" required="true">
</div>
 
<div class="card-footer">
  <center>
  <input class="btn bg text-light" type="submit" name="signup" value="SignUp" style="font-size:1.3em">
</center>
<hr>
Already have an account? <a href="login.php"> Login</a><br>
Go back to home page <a href="index.php"> Home</a>
</div> 
</div>
  
</div>
</form>
</div>
<div class="col-sm-4"></div>
</div>
</div>
<div class="fixed-bottom">
<?php
include ("footer.php");
?>
</div>
</body>
</html>



<style>
.bg-img {
  background-image: url();
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.bg {
  background-color: #105469 !important;
}

</style>