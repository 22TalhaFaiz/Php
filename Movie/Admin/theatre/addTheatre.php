
<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    echo "<script>location.href = 'adminLogin.php';</script>";
    
  }
  else{

include("../config.php");
include("header.php");
$query = "SELECT * FROM theater";
$result = mysqli_query($conn, $query);
?>

<div class="col-lg-12">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<form action="aT.php" method="POST" enctype ="multipart/form-data">
<h3 class="m-0" >Form row </h3>
</div>
</div>
</div>
<div class="white_card_body">
<div class="card-body">

<div class="row mb-3">
<div class="col-md-6">
<label class="form-label" for="inputEmail4">Theater Name</label>
<input type="text" class="form-control" id="inputEmail4" placeholder="Theater Name" name="Theater_Name">
</div>
<div class=" col-md-6">
<label class="form-label" for="inputPassword4">Location</label>
<input type="text" class="form-control" id="inputPassword4" placeholder="Location" name ="Location">
</div>
</div>
<div class="mb-3">
<label class="form-label" for="inputAddress">Capacity</label>
<input type="number" class="form-control" id="inputAddress" placeholder="Capacity" name="Capacity">
</div>
<div class="mb-3">
<label class="form-label" for="inputAddress2">Class</label>
<select id="inputState" class="form-control" name="Class">
<option selected>Box</option>
<option>Gold</option>
<option>Platinum</option>
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