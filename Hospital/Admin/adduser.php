
<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    echo "<script>location.href = 'adminLogin.php';</script>";
    
  }
  else{

include("config.php");
include("header.php");
?>
<section class="main_content dashboard_part large_header_bg">


<div class="col-lg-12">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0"> Add Hospital </h3>
</div>
</div>
</div>
<div class="white_card_body">
<div class="card-body">
<form>
<div class="row mb-3">
<div class="col-md-6">
<label class="form-label" for="inputEmail4">Email</label>
<input type="email" class="form-control" id="inputEmail4" placeholder="Email">
</div>
<div class=" col-md-6">
<label class="form-label" for="inputPassword4">Password</label>
<input type="password" class="form-control" id="inputPassword4" placeholder="Password">
</div>
</div>
<div class="mb-3">
<label class="form-label" for="inputAddress">Address</label>
<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
</div>
<div class="mb-3">
<label class="form-label" for="inputAddress2">Address 2</label>
<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
</div>
<div class="row mb-3">
<div class=" col-md-6">
<label class="form-label" for="inputCity">City</label>
<input type="text" class="form-control" id="inputCity">
</div>
<div class="col-md-4">
<label class="form-label" for="inputState">State</label>
<select id="inputState" class="form-control">
<option selected>Choose...</option>
<option>...</option>
</select>
</div>
<div class=" col-md-2">
<label class="form-label" for="inputZip">Zip</label>
<input type="text" class="form-control" id="inputZip">
</div>
</div>
<div class>
<div class="form-check">
<input class="form-check-input" type="checkbox" id="gridCheck">
<label class="form-label form-check-label" for="gridCheck">
Check me out
</label>
</div>
</div>
<button type="submit" class="btn btn-primary">Sign in</button>
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