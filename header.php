<nav class="navbar navbar-expand-sm bg navbar-dark text-light fixed-top">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><span class="navbar-toggler-icon"></span>
  </button>
     <a class="navbar-brand" href="index.php">
    <img src="logo/logo3.png" alt="Logo" style="width:120px;height:35px;" class="rounded-circle">
  </a>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
<div><hr></div>
    <ul class="navbar-nav mr-auto">
     <li class="nav-item">
      <a class="nav-link" href="#home"><h3>Home</h3></a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="#services"><h3>Sevices</h3></a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="#contact"><h3>Contact</h3></a>
     </li>
     <li class="nav-item">
      <a class="nav-link" href="#about"><h3>About</h3></a>
     </li>
     </ul>

<div><hr></div>
<?php
 if(isset($_SESSION['email'])){
?> 
<ul class="navbar-nav ml-auto">
  <div class="dropdown " style="padding-right: 100px">
  <a class="btn btn-info text-light" data-toggle="dropdown"><span class="fa fa-user"></span> <b style="padding-left: 5px;"><?php require 'fetch_name.php';?></b></a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="order.php">
    <strong><span class="fa fa-shopping-cart"></span> Order</strong></a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="setting.php">
    <strong><span class="fa fa-cog"></span> Change Password</strong></a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="logout.php">
    <strong><span class="fa fa-sign-out"></span> Logout</strong></a>

  </div>
</div>
</ul>

<?php
}else{
?>
<ul class="navbar-nav ml-auto">
    <div class="dropdown " style="padding-right: 100px">
  <a class="btn btn-info text-light" data-toggle="dropdown"><span class="fa fa-user"></span> <b style="padding-left: 5px;">User</b></a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="login.php">
    <strong><span class="fa fa-sign-in"></span> Login</strong></a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="signup.php">
    <strong><span class="fa fa-user"></span> SignUp</strong></a>
  </div>
</div>
</ul>

<?php
}
?>
<div><hr></div>
  </div>
</nav>
<style>
.bg {
  background-color: #105469 !important;
}
.nav-item:hover {
  background-color:blue;
  border-radius: 5px 0px 5px 0px;
}
.bg .nav-item .nav-link {
    color: grey;
    padding-right: 10px;
    padding-left: 10px;
    font-family:bold serif;
    padding-bottom:0px;
}
.bg .nav-item:hover .nav-link {
    color: white;
}
</style>