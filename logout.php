<?php
    session_start();
    session_unset();
    session_destroy();
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
            <br>
            <div class="container" style="margin-top:150px;">
                <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
        <div class="card border">
        <div class="card-header bg text-center text-light"></div>
        <div class="card-body">
                <p style="font-size: 2em">You have been logged out <a href="login.php"> Login</a> again</p>
                </div>
                <div class="card-footer">
                <a href="index.php">Click here</a> to go back home.
            </div>
                </div>
                </div>
                <div class="col-md-3"></div>
                </div>
            </div>
        </div>
<div class="fixed-bottom">
<?php
require 'footer.php';
?>
</div>
 </body>
</html>