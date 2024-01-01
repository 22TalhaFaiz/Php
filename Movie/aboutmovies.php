<?php

include('config.php');
include('header.php');

$movieId = isset($_GET['id']) ? $_GET['id'] : '';
$movieId = mysqli_real_escape_string($conn, $movieId);

// Fetch movie details
$qry2 = mysqli_query($conn, "SELECT * FROM movies WHERE id='$movieId'");
$movie = mysqli_fetch_array($qry2);

if ($movie) {
    ?>
	<link href="css/movie.css" rel="stylesheet">
    <div class="content">
        <div class="wrap">
            <div class="content-top">
                <div class="section group">
                    <div class="about span_1_of_2">
                        <h3 style="color:white; font-size:23px;" class="text-center"><?php echo $movie['title']; ?></h3>
                        <div class="about-top">
                            <div class="grid images_3_of_2">
                                <img src="./images/<?php echo $movie['Poster']; ?>" class="w-75" alt=""/>
                            </div>
                            <div class="desc span_3_of_2">
                                <p class="p-link" style="font-size:15px"><b>Genre </b><?php echo $movie['Genre']; ?></p>
                                <p class="p-link" style="font-size:15px"><b>Release Date : </b><?php echo date('d-M-Y', strtotime($movie['Release_Date'])); ?></p>
                                <p style="font-size:15px"><b>Description : </b><?php echo $movie['Description']; ?></p>
                                <a href="<?php echo $movie['Trailer']; ?>" target="_blank" class="watch_but" style="text-decoration:none;">Watch Trailer</a>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <?php
                        // Fetch available shows
                        $s = mysqli_query($conn, "SELECT DISTINCT theater_id FROM showtime WHERE movie_id='$movieId'");
                        if (mysqli_num_rows($s) > 0) {
                            ?>
							<h3 style="color:white;" class="text-center">Available Shows</h3>
                            <table class="table table-hover table-bordered text-center te">
                                
                                <thead>
                                    <tr>
                                        <th class="text-center" style="font-size:16px;"><b>Theatre</b></th>
                                        <th class="text-center" style="font-size:16px;"><b>Show Timings</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($shw = mysqli_fetch_array($s)) {
                                        $theaterId = $shw['theater_id'];
                                        $t = mysqli_query($conn, "SELECT * FROM theater WHERE id='$theaterId'");
                                        $theatre = mysqli_fetch_array($t);

                                        if ($theatre) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $theatre['Theater_Name'] . ", " . $theatre['Location']; ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    $tr = mysqli_query($conn, "SELECT * FROM showtime WHERE movie_id='$movieId' AND theater_id='$theaterId'");
                                                    while ($shh = mysqli_fetch_array($tr)) {
                                                        $showtimeId = $shh['id'];
                                                        $ttm = mysqli_query($conn, "SELECT * FROM showtime WHERE id='$showtimeId'");
                                                        $ttme = mysqli_fetch_array($ttm);

                                                        if ($ttme) {
                                                            ?>
                                                            <a href="check_login.php?show=<?php echo $shh['id']; ?>&movie=<?php echo $shh['movie_id']; ?>&theatre=<?php echo $theaterId; ?>"><button class="btn btn-danger text-white"><?php echo date('h:i A', strtotime($ttme['showdatetime'])); ?></button></a>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                    <?php
                        } else {
                            ?>
                            <h3 style="color:white; font-size:23px;" class="text-center">Currently there are no any shows available!</h3>
                            <p class="text-center">Please check back later!</p>
                    <?php
                        }
                        ?>
                    </div>
					
					<?php include('sidebarm.php');?>
					
                </div>
                <div class="clear"></div>
            </div>
			
        </div>
		
    </div>
	
    <?php
} else {
    // Handle case when movie details are not found
    echo "Movie details not found!";
}
?>
