<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:login.php');
    }
    $email=$_SESSION['email'];
    $user_id=$_SESSION['id'];
    $user_cars_query="select it.id,it.name,it.price from users_cars ut inner join cars it on it.id=ut.car_id where ut.user_id='$user_id'";
    $user_cars_result=mysqli_query($con,$user_cars_query) or die(mysqli_error($con));
    $no_of_user_cars= mysqli_num_rows($user_cars_result);
    $sum=0;
    if($no_of_user_cars==0){
        //echo "Add cars to order list first.";
    ?>
        <script>
        window.alert("No cars in the order list!!");
        </script>

    <?php
    }else{
        while($row=mysqli_fetch_array($user_cars_result)){
            $sum=$sum+$row['price']; 
       }
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
            <div class="container" style="padding-top: 40px;">
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr class="bg-dark text-light">
                            <th>Car Number</th><th>Car Name</th><th>Price</th><th>Order</th>
                        </tr>
                       <?php 
                        $user_cars_result=mysqli_query($con,$user_cars_query) or die(mysqli_error($con));
                        $no_of_user_cars= mysqli_num_rows($user_cars_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_cars_result)){
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th><?php echo $row['name']?></th><th><?php echo $row['price']?>/-day</th>
                            <th><a href='order_cancel.php?id=<?php echo $row['id'] ?>'>Cancel</a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
                            <th></th><th>Total</th><th>Rs <?php echo $sum;?>/-day</th><th><a href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Booking</a></th>
                        </tr>
                    </tbody>
                
              <tr>
              <th colspan="2"><a href="index.php">Click here</a> to go home page.</th>
              <th colspan="2"><a href="cars.php">Click here</a> to book any othrer item.</th>
              </tr>
              </table>
            </div>

 <div class="fixed-bottom">        
<?php
require 'footer.php';
?>
</div> 
        </div>
    </body>
</html>