<?php
    require 'connection.php';
    session_start();
    $car_id=$_GET['id'];
    $user_id=$_SESSION['id'];
    $delete_query="delete from users_cars where user_id='$user_id' and car_id='$car_id'";
    $delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
    header('location: order.php');
?>