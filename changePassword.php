<?php 
    session_start();
    if(isset($_SESSION['email'])){
?>
<html>
    <head>
        <!-- Bootsrap Files -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<!-- CSS Files -->
		<link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="row" style="margin:25px;">
            <div class="col-md-4">
                <center><h5><u>Change your Password</u></h5></center>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="password">Current Password:</label>
                        <input type="password" class="form-control" name="currPassword" placeholder="Current password" required>
                    </div>
                    <div class="form-group">
                        <label for="password">New Password:</label>
                        <input type="password" class="form-control" name="newPassword1" placeholder="New password" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Confirm Password:</label>
                        <input type="password" class="form-control" name="newPassword2" placeholder="Confirm password" required>
                    </div>
                    <input type="submit" class="btn btn-danger" value="Change Password" name="change_password">
                </form>
            </div>
        </div>
    </body>
</html>
<?php 
}
else{
  header('location:login.php');
}
?>