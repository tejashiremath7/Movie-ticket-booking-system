<html>
    <head>
        <!-- Bootsrap Files -->
		<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"></link>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
		<!-- CSS Files -->
		<link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="row" style="margin:25px;">
            <div class="col-md-4">
                <center><h5><u>Add Movie</u></h5></center>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="movie_name">Movie Name:</label>
                        <input type="text" class="form-control" name="movie_name" placeholder="Movie Name">
                    </div>
                    <div class="form-group">
                        <label for="movie_desc">Movie Description:</label>
                        <textarea class="form-control" name="movie_desc" placeholder="Movie Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="movie_link">Trailor Link:</label>
                        <input type="text" class="form-control" name="link" placeholder="Trailor Link">
                    </div>
                    <div class="form-group">
                        <label for="logo">Movie logo:</label>
                        <input type="text" class="form-control" name="logo" placeholder="Movie Logo">
                    </div>
                    <div class="form-group">
                        <label for="logo">Show Time:</label>
                        <input type="text" class="form-control" name="time" placeholder="Show time">
                    </div>
                    <input type="submit" class="btn btn-danger" value="Add Movie" name="add_movie">
                </form>
            </div>
        </div>
    </body>
</html>