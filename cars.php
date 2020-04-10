<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
<?php
require 'head.php';
?>
<body>
<div class="fixed-top">
<?php
require 'header1.php';
?>
</div>
<div id="car" class="bg-dark text-white" style="padding-top:80px;padding-bottom:30px">

 <div class="container">

 <div class="jumbotron text-center" style="color: black;">
<div style="font-size: 2em; font-family: monospace;padding-bottom:12px;">
<?php
require 'textSlide.php';
?>
</div>
 <h1 style="font-size:4em;font-family:monospace ;">Welcome to our carRental Store!</h1>
<p style="font-size: 1.5em; font-family:cursive;">We have the best cars for "Wedding", "Photoshoots" & "Travelling". No need to hunt around, we have all in one place.</p>
</div>
</div>
           
  <div class="container">
    <div class="row">

<div class="col-sm-4">
   <a href="order.php"> <a href="order.php"> <img src="pic/car10.jpg" id="b" class="card rounded"></a>
    <center>
    <h2>BMW</h2>
    <p>Price: Rs. 500/day</p>

<?php if(!isset($_SESSION['email'])){ ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Book Now</a></p>
<?php }
else{if(check_if_added(1)){
echo '<a href="#" class="btn btn-block btn-success disabled">Added to order</a>';
}else{  ?>
<a href="order_book.php?id=1" class="btn btn-primary btn-block" name="book">Book Now</a>
<?php }}?>

    </center>
    </div>

        <div class="col-sm-4">
        <center>
         <a href="order.php"> <img src="pic/car11.jpg" id="b" class="card rounded"></a>
        <h2>AUDI</h2>
        <p>Price: Rs. 700/day</p>

<?php if(!isset($_SESSION['email'])){ ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Book Now</a></p>
<?php }
else{if(check_if_added(2)){
echo '<a href="#" class="btn btn-block btn-success disabled">Added to order</a>';
}else{  ?>
<a href="order_book.php?id=2" class="btn btn-primary btn-block" name="book">Book Now</a>
<?php }}?>

        </center>
        </div>

        <div class="col-sm-4">
        <center>
         <a href="order.php"> <img src="pic/car18.jpg" id="b" class="card rounded"></a>
        <h2>JAGUAR</h2>
        <p> Price: Rs. 900/day </p>

<?php if(!isset($_SESSION['email'])){ ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Book Now</a></p>
<?php }
else{if(check_if_added(3)){
echo '<a href="#" class="btn btn-block btn-success disabled">Added to order</a>';
}else{  ?>
<a href="order_book.php?id=3" class="btn btn-primary btn-block" name="book">Book Now</a>
<?php }}?>

        </center>
        </div>

     
   </div>

<br><br>

   <div class="row">
       <div class="col-sm-4">
        <center>
         <a href="order.php"> <img src="pic/car14.jpg" id="b" class="card rounded"></a>
        <h2>DUCATY</h2>
        <p> Price: Rs. 1000/day </p>

 <?php if(!isset($_SESSION['email'])){ ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Book Now</a></p>
<?php }
else{if(check_if_added(4)){
echo '<a href="#" class="btn btn-block btn-success disabled">Added to order</a>';
}else{  ?>
<a href="order_book.php?id=4" class="btn btn-primary btn-block" name="book">Book Now</a>
<?php }}?>

        </center>
       </div>

        <div class="col-sm-4">
        <center>
         <a href="order.php"> <img src="pic/car15.jpg" id="b" class="card rounded"></a>
        <h2>FORD</h2>
        <p> Price: Rs. 1200/day </p>
 
 <?php if(!isset($_SESSION['email'])){ ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Book Now</a></p>
<?php }
else{if(check_if_added(5)){
echo '<a href="#" class="btn btn-block btn-success disabled">Added to order</a>';
}else{  ?>
<a href="order_book.php?id=5" class="btn btn-primary btn-block" name="book">Book Now</a>
<?php }}?>

        </center>
        </div>

        <div class="col-sm-4">
        <center>
         <a href="order.php"> <img src="pic/car16.jpg" id="b" class="card rounded"></a>
        <h2>FORTUNER</h2>
        <p> Price: Rs. 1400/day </p>

<?php if(!isset($_SESSION['email'])){ ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Book Now</a></p>
<?php }
else{if(check_if_added(6)){
echo '<a href="#" class="btn btn-block btn-success disabled">Added to order</a>';
}else{  ?>
<a href="order_book.php?id=6" class="btn btn-primary btn-block" name="book">Book Now</a>
<?php }}?>

        </center>
        </div>


   </div>

<br><br>

    <div class="row">
        <div class="col-sm-4">
        <center>
         <a href="order.php"> <img src="pic/car10.jpg" id="b" class="card rounded"></a>
        <h2>SAFARI</h2>
        <p> Price: Rs. 1800/day </p>

<?php if(!isset($_SESSION['email'])){ ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Book Now</a></p>
<?php }
else{if(check_if_added(7)){
echo '<a href="#" class="btn btn-block btn-success disabled">Added to order</a>';
}else{  ?>
<a href="order_book.php?id=7" class="btn btn-primary btn-block" name="book">Book Now</a>
<?php }}?>

        </center>
        </div>

        <div class="col-sm-4">
        <center>
         <a href="order.php"> <img src="pic/car11.jpg" id="b" class="card rounded"></a>
        <h2>SCORPIO</h2>
        <p> Price: Rs. 2000/day </p>
 
 <?php if(!isset($_SESSION['email'])){ ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Book Now</a></p>
<?php }
else{if(check_if_added(8)){
echo '<a href="#" class="btn btn-block btn-success disabled">Added to order</a>';
}else{  ?>
<a href="order_book.php?id=8" class="btn btn-primary btn-block" name="book">Book Now</a>
<?php }}?>

        </center>
        </div>

        <div class="col-sm-4">
        <center>
         <a href="order.php"> <img src="pic/car12.jpg" id="b" class="card rounded"></a>
        <h2>HONDA_CITY</h2>
        <p> Price: Rs. 2200/day </p>

<?php if(!isset($_SESSION['email'])){ ?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Book Now</a></p>
<?php }
else{if(check_if_added(9)){
echo '<a href="#" class="btn btn-block btn-success disabled">Added to order</a>';
}else{  ?>
<a href="order_book.php?id=9" class="btn btn-primary btn-block" name="book">Book Now</a>
<?php }}?>

        </center>
        </div>
    </div>
   
</div>
</div>

<?php
require 'footer.php';
?>

</body>
</html>

<style>
    #b{
        width: 100%;
        height: 250px;
    }
    #z{
        padding-bottom:20px;
    }
</style>