<?php
	session_start();
    include('connection.php');
    $query = "select * from movies where id = $_GET[mid]";
    $movie_name = "";
    $movie_description = "";
    $movie_link = "";
  	$query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
       $movie_name = $row['name'];
       $movie_description = $row['description'];
       $movie_link = $row['link']; 
    }
?>
<html>
    <head>
        <title>View Movie</title>
        <!-- Bootsrap Files -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<!-- CSS Files -->
		<link rel="stylesheet" href="css/style.css">
    </head>
    <body style="background-color:#FCD2D1;">
    <!-- Header code starts here -->
    <div class="row" id="header">
      <div class="col-md-4" >
        <h4 style="padding-left:15px;font-family:'Comic Sans MS';">Book online movie ticket</h4>
      </div>
      <div class="col-md-7" style="text-align: right;">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="movies.php">Movies</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </div>
    </div>
    <!-- Header code ends here -->
        <br><br>
        <div class="row">
            <div class="col-md-6 m-auto" id="login_form">
            <center><h3><u>Movie detail</u></h3></center>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Movie Name</th>
                        <th>Movie Description</th>
                        <th>Trailor link</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><?php echo $movie_name; ?></td>
                        <td><?php echo $movie_description; ?></td>
                        <td><a href="<?php echo $movie_link; ?>" target="_blank">Watch now</a></td>
                    </tr>
                    </tbody>
                </table><br>
                <center><a href="login.php" class="btn btn-danger btn-sm">Book ticket</a></center>
            </div>
        </div>
    </body>
</html>