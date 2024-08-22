<?php 
    session_start();
    $seats = [];
    $time = "";
    if(isset($_POST['next'])){
        include('connection.php');
        $query = "select booked_seats from booking where is_cancel = 0 and movie_name='$_POST[movie_name]'";
        $query_run = mysqli_query($connection,$query);
        if(mysqli_num_rows($query_run)){
            while($row = mysqli_fetch_assoc($query_run)){
                $booked_seat = $row['booked_seats'];
                $seats = array_merge($seats,unserialize($booked_seat));
            }
        }
    }
    
    if(isset($_POST['confirm_booking'])){
        include('connection.php');
        $booked_seats = serialize($_POST['booked_seat']);
        $movie_name = $_POST['movie_name'];
        $show_time = $_POST['time'];
        $user_id = $_SESSION['user_id'];
        $query = "insert into booking values(null,'$booked_seats','$user_id','$movie_name','$show_time',null,0)";
        $query_run = mysqli_query($connection,$query);
        if($query_run){
          echo "<script type='text/javascript'>
            alert('Tickets booked successfully...');
            window.location.href = 'user_dashboard.php';  
          </script>";
        }
        else{
          echo "<script type='text/javascript'>
            alert('Error...Plz try again.');
            window.location.href = 'user_dashboard.php';
          </script>";
        }
    }

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
    </head>
    <body style="background-color:#FCD2D1;"><br><br>
        <div class="row" style="margin:25px;text-align:center;">
            <div class="col-md-8 m-auto">
                <h5><u>Book movie ticket</u></h5><br>
                <form action="" method="post">
                    <label><b>Movie: </b></label>
                    <input type="hidden" name="movie_name" value="<?php echo $_POST['movie_name']; ?>">
                    <?php echo $_POST['movie_name']; ?>
                    &nbsp;&nbsp;&nbsp;
                        <?php
                            include('connection.php');
                            $query = "select time from movies where name='$_POST[movie_name]'";
                            $query_run = mysqli_query($connection,$query);
                            if(mysqli_num_rows($query_run)){
                                while($row = mysqli_fetch_assoc($query_run)){
                                    $time = $row['time'];                                 
                                }
                            }
                        ?>
                    <label><b>Show: </b></label>
                    <?php echo $time; ?>
                    <input type="hidden" name="time" value="<?php echo $time; ?>">                        
                    <br><br>
                    <table style="margin-left: 225px;">
                        <tr>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A1" style="width:25px;height: 25px;" <?php if(in_array("A1", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A2" style="width:25px;height: 25px;" <?php if(in_array("A2", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A3" style="width:25px;height: 25px;" <?php if(in_array("A3", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A4" style="width:25px;height: 25px;" <?php if(in_array("A4", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A5" style="width:25px;height: 25px;" <?php if(in_array("A5", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A6" style="width:25px;height: 25px;" <?php if(in_array("A6", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A7" style="width:25px;height: 25px;" <?php if(in_array("A7", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A8" style="width:25px;height: 25px;" <?php if(in_array("A8", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A9" style="width:25px;height: 25px;" <?php if(in_array("A9", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A1" style="width:25px;height: 25px;" <?php if(in_array("A1", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A10" style="width:25px;height: 25px;" <?php if(in_array("A10", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A11" style="width:25px;height: 25px;" <?php if(in_array("A11", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A12" style="width:25px;height: 25px;" <?php if(in_array("A12", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A13" style="width:25px;height: 25px;" <?php if(in_array("A13", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A14" style="width:25px;height: 25px;" <?php if(in_array("A14", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A15" style="width:25px;height: 25px;" <?php if(in_array("A15", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A16" style="width:25px;height: 25px;" <?php if(in_array("A16", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A17" style="width:25px;height: 25px;" <?php if(in_array("A17", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A18" style="width:25px;height: 25px;" <?php if(in_array("A18", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A19" style="width:25px;height: 25px;" <?php if(in_array("A19", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="A20" style="width:25px;height: 25px;" <?php if(in_array("A20", $seats)){?> disabled <?php } ?>>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B1" style="width:25px;height: 25px;" <?php if(in_array("B1", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B2" style="width:25px;height: 25px;" <?php if(in_array("B2", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B3" style="width:25px;height: 25px;" <?php if(in_array("B3", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B4" style="width:25px;height: 25px;" <?php if(in_array("B4", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B5" style="width:25px;height: 25px;" <?php if(in_array("B5", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B6" style="width:25px;height: 25px;" <?php if(in_array("B6", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B7" style="width:25px;height: 25px;" <?php if(in_array("B7", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B8" style="width:25px;height: 25px;" <?php if(in_array("B8", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B9" style="width:25px;height: 25px;" <?php if(in_array("B9", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B10" style="width:25px;height: 25px;" <?php if(in_array("B10", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B11" style="width:25px;height: 25px;" <?php if(in_array("B11", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B12" style="width:25px;height: 25px;" <?php if(in_array("B12", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B13" style="width:25px;height: 25px;" <?php if(in_array("B13", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B14" style="width:25px;height: 25px;" <?php if(in_array("B14", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B15" style="width:25px;height: 25px;" <?php if(in_array("B15", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B16" style="width:25px;height: 25px;" <?php if(in_array("B16", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B17" style="width:25px;height: 25px;" <?php if(in_array("B17", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B18" style="width:25px;height: 25px;" <?php if(in_array("B18", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B19" style="width:25px;height: 25px;" <?php if(in_array("B19", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B20" style="width:25px;height: 25px;" <?php if(in_array("B20", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="B20" style="width:25px;height: 25px;" <?php if(in_array("B21", $seats)){?> disabled <?php } ?>>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C1" style="width:25px;height: 25px;" <?php if(in_array("C1", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C2" style="width:25px;height: 25px;" <?php if(in_array("C2", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C3" style="width:25px;height: 25px;" <?php if(in_array("C3", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C4" style="width:25px;height: 25px;" <?php if(in_array("C4", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C5" style="width:25px;height: 25px;" <?php if(in_array("C5", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C6" style="width:25px;height: 25px;" <?php if(in_array("C6", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C7" style="width:25px;height: 25px;" <?php if(in_array("C7", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C8" style="width:25px;height: 25px;" <?php if(in_array("C8", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C9" style="width:25px;height: 25px;" <?php if(in_array("C9", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C10" style="width:25px;height: 25px;" <?php if(in_array("C10", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C11" style="width:25px;height: 25px;" <?php if(in_array("C11", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C12" style="width:25px;height: 25px;" <?php if(in_array("C12", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C13" style="width:25px;height: 25px;" <?php if(in_array("C13", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C14" style="width:25px;height: 25px;" <?php if(in_array("C14", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C15" style="width:25px;height: 25px;" <?php if(in_array("C15", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C16" style="width:25px;height: 25px;" <?php if(in_array("C16", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C17" style="width:25px;height: 25px;" <?php if(in_array("C17", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C18" style="width:25px;height: 25px;" <?php if(in_array("C18", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C19" style="width:25px;height: 25px;" <?php if(in_array("C19", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="C20" style="width:25px;height: 25px;" <?php if(in_array("C20", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D1" style="width:25px;height: 25px;" <?php if(in_array("D1", $seats)){?> disabled <?php } ?>>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D2" style="width:25px;height: 25px;" <?php if(in_array("D2", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D3" style="width:25px;height: 25px;" <?php if(in_array("D3", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D4" style="width:25px;height: 25px;" <?php if(in_array("D4", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D5" style="width:25px;height: 25px;" <?php if(in_array("D5", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D6" style="width:25px;height: 25px;" <?php if(in_array("D6", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D7" style="width:25px;height: 25px;" <?php if(in_array("D7", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D8" style="width:25px;height: 25px;" <?php if(in_array("D8", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D9" style="width:25px;height: 25px;" <?php if(in_array("D9", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D10" style="width:25px;height: 25px;" <?php if(in_array("D10", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D11" style="width:25px;height: 25px;" <?php if(in_array("D11", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D12" style="width:25px;height: 25px;" <?php if(in_array("D12", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D13" style="width:25px;height: 25px;" <?php if(in_array("D13", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D14" style="width:25px;height: 25px;" <?php if(in_array("D14", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D15" style="width:25px;height: 25px;" <?php if(in_array("D15", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D16" style="width:25px;height: 25px;" <?php if(in_array("D16", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D17" style="width:25px;height: 25px;" <?php if(in_array("D17", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D18" style="width:25px;height: 25px;" <?php if(in_array("D18", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D19" style="width:25px;height: 25px;" <?php if(in_array("D19", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D20" style="width:25px;height: 25px;" <?php if(in_array("D20", $seats)){?> disabled <?php } ?>>
                            </td>
                             <td>
                                <input  type="checkbox" name="booked_seat[]" value="D21" style="width:25px;height: 25px;" <?php if(in_array("D21", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="D22" style="width:25px;height: 25px;" <?php if(in_array("D22", $seats)){?> disabled <?php } ?>>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E1" style="width:25px;height: 25px;" <?php if(in_array("E1", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E2" style="width:25px;height: 25px;" <?php if(in_array("E2", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E3" style="width:25px;height: 25px;" <?php if(in_array("E3", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E4" style="width:25px;height: 25px;" <?php if(in_array("E4", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E5" style="width:25px;height: 25px;" <?php if(in_array("E5", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E6" style="width:25px;height: 25px;" <?php if(in_array("E7", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E7" style="width:25px;height: 25px;" <?php if(in_array("E7", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E8" style="width:25px;height: 25px;" <?php if(in_array("E8", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E9" style="width:25px;height: 25px;" <?php if(in_array("E9", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E10" style="width:25px;height: 25px;" <?php if(in_array("E10", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E11" style="width:25px;height: 25px;" <?php if(in_array("E11", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E12" style="width:25px;height: 25px;" <?php if(in_array("E12", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E13" style="width:25px;height: 25px;" <?php if(in_array("E13", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E14" style="width:25px;height: 25px;" <?php if(in_array("E14", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E15" style="width:25px;height: 25px;" <?php if(in_array("E15", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E16" style="width:25px;height: 25px;" <?php if(in_array("E16", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E17" style="width:25px;height: 25px;" <?php if(in_array("E17", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E18" style="width:25px;height: 25px;" <?php if(in_array("E18", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E19" style="width:25px;height: 25px;" <?php if(in_array("E19", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E20" style="width:25px;height: 25px;" <?php if(in_array("E20", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="E21" style="width:25px;height: 25px;" <?php if(in_array("E21", $seats)){?> disabled <?php } ?>>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F1" style="width:25px;height: 25px;" <?php if(in_array("F1", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F2" style="width:25px;height: 25px;" <?php if(in_array("F2", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F3" style="width:25px;height: 25px;" <?php if(in_array("F3", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F4" style="width:25px;height: 25px;" <?php if(in_array("F4", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F5" style="width:25px;height: 25px;" <?php if(in_array("F5", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F6" style="width:25px;height: 25px;" <?php if(in_array("F6", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F7" style="width:25px;height: 25px;" <?php if(in_array("F7", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F8" style="width:25px;height: 25px;" <?php if(in_array("F8", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F9" style="width:25px;height: 25px;" <?php if(in_array("F9", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F10" style="width:25px;height: 25px;" <?php if(in_array("F10", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F11" style="width:25px;height: 25px;" <?php if(in_array("F11", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F12" style="width:25px;height: 25px;" <?php if(in_array("F12", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F13" style="width:25px;height: 25px;" <?php if(in_array("F13", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F14" style="width:25px;height: 25px;" <?php if(in_array("F14", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F15" style="width:25px;height: 25px;" <?php if(in_array("F15", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F16" style="width:25px;height: 25px;" <?php if(in_array("F16", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F17" style="width:25px;height: 25px;" <?php if(in_array("F17", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F18" style="width:25px;height: 25px;" <?php if(in_array("F18", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F19" style="width:25px;height: 25px;" <?php if(in_array("F19", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F20" style="width:25px;height: 25px;" <?php if(in_array("F20", $seats)){?> disabled <?php } ?>>
                            </td>
                            <td>
                                <input  type="checkbox" name="booked_seat[]" value="F21" style="width:25px;height: 25px;" <?php if(in_array("F21", $seats)){?> disabled <?php } ?>>
                            </td>
                        </tr>
                    </table><br>
                    <input type="submit" class="btn btn-danger" name="confirm_booking" value="Confirm Booking">
                </form>
                <a href="user_dashboard.php" class="btn btn-primary">Go Back</a>
            </div>
        </div>
    </body>
</html>