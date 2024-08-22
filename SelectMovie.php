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
        <!-- jQuery file -->
        <script type="text/javascript" src="jquery/jquery_latest.js"></script>

        <script type="text/javascript">
            // $(document).ready(function(){
            //     $("#next").click(function(){
            //     $("#load_section").load("bookTicket.php");
            //     });
            // });
        </script>
    </head>
    <body>
        <div class="row" style="margin:25px;">
            <div class="col-md-4">
                <center><h5><u>Choose your movie</u></h5></center>
                <form action="bookTicket.php" method="post">
                    <label><b>Movie: </b></label>
                    <select name="movie_name">
                        <option>-Select-</option>
                        <?php
                            include('connection.php');
                            $query = "select id,name from movies";
                            $query_run = mysqli_query($connection,$query);
                            if(mysqli_num_rows($query_run)){
                                while($row = mysqli_fetch_assoc($query_run)){
                                    ?>
                                    <option id="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
                                    <?php
                                }
                            }
                        ?>
                    </select><br><br>
                    <input type="submit" class="btn btn-danger" name="next" value="Next" id="next">
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