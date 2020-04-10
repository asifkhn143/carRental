<?php
    function check_if_added($car_id){
        //session_start();    
        require 'connection.php';
        $user_id=$_SESSION['id'];
        $cars_check_query="select * from users_cars where car_id='$car_id' and user_id='$user_id' and status='Pending'";
        $cars_check_result=mysqli_query($con,$cars_check_query) or die(mysqli_error($con));
        $num_rows=mysqli_num_rows($cars_check_result);
        if($num_rows>=1)return 1;
        return 0;
    }
?>