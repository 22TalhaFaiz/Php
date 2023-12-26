
<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    echo "<script>location.href = 'adminLogin.php';</script>";
    
  }
  else{


include("../config.php");
include("header.php");
// Fetch showtime
$query_showtime = "SELECT * FROM showtime";
$result_showtime = mysqli_query($conn, $query_showtime);

// Fetch movies
$query_movies = "SELECT * FROM movies";
$result_movies = mysqli_query($conn, $query_movies);

// Fetch theater
$query_theater = "SELECT * FROM theater";
$result_theater = mysqli_query($conn, $query_theater);
?>


<section class="main_content dashboard_part large_header_bg">


<div class="col-lg-12">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">  </h3>
</div>
</div>
</div>
<div class="white_card_body">
<div class="card-body">
<form class="form" action="aS.php" method="POST" >
<div class="row mb-3">
<div class="col-md-6">
<label class="form-label" for="inputEmail4">Show Time</label>
<input type="datetime-local" class="form-control" id="inputEmail4" placeholder="Name" name="showdatetime" autocomplete="false">
</div>
<div class="mb-3">
<label class="form-label" for="inputAddress2">Class</label>
<select id="inputState" class="form-control" name="Class">
<option selected>Box</option>
<option>Gold</option>
<option>Platinum</option>
</select>
<div class=" col-md-6">
<label class="form-label" for="inputPassword4">Rates</label>
<input type="number" class="form-control" id="inputPassword4" placeholder="Rates" name="Rates" autocomplete="false">
</div>
</div>

<div class="col-md-4">
<label class="form-label" for="inputState">Movie </label>
<select name="movie_id" id="" class="form-control">
    <?php
    while ($data_movies = mysqli_fetch_assoc($result_movies)) {
    ?>
        <option value="<?php echo $data_movies["id"] ?>"><?php echo $data_movies["title"] ?></option>
    <?php
    }
    ?>
</select>
</div>
<div class="col-md-4">
<label class="form-label" for="inputState">Theater</label>
<select name="Theater_id" id="" class="form-control">
    <?php
    while ($data_theater = mysqli_fetch_assoc($result_theater)) {
    ?>
        <option value="<?php echo $data_theater["id"] ?>"><?php echo $data_theater["Theater_Name"] ?></option>
    <?php
    }
    ?>
</select>
</div>
  </div>
<button type="submit" class="btn btn-primary mx-3">Add</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
include("footer.php");
  }

?>