<?php
session_start();
require 'connection.php';
?>

<!DOCTYPE html>
<html>
<?php
require 'head.php';
?>
<body data-spy="scroll" data-target=".navbar" data-offset="10">
<div>
<?php
require 'header.php' ;
?>

<div class="bg-light">
<section id="home">
<div class="container" style="padding-top: 100px;padding-bottom: 0px">
  <div class="" style="padding-bottom:35px;font-family: monospace; font-weight: bolder;font-size: 2.7em">
    Everything you need to create powerful, professional to feel Free forever.
  </div>
<div class="row">
<div class="col-md-6">
<div class="content section">
  <img class="mySlides rounded" src="pic/car9.jpg" style="width:100%; height: 250px">
  <img class="mySlides rounded" src="pic/car2.jpg" style="width:100%; height: 250px">
  <img class="mySlides rounded" src="pic/car7.jpg" style="width:100%; height: 250px">
  <img class="mySlides rounded" src="pic/car11.jpg" style="width:100%; height: 250px">
  <img class="mySlides rounded" src="pic/car4.jpg" style="width:100%; height: 250px">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>

<div class="col-sm-1">
  
</div>

<?php
 if(!isset($_SESSION['email'])){
?> 
<div class="col-md-4">
<form method="post" action="login_script.php">
<div class="card-body">
<b>Email:</b><br>
<input class="form-control" type="email" placeholder="Email address" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="true"><br>
<b>Password:</b><br>
<input class="form-control" type="password" placeholder="*************" name="password" pattern=".{6,}" required="true"><br>
<input class="btn bg text-light" type="submit" name="login" value="Login" style="font-size: 1.3em"><br><br>
<div class="card-footer">
 Don't have an account? <a href="signup.php"> Register</a>
</div>
</div>
</form>
</div>

<?php
}else{
?>
<div class="col-md-5 card">
<div class="card-body">
<h3 style="color: blue; padding-top: 10px;padding-bottom:; font-family: fantasy;"><b>Welcome to carRental.com</b></h3> <hr>
<p style="color: red; text-align: justify;font-size:1.3em; font-family: serif;">Thanks for visiting and Login to our website and showing interest to book car for the rent. We provide better services for the customer. Our company is trustworthy and benificial for the customer.</p>
 <div class="" style="padding-top:6px; font-family: monospace; font-size: 1.5em;">
  <?php
  require 'textSlide2.php';
   ?>
  </div>
</div>
</div>
<?php
}
?>
</div>

<div style="padding-top: 50px">
  <div class="row">
    <div class="col-sm-12"><h2 class="text-center" ><b>GALLARY</b></h2><hr></div>
  <div class="col-sm-3">
    <img src="pic/car13.jpg" style="width: 100%; height: 180px;padding-top: 10px;" class="rounded">
  </div>
   <div class="col-sm-3">
    <img src="pic/car15.jpg" style="width: 100%; height: 180px;padding-top: 10px;" class="rounded">
  </div>
  <div class="col-sm-3">
    <img src="pic/car18.jpg" style="width: 100%; height: 180px;padding-top: 10px;" class="rounded">
  </div>
  <div class="col-sm-3">
    <img src="pic/car14.jpg" style="width: 100%; height: 180px;padding-top: 10px;" class="rounded">
  </div>

</div>
<hr>
</div>

</div>

</section>

<section>
  <div class="container">
  <h1 id="services" class="text-center" style="padding-top: 60px;"><b>SERVICES</b></h1><hr>

  <div class="" style="font-family: fantasy;text-align: justify;font-size: 2em;color:brown; padding-top:10px">
  <p>We provide three type's of "<u>Services</u>" for the rent. You can choose according to your need by "<u>Click</u>" to given link below.</p>
  </div>

  <div class="" style="padding-top:10px; font-family: monospace; font-size: 2em;">
  <?php
  require 'textSlide.php';
   ?>
  </div>

 <div class="">
  <div class="row" style="padding-top: 20px">
  <div class="col-md-4 hover01 column"> 
  <a href="cars.php" data-toggle="tooltip" title="Click here"> <figure><img src="pic/car13.jpg" class=" card rounded img-thumbnail"></figure> </a>
  <center> 
  <h1 style="padding-top: 15px;"><b>Wedding</b></h1>
  <p><a href="cars.php" role="button" class="btn btn-primary btn-block">Click here</a></p>
  <h3 style="color:#fb3958"><strong>Luxury wedding car</strong></h3>
  <p><i>We have a wide range of Luxury Cars to enlight your special days either it’s your wedding or a special party event, Choose what you like.</i></p> 
  </center>
  <br>
</div>

  <div class="col-md-4 hover01 column">   
  <a href="cars.php" data-toggle="tooltip" title="Click here"> <figure><img src="pic/car16.jpg" class="rc card rounded img-thumbnail"></figure></a>
  <center> 
  <h1 style="padding-top: 15px;"><b>Photoshoots</b></h1>
  <p><a href="cars.php" role="button" class="btn btn-primary btn-block">Click here</a></p>
  <h3 style="color:#fb3958"><strong>Beautiful car for photoshoots</strong></h3>
  <p><i>We have a wide range of Luxury & beautiful cars in our fleet to make your pre-wedding shoot memorable & classy forever, Choose what you like.</i></p> 
  </center>
  <br>
  </div>

  <div class="col-md-4 hover01 column">   
  <a href="cars.php" data-toggle="tooltip" title="Click here"> <figure><img src="pic/car12.jpg" class="rc card rounded img-thumbnail"></figure></a>
  <center> 
  <h1 style="padding-top: 15px;"><b>Travelling</b></h1>
