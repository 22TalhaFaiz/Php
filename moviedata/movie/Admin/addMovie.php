
<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    echo "<script>location.href = 'adminLogin.php';</script>";
    
  }
  else{

include("config.php");
include("header.php");
$query = "SELECT * FROM movies";
$result = mysqli_query($conn, $query);
?>

<div class="col-lg-12">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<form action="aM.php" method="POST" enctype ="multipart/form-data">
<h3 class="m-0" >Form row </h3>
</div>
</div>
</div>
<div class="white_card_body">
<div class="card-body">

<div class="row mb-3">
<div class="col-md-6">
  
<label class="form-label" for="inputEmail4">Title</label>
<input type="text" class="form-control" id="inputEmail4" placeholder="Title" name="title">
</div>
<div class=" col-md-6">
<label class="form-label" for="inputPassword4">Poster</label>
<input type="file" class="form-control" id="inputPassword4" placeholder="upload" name ="imag">
</div>
</div>
<div class="mb-3">
<label class="form-label" for="inputAddress">Release Date</label>
<input type="text" class="form-control" id="inputAddress" placeholder="Release Date" name="Release_Date">
</div>
<div class="mb-3">
<label class="form-label" for="inputAddress2">Description </label>
<input type="text" class="form-control" id="inputAddress2" placeholder="Description" name="Description">
</div>
<div class="row mb-3">
<div class=" col-md-6">
<label class="form-label" for="inputCity">Rating</label>
<input type="text" class="form-control" id="inputCity" name="Rating">
</div>
<div class="col-md-4">
<label class="form-label" for="inputState">Genre</label>
<input type="text" class="form-control" id="inputCity" name="Genre">
</select>
</div>
</div>

<input class="btn btn-dark w-100 mt-5" type="submit" name="submit">
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