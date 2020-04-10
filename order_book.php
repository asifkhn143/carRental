<?php
    require 'connection.php';
    //require 'header.php';
    session_start();
    $car_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $booking_query="insert into users_cars(user_id,car_id,status) values('$user_id','$car_id','Pending')";
    $booking_result=mysqli_query($con,$booking_query) or die(mysqli_error($con));
    header('location: cars.php');
?>