<p><a href="cars.php" role="button" class="btn btn-primary btn-block">Click here</a></p>
  <h3 style="color:#fb3958"><strong>Beautiful rides for Travelling</strong></h3>
  <p><i>We have a wide range of Luxury & beautiful cars in our fleet to make your pre-wedding shoot memorable & classy forever, Choose what you like.</i></p> 
  </center>
  <br>
  </div>

 </div>
</div>
  </div>
  </section>


  <section>
  <div class="container">
  <h1 id="contact" class="text-center"style="padding-top:60px"><b>CONTACT US</b></h1><hr>
<div class="col-sm-12">
<div class="row" style="padding-top:70px;padding-bottom: 40px;">
 <div class="col-md-8" style="padding-top: 30px;">
 <img src="pic/car1.jpg" width="100%" class="responsive">
 </div>

 <div class="col-md-4">
 <form method="post" action="phpmailer.php">
 <div class="card-body">
 <b>Name:</b>
 <input class="form-control" type="text" placeholder="Full Name" name="name" required=""><br><br>
 <b>Phone:</b><br>
 <input class="form-control" type="num" placeholder="Phone number" name="phone" required=""><br><br>
 <b>Email:</b><br>
 <input class="form-control" type="email" placeholder="Email address" name="email" required=""><br><br>
 <b>Help & Feedback:</b><br>
 <textarea class="form-control" rows="5"  name="query" required=""></textarea>
 <br>
 <input class="btn bg text-light" type="submit" name="submit" value="Submit" style="font-size: 1.3em"><br>
 <p class="text-secondary ">Note: If not having account on this website then register first to give feedback or any kind of need help. <a href="signup.php">Register</a></p>
 </div>
 </form>
 </div>
</div>
</div>
  </div>
  </section>


  <section>
  <div class="container">
  <h1 id="about" class="text-center" style="padding-top: 60px;"><b>ABOUT US</b></h1><hr>
  <p class="text-center" style="font-family: cursive; font-size: 1.3em"><b>Who we are and what we do</b></p>
  <p style="font-family: serif;text-align: justify;font-size:1.2em;padding-bottom: 5px">
    carRental.com is part of Booking Holdings Inc., the world leader in online travel & related services. Booking.com Transport Limited (FCA Firm Reference No 777648) is an Appointed Representative of Cover Genius Limited,<br> which is authorised and registered by the Financial Conduct Authority, Firm Reference No 750711.<br>
    Traveljigsaw Insurance Limited is incorporated in Malta and is authorised by the Malta Financial Services Authority to carry on the business of insurance in terms of the Insurance Business Act 1998. Company Registration Number: C82173 Registered Office, Development House, St Anne Street, Floriana, FRN 9010, Malta.
  </p>
    <h2 class="text-center" ><b>HEADQUARTER'S</b></h2><hr>
    <div class="row text-center">
      <div class="col-sm-4" style="padding-top: 10px">
        <div class="card rounded">
      <img src="pic/home1.jpg" style="width:100%">
      <br>
      <h2 class="title" style="color:#fb3958; padding:10px;"><b>Lucknow</b></h2>
      <p><b>Near Post Office GOMTINAGAR , LUCKNOW, UTTAR PRADESH, India, Pin Code:- 226010</b></p>
      <p><b>Phone:</b> +91-9887765444</p>
      <p><b>Email:</b> carRentalLko@gmail.com</p>
      </div>
    </div>
     
        <div class="col-sm-4" style="padding-top: 10px;">
          <div class="card rounded">
        <img src="pic/home2.jpg" style="width:100%">
        <br>
        <h2 class="title" style="color:#fb3958; padding:10px;"><b>Delhi</b></h2>
        <p><b>EASYFLOWERS Block M Market, Near Moti Mahal Greater Kailash Part 1, Delhi, 110048 </b></p>
        <p><b>Phone:</b> +91-9887765445</p>
        <p><b>Email:</b> carRentalDelhi@gmail.com</p>
        </div>
      </div>
    
        <div class="col-sm-4" style="padding-top: 10px">
          <div class="card rounded">
        <img src="pic/home3.jpg" style="width:100%"><br>
        <h2 class="title" style="color:#fb3958; padding:10px;"><b>Mumbai</b></h2>
        <p><b>Near Borivali (W) – Link Rd, Yogi Nagar, MHB Colony, Vazira Naka, Gorai Rd, 400091</b></p>
        <p><b>Phone:</b> +91-9887765446</p>
        <p><b>Email:</b> carRentalMumbai@gmail.com</p>
        </div>
      </div>

  </div>
 <br>
  </div>
  </section>

</div>

<?php
require 'footer.php';
?>
</div>
</body>
</html>

<style>
  .mySlides {display:none;}

  h1,h2{
    font-family: fantasy ;
    font-weight: bold;
  }
.hover01 figure img {
  -webkit-transform: scale(1);
  transform: scale(1);
  -webkit-transition: .3s ease-in-out;
  transition: .3s ease-in-out;
}
.hover01 figure:hover img {
  -webkit-transform: scale(1.3);
  transform: scale(1.3);
}
figure {
  margin: 0;
  padding: 0;
  background: #fff;
  overflow: hidden;
}

</style>