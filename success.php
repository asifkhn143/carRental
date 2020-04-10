<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }else{
        $user_id=$_GET['id'];
        $confirm_query="update users_cars set status='Confirmed' where user_id=$user_id";
        $confirm_query_result=mysqli_query($con,$confirm_query) or die(mysqli_error($con));
    }
?>
<!DOCTYPE html>
<html>
<?php
require 'head.php';
?>
    <body>
        <div>
            <?php
                require 'header1.php';
            ?>
            <div class="container" style="padding-top:100px; ">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
        <div class="card border" >
        <div class="card-header bg text-center text-light"><h3></h3></div>
<div class="card-body text-center" style="padding-bottom:10px;font-family:serif; font-weight: bolder;">
       <p style="font-size: 3em">Your booking is confirmed.</p><hr>
       <p style="font-size: 2em">Thank you for booking with us. </p>
        <p>We will try to contact you soon as per your given record or contact number "Stay Tuned" Have a great day. 😊 </p>
</div>
         
<div class="card-footer">
<a href="cars.php">Click here</a> to book any other item.<br>
<a href="index.php">Click here</a> to go home page.
 </div>
</div>
</div>

                    <div class="col-sm-2"></div>
                </div>
          </div>
 <div class="fixed-bottom">        
<?php
require 'footer.php';
?>
</div> 
        </div>
    </body>
</html>