<?php 
    session_start();
    if(isset($_SESSION['email'])){
    if(isset($_POST['add_show'])){
      include('../connection.php');
      $query = "insert into shows values(null,'$_POST[show_time]')";
      $query_run = mysqli_query($connection,$query);
      if($query_run){
        echo "<script type='text/javascript'>
          alert('Show Time Added successfully...');
          window.location.href = 'admin_dashboard.php';  
        </script>";
      }
      else{
        echo "<script type='text/javascript'>
          alert('Error...Plz try again.');
          window.location.href = 'admin_dashboard.php';
        </script>";
      }
    }

    if(isset($_POST['add_movie'])){
      include('../connection.php');
      $query = "insert into movies values(null,'$_POST[movie_name]','$_POST[movie_desc]','$_POST[link]','$_POST[logo]','$_POST[time]')";
      $query_run = mysqli_query($connection,$query);
      if($query_run){
        echo "<script type='text/javascript'>
          alert('Movie Added successfully...');
          window.location.href = 'admin_dashboard.php';  
        </script>";
      }
      else{
        echo "<script type='text/javascript'>
          alert('Error...Plz try again.');
          window.location.href = 'admin_dashboard.php';
        </script>";
      }
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
		<!-- Bootsrap Files -->
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"></link>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
		<!-- CSS Files -->
		<link rel="stylesheet" href="../css/style.css">
    <!-- jQuery file -->
    <script type="text/javascript" src="../jquery/jquery_latest.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        $("#add_movie").click(function(){
          $("#load_section").load("addMovie.php");
        });
      });

      $(document).ready(function(){
        $("#add_show").click(function(){
          $("#load_section").load("addShow.php");
        });
      });

      $(document).ready(function(){
        $("#view_user").click(function(){
          $("#load_section").load("viewUser.php");
        });
      });

    </script>
  </head>
  <body style="overflow-x: hidden; background-color:#FCD2D1;">
    <!-- Header code starts here -->
    <div class="row" id="header">
      <div class="col-md-4" >
        <h4 style="padding-left:15px;font-family:'Comic Sans MS';">Book online movie ticket</h4>
      </div>
      <div class="col-md-7" style="text-align: right;">
      <span style="padding-right:75px;"><?php echo "Email:" . " " . $_SESSION['email'];?></span>
        <span><?php echo "Welcome:" . " " . $_SESSION['name'];?></span>
      </div>
    </div>
    <!-- Header code ends here -->
    <div class="row" style="margin:25px;">
      <div class="col-md-2" style="border-right:1px solid black;">
        <a class="btn btn-primary btn-block" id="add_movie">Add Movie</a> <br>
        <a class="btn btn-success btn-block" id="add_show">Add Show</a> <br>
        <a class="btn btn-warning btn-block" id="view_user">View User</a> <br>
        <a class="btn btn-danger btn-block" href="../logout.php">Logout</a> <br>
      </div>
      <div class="col-md-8" id="load_section" style="background-color: burlywood;padding:25px;">
        <h5>Load section</h5>
        <p>
          This section is used to load all the file in this section.
        </p>
      </div>
      <div class="col-md-2"></div>
    </div>
  </body>
</html>
<?php  
}
else{
  header('location:login.php');
}
?>
