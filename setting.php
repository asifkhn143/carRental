 <?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
<?php
require 'head.php';
?>                 
<body>
    <?php
    require 'header1.php';
    ?>
      <div class="container">
      <div class="row">
      <div class="col-sm-4"> </div>
      <div class="col-sm-4" style="padding-top:40px;padding-bottom:">
                  <form method="post" action="setting_script.php">
                    <div class="card border rounded">
       <div class="card-header bg text-center text-light"><h3>Change Password</h3></div> 
       <div class="card-body">
                            <div class="form-group">
                                <input type="password" class="form-control" name="oldPassword" placeholder="Old Password" required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="newPassword" placeholder="New Password" required="true">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="retype" placeholder="Re-type new password" required="true">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn bg text-light" value="Change">
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
    require 'footer.php';
    ?>
</div>
</body>
</html>