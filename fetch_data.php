<?php
    session_start();
    require 'connection.php';
$query="select * from users";
$result=mysqli_query($con,$query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>
<?php require 'head.php'; ?>
<body>

<div class="row">
<div class="col-sm-3"></div>
<div style="padding-top: 100px" class="col-sm-6">
	
	<table class="table table-bordered table-striped table-dark">
		<tbody>
		 <tr>
			<th colspan="6" class="text-center"><h1>User Data</h1></th>
		</tr>
		<t>
			<th><h3>Id </h3></th>
            <th><h3>Name </h3></th>
            <th><h3>Email </h3></th>
            <th><h3>Password </h3></th>
            <th><h3>Contact </h3></th>
            <th><h3>City </h3></th>
		</t>
		<?php 

         while($rows=mysqli_fetch_array($result))
         {
         ?>
         <tr>
         <td><?php echo $rows['id']; ?> </td>
         <td><?php echo $rows['name']; ?> </td>
         <td><?php echo $rows['email']; ?> </td>
         <td><?php echo $rows['password']; ?> </td>
         <td><?php echo $rows['contact']; ?> </td>
         <td><?php echo $rows['city']; ?> </td>
          </tr>
          <?php
          }
           ?>

	</tbody>
	</table>
</div>
<div class="col-sm-3"></div>
</div>
</body>
</html>