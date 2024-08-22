<?php 
    session_start();
    if(isset($_SESSION['email'])){
    include('connection.php');
    $query1 = "select * from users where email = '$_SESSION[email]'";
    $query_run1 = mysqli_query($connection,$query1);
    $name = "";
    $email = "";
    $mobile = "";
    while($row = mysqli_fetch_assoc($query_run1)){
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
    }
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
                <center><h5><u>Update your profile</u></h5></center>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile:</label>
                        <input type="text" class="form-control" name="mobile" value="<?php echo $mobile; ?>">
                    </div>
                    <input type="submit" class="btn btn-danger" value="Update" name="update">
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