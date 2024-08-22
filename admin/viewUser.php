<?php
  session_start();
  if(isset($_SESSION['email'])){
  include('../connection.php');
  $query = "select * from users";
  $query_run = mysqli_query($connection,$query);
  $sn = 0;
  echo "<center><h4><u>List of Users</u></h4></center><br>";
  echo "<table class='table'>
    <tr>
      <th>S.No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile</th>
      <th>Action</th>
    </tr>";
  while($row = mysqli_fetch_assoc($query_run)){
    $sn = $sn + 1;
    $id = $row['id'];
    echo "
      <tr>
        <td>$sn</td>
        <td>$row[name]</td>
        <td>$row[email]</td>
        <td>$row[mobile]</td>
        <td><a href='deleteUser.php?id=$id'>Delete</a></td>
      </tr>
    ";
  }
  echo "</table>";
  }
else{
  header('location:login.php');
}
?>

