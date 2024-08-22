<?php
  include('../connection.php');
  $query = "delete from users where id = $_GET[id]";
  $query_run = mysqli_query($connection,$query);
  if($query_run){
    echo "<script type='text/javascript'>
      alert('User Deleted successfully...');
      window.location.href = 'admin_dashboard.php';
    </script>";
  }
  else{
    echo "<script type='text/javascript'>
      alert('Failed...Plz try again.');
      window.location.href = 'admin_dashboard.php';
    </script>";
  }
?>
