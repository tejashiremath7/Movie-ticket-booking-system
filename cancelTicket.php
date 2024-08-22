<?php
  session_start();
  if(isset($_SESSION['email']))
  {
  $booked_seats = "";
  $booking_time = "";
    include('connection.php');
    $query = "select * from booking where user_id = $_SESSION[user_id] and is_cancel = 0";
    $query_run = mysqli_query($connection,$query);
?>
<html>
  <body>
    <div class="row">
      <div class="col-md-4">
      <center><h3><u>Your Booking details</u></h3></center><br><br>
        <?php 
          while($row = mysqli_fetch_assoc($query_run)){
          $booked_seats = $row['booked_seats']; 
          $booking_time = $row['booking_time'];
          $booking_id = $row['booking_id'];
          if($booked_seats == ""){
            echo "There is no Booking!!";
          }
          else{
            echo "<br>You Booked: ";
            foreach (unserialize($booked_seats) as $seat){
              echo $seat . " , ";
            }
            echo "<br>";
            echo "Movie Name: " . $row['movie_name'];
            echo "<br>";
            echo "Show Time:" . $row['show_time'];
            echo "<br>";
            echo "Booking time: " . $booking_time;
            echo "<br>";
            
            ?>
            <a href="confirm_cancel.php?tid=<?php echo $booking_id; ?>" class="btn btn-danger btn-sm">Cancel ticket</a>
            <?php 
            echo "<br>";
          }
        }
      ?>
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