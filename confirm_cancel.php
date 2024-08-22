<?php 
  include('connection.php');
  $query = "update booking set is_cancel = 1 where booking_id = '$_GET[tid]'";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
      alert('Tickets Cancelled successfully...');
      window.location.href = 'user_dashboard.php';  
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
      alert('Error...Plz try again.');
      window.location.href = 'user_dashboard.php';
    </script>";
 }